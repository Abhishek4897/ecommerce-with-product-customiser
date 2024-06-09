<?php 
namespace Shiprocket;
// include_once __DIR__."/Resources/Users.php";
// foreach (glob(__DIR__."Resources/*.php") as $filename)
$files = array("Users", "Settings", "Products", "Orders", "Manifests", "Couriers");
foreach ($files as $filename)
{
    $file = "Resources/".$filename.".php";
    include_once __DIR__.'/'.$file;
}
// use Exception;
// use GuzzleHttp\Client as HttpClient;
// use GuzzleHttp\Exception\ClientException as HttpClientException;
// use GuzzleHttp\Psr7\Response;

use ReflectionClass;

class Client
{
    use Resources\Users,
        Resources\Manifests,
        Resources\Products,
        Resources\Settings,
        Resources\Orders,
        Resources\Couriers;

	public $token;
    public $email;
    public $password;
	public $use_sandbox;
	public $version = 'v1';
    public $rate_limit = null;
    public $httpClient;

    /**
     * Creates a new client.
     *
     * @param    array    $config
     */
    public function __construct($config = [])
    {
		$this->configure($config);
        // $this->httpClient = new HttpClient;
        
        if (empty($this->token)) {
            $this->setToken($this->getToken());
        }
    }

    /**
     * Gets authorization header value.
     *
     * @return string
     */
    public function getAuthorizationHeader()
    {
        if ($this->token) {
            return 'Bearer ' . $this->token;
        }
    }

    /**
     * Gets HttpClient config for verb and parameters.
     *
     * @param    string   $verb
     * @param    array    $parameters
     *
     * @return   array
     */
    public function getConfigForVerbAndParameters($verb, $parameters = [])
    {
        $config = [
            "Content-Type: application/json"
        ];
        $headers = $this->getHeaders();
        if(!empty($headers['Authorization']))
            $config[] = "Authorization: ".$headers['Authorization'];
        // if (!empty($parameters)) {
        //     if (strtolower($verb) == 'get') {
        //         $config['query'] = $parameters;
        //     } else {
        //         $config['json'] = $parameters;
        //     }
        // }

        return $config;
    }

    /**
     * Gets headers for request.
     *
     * @return   array
     */
    public function getHeaders()
    {
        return [
            'Authorization' => trim($this->getAuthorizationHeader())
        ];
    }

    /**
     * Builds url from path.
     *
     * @param    string   $path
     *
     * @return   string   Url
     */
    public function getUrlFromPath($path)
    {
        $path = ltrim($path, '/');

        $host = 'https://'.($this->use_sandbox ? 'krmct000.kartrocket.com/' : 'apiv2.shiprocket.in/');

        return $host.($this->version ? $this->version : '').'/external/'.$path;
    }

    /**
     * Handles http client exceptions.
     *
     * @param    HttpClientException $e
     *
     * @return   void
     * @throws   Exception
     */
    public function handleRequestException(HttpClientException $e)
    {
        if ($response = $e->getResponse()) {
            $exception = new Exception($response->getReasonPhrase(), $response->getStatusCode(), $e);
            // $exception->setBody(json_decode($response->getBody()));

            throw $exception;
        }

        throw new Exception($e->getMessage(), 500, $e);
    }

    /**
     * Parses configuration.
     *
     * @param    array    $config
     *
     * @return   array    $config
     */
    public function configure($config = [])
    {
        $this->email 		= $config['email'];
        $this->password 	= $config['password'];
        $this->use_sandbox  = $config['use_sandbox'];
        
        return $this;
    }

    /**
     * Parses configuration.
     *
     * @param    array    $config
     * @return   array    $config
     */
    public function getConfiguration()
    {
        return [
            'email'         => $this->email,
            'password'      => $this->password,
            'use_sandbox'   => $this->use_sandbox
        ];
    }

    /**
     * Get authorization token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->request(
            'post', 
            'auth/login', 
            $this->getConfiguration()
        )['token'];
    }

    /**
     * Set authorization token
     *
     * @param string $value
     * @return this
     */
    public function setToken($value)
    {
        $this->token = $value;
        
        return $this;
    }

    /**
     * Makes a request to the Shiprocket API and returns the response.
     *
     * @param    string   $verb       The Http verb to use
     * @param    string   $path       The path of the APi after the domain
     * @param    array    $parameters Parameters
     *
     * @return   stdClass             The JSON response from the request
     * @throws   Exception
     */
    public function request($verb, $path, $parameters = [])
    {
        // $login_path = "https://apiv2.shiprocket.in/v1/external/auth/login";
        // $postFields = "{\n    \"email\": \"\",\n    \"password\": \"\"\n}";
        $url = $this->getUrlFromPath($path);
        $verb = strtolower($verb);
        $headers = $this->getConfigForVerbAndParameters($verb, $parameters);
        $verb = strtoupper($verb);
        $postFields = json_encode($parameters);
        $curl = curl_init();
        $curlData = array(
          CURLOPT_URL => $url,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => $verb,
          CURLOPT_POSTFIELDS =>$postFields,
          CURLOPT_HTTPHEADER => $headers,
        );
        curl_setopt_array($curl, $curlData);
        $response = curl_exec($curl);
        
        curl_close($curl);
        // echo $response;

        // $client = $this->httpClient;
        // $url = $this->getUrlFromPath($path);
        // $verb = strtolower($verb);
        // $config = $this->getConfigForVerbAndParameters($verb, $parameters);

        // try {
        //     $response = $client->$verb($url, $config);
        // } catch (HttpClientException $e) {
        //     $this->handleRequestException($e);
        // }

        return json_decode($response, 1);
    }

    /**
     * Sets Http Client.
     *
     * @param    HttpClient  $client
     *
     * @return   Client
     */
    public function setHttpClient(HttpClient $client)
    {
		$this->httpClient = $client;
		
        return $this;
    }
}

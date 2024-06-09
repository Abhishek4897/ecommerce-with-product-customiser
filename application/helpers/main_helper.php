<?php
    function awb_delivery_status($awb='') {
        // $awb = "SF91378702KR";
        include_once APPPATH . 'third_party/shiprocket/shiprocket.php';
        $shiprocket = new ShiprocketSDK();
        $act_data = $shiprocket->getDeliveryStatus($awb);
        if(isset($act_data['tracking_data']) && $act_data['tracking_data']['track_status']==1) {
            $tracking_data = $act_data['tracking_data'];
            $shipment_track = $tracking_data['shipment_track'][0];
            foreach($tracking_data['shipment_track_activities'] as $shipment_track_activities):
                $scans[] = (object)$shipment_track_activities;
            endforeach;
            // $scans[] = (object)array(
            //     "date" => "2019-06-25 12:08:00",
            //     "activity" => "Order Received",
            //     "location" => $shipment_track['destination']
            // );
            $data = (object)array(
                "awb" => $shipment_track['awb_code'],
                "current_status" => $shipment_track['current_status'],
                "current_timestamp" => date("Y-m-d H:i:s"),
                "order_id" => $shipment_track['order_id'],
                "etd" => date("jS F Y", strtotime($tracking_data['edd'])),
                "scans" => $scans
            );
        }
        return isset($data)?$data:$act_data;
    }
    
    function make_img_url($img64, $name="") {
        if($name=="")
            $name = rand().'.png';
        $output_file = "https://arteno.in/uploads/invoice/".$name;
        $output_path = __DIR__."/../../uploads/invoice/".$name;
        // open the output file for writing
        $ifp = fopen( $output_path, 'wb' ); 
    
        // split the string on commas
        // $data[ 0 ] == "data:image/png;base64"
        // $data[ 1 ] == <actual base64 string>
        $data = explode( ',', $img64 );
    
        // we could add validation here with ensuring count( $data ) > 1
        fwrite( $ifp, base64_decode( $data[ 1 ] ) );
    
        // clean up the file resource
        fclose( $ifp ); 
        if(filesize($output_path)==0)
            return false;
        return $output_file;
    }

    /**
     * English Number Converter - Collection of PHP functions to convert a number
     *                            into English text.
     */
    function convertNumberFromAmt($number)
    {
        return strtoupper(convertNumber($number).' only');
    }

    function convertNumber($number)
    {
        list($integer, $fraction) = explode(".", (string) $number);
    
        $output = "";
    
        if ($integer{0} == "-")
        {
            $output = "negative ";
            $integer    = ltrim($integer, "-");
        }
        else if ($integer{0} == "+")
        {
            $output = "positive ";
            $integer    = ltrim($integer, "+");
        }
    
        if ($integer{0} == "0")
        {
            $output .= "zero";
        }
        else
        {
            $integer = str_pad($integer, 36, "0", STR_PAD_LEFT);
            $group   = rtrim(chunk_split($integer, 3, " "), " ");
            $groups  = explode(" ", $group);
    
            $groups2 = array();
            foreach ($groups as $g)
            {
                $groups2[] = convertThreeDigit($g{0}, $g{1}, $g{2});
            }
    
            for ($z = 0; $z < count($groups2); $z++)
            {
                if ($groups2[$z] != "")
                {
                    $output .= $groups2[$z] . convertGroup(11 - $z) . (
                            $z < 11
                            && !array_search('', array_slice($groups2, $z + 1, -1))
                            && $groups2[11] != ''
                            && $groups[11]{0} == '0'
                                ? " and "
                                : ", "
                        );
                }
            }
    
            $output = rtrim($output, ", ");
            $output .= " rupees";
        }
    
        if ($fraction > 0)
        {
            // $output .= " point";
            $output .= " and";
            for ($i = 0; $i < strlen($fraction); $i++)
            {
                $output .= " " . convertDigit($fraction{$i});
            }
            $output .= " paise";
        }
    
        return $output;
    }
    
    function convertGroup($index)
    {
        switch ($index)
        {
            case 11:
                return " decillion";
            case 10:
                return " nonillion";
            case 9:
                return " octillion";
            case 8:
                return " septillion";
            case 7:
                return " sextillion";
            case 6:
                return " quintrillion";
            case 5:
                return " quadrillion";
            case 4:
                return " trillion";
            case 3:
                return " billion";
            case 2:
                return " million";
            case 1:
                return " thousand";
            case 0:
                return "";
        }
    }
    
    function convertThreeDigit($digit1, $digit2, $digit3)
    {
        $buffer = "";
    
        if ($digit1 == "0" && $digit2 == "0" && $digit3 == "0")
        {
            return "";
        }
    
        if ($digit1 != "0")
        {
            $buffer .= convertDigit($digit1) . " hundred";
            if ($digit2 != "0" || $digit3 != "0")
            {
                $buffer .= " and ";
            }
        }
    
        if ($digit2 != "0")
        {
            $buffer .= convertTwoDigit($digit2, $digit3);
        }
        else if ($digit3 != "0")
        {
            $buffer .= convertDigit($digit3);
        }
    
        return $buffer;
    }
    
    function convertTwoDigit($digit1, $digit2)
    {
        if ($digit2 == "0")
        {
            switch ($digit1)
            {
                case "1":
                    return "ten";
                case "2":
                    return "twenty";
                case "3":
                    return "thirty";
                case "4":
                    return "forty";
                case "5":
                    return "fifty";
                case "6":
                    return "sixty";
                case "7":
                    return "seventy";
                case "8":
                    return "eighty";
                case "9":
                    return "ninety";
            }
        } else if ($digit1 == "1")
        {
            switch ($digit2)
            {
                case "1":
                    return "eleven";
                case "2":
                    return "twelve";
                case "3":
                    return "thirteen";
                case "4":
                    return "fourteen";
                case "5":
                    return "fifteen";
                case "6":
                    return "sixteen";
                case "7":
                    return "seventeen";
                case "8":
                    return "eighteen";
                case "9":
                    return "nineteen";
            }
        } else
        {
            $temp = convertDigit($digit2);
            switch ($digit1)
            {
                case "2":
                    return "twenty-$temp";
                case "3":
                    return "thirty-$temp";
                case "4":
                    return "forty-$temp";
                case "5":
                    return "fifty-$temp";
                case "6":
                    return "sixty-$temp";
                case "7":
                    return "seventy-$temp";
                case "8":
                    return "eighty-$temp";
                case "9":
                    return "ninety-$temp";
            }
        }
    }
    
    function convertDigit($digit)
    {
        switch ($digit)
        {
            case "0":
                return "zero";
            case "1":
                return "one";
            case "2":
                return "two";
            case "3":
                return "three";
            case "4":
                return "four";
            case "5":
                return "five";
            case "6":
                return "six";
            case "7":
                return "seven";
            case "8":
                return "eight";
            case "9":
                return "nine";
        }
    }
    
    function getListOfStates() {
        $list_of_state = array("Andhra Pradesh", "Andaman and Nicobar Islands", "Arunachal Pradesh", "Assam", "Bihar", "Chandigarh", "Chhattisgarh", "Dadar and Nagar Haveli", "Daman and Diu", "Delhi", "Lakshadweep", "Puducherry", "Goa", "Gujarat", "Haryana", "Himachal Pradesh", "Jammu and Kashmir", "Jharkhand", "Karnataka", "Kerala", "Madhya Pradesh", "Maharashtra" ,"Manipur", "Meghalaya", "Mizoram", "Nagaland", "Odisha", "Punjab", "Rajasthan", "Sikkim", "Tamil Nadu", "Telangana", "Tripura", "Uttar Pradesh", "Uttarakhand", "West Bengal");
        return $list_of_state;
    }
    
    function getTempIds($temp_id="") {
        if($temp_id=="") {
            $temp_ids[] = $temp_id;
        } else {
            $CI = &get_instance();
            $CI->load->model("Editor_model");
            $temp_ids = $CI->Editor_model->getTempIds($temp_id);
        }
        return $temp_ids;
    }
    
    function getTempPrice($temp_id="") {
        $temp_price = 20;
        if($_GET['product']==2)
            $temp_price = 50;
        elseif($_GET['product']==3)
            $temp_price = 30;
        else
            $temp_price = 20;
        return $temp_price;
    }
    
    function get_url($type="", $post="") {
        $pre = "";
        if($type=="theme")
            $pre = "theme/";
        if($type=="assets")
            $pre = "assets/";
        if($type=="main_spinner")
            // $pre = "theme/core/assets/images/spinner.gif";
            $pre = "assets/img/unnamed.gif";
        $post = ltrim($post, '/');
        return base_url($pre.$post);
    }
    
    function getSidenCharge($temp_id="", $pid="") {
        $backSide_charge = 0;
        if($temp_id=="" || $pid=="" || $pid!=2)
            return $backSide_charge;
        $CI = &get_instance();
        $CI->load->model("Editor_model");
        $backSide_charge = $CI->Editor_model->getSidenCharge($temp_id);
        return $backSide_charge;
    }

    function getBackSideCharge($temp_id="", $pid="") {
        $backSide_charge = 0;
        if($temp_id=="" || $pid=="" || $pid!=2)
            return $backSide_charge;
        $CI = &get_instance();
        $CI->load->model("Editor_model");
        $backSide_charge = $CI->Editor_model->getBackSideCharge($temp_id);
        return $backSide_charge;
    }
    
    function getProductExtraImages($prod="2", $side="left") {
        $aside = $side;
        //2 front back left right
        //3 front back side
        //4 front left right
        $link = "assets/mockups/sides/".$prod."/".$aside.".png";
        $url = base_url($link);
        return $url;
    }
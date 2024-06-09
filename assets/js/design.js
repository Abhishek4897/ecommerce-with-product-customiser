jQuery(document).ready(function(t) {
    
    var e = "https://arteno6.anshuwap.com/",
        a = {
            download_design: function(e) {
                    var i = e.type,
                        s = e.include_base,
                        n = a.stage(),
                        o = n.canvas,
                        r = {
                            format: "png",
                            multiplier: 2,
                            width: n.product.width,
                            height: n.product.height,
                            top: n.product.top - n.product.height / 2,
                            left: n.product.left - n.product.width / 2
                        },
                        l = a.data.prefix_file + "_" + a.func.slugify(t("#designer-product header name t").text()) + "_" + a.current_stage;
                    switch ("" !== a.func.url_var("order_print", "") && (l = "order-" + a.func.url_var("order_print") + "__product-" + a.func.url_var("product_cms") + "__base-" + a.func.url_var("product") + "__stage-" + (Object.keys(a.data.stages).indexOf(a.current_stage) + 1)), a.get.el("zoom").val(100).trigger("input"), i) {
                        case "svg":
                            var c = a.func.export_svg(s);
                            null !== c ? (a.func.download("data:image/svg+xml;base64," + btoa(c), l + ".svg"), delete c) : a.func.notice("Error on render SVG", "error");
                            break;
                        case "png":
                            var d = e.height,
                                u = e.width,
                                p = e.orien,
                                g = (o.backgroundColor, d / n.limit_zone.height),
                                f = "landscape" != p ? g : g * (o.width / o.height),
                                m = {
                                    stage: n,
                                    top: n.limit_zone.top,
                                    left: n.limit_zone.left,
                                    width: n.limit_zone.width,
                                    height: n.limit_zone.height,
                                    multiplier: f,
                                    is_bg: !0 === s && "full"
                                },
                                h = a.tools.toImage(m),
                                v = document.createElement("canvas"),
                                b = v.getContext("2d"),
                                _ = new Image;
                            g > 33 && (g = 33), "function" != typeof e.callback && (e.callback = function(t) {
                                a.func.download(t, l + ".png")
                            }), "landscape" != p ? (v.width = u, v.height = d, _.onload = function() {
                                var t = this.width,
                                    i = this.height;
                                t != u && (i = i / t * u, t = u), i > d && (t = t / i * d, i = d), b.drawImage(this, (u - t) / 2, (d - i) / 2, t, i), a.f("false"), e.callback(v.toDataURL())
                            }, _.src = h) : (g = u / n.limit_zone.width < 33 ? d / n.limit_zone.width : 33, h = a.tools.toImage({
                                stage: n,
                                width: n.limit_zone.width,
                                left: n.limit_zone.left,
                                multiplier: f,
                                is_bg: !0 === s && "full"
                            }), v.width = u, v.height = d, _.onload = function() {
                                b.translate(v.width / 2, v.height / 2), b.rotate(Math.PI / 2);
                                var t = u,
                                    i = u * (this.width / this.height);
                                i > u && (t *= u / i, i = u), t > d && (i *= d / t, t = d), b.drawImage(this, -i / 2, -t / 2, i, t), b.rotate(-Math.PI / 2), b.translate(-v.width / 2, -v.height / 2), a.f("false"), e.callback(v.toDataURL())
                            }, _.src = h);
                            break;
                        case "jpg":
                            r.format = "jpeg", a.func.download(o.toDataURL(r), l + ".jpg");
                            break;
                        case "pdf":
                            a.tools.discard();
                            var x = Object.keys(a.data.stages),
                                w = (h = [], []),
                                y = [],
                                k = function() {
                                    var t = a.func.export_svg(s, !0),
                                        e = a.stage();
                                    h.push(t[0]), a.get.el("print-base").prop("checked") ? w.push((e.product.width / e.product.height).toFixed(5)) : w.push((e.edit_zone.width / e.edit_zone.height).toFixed(5)), t[1].map(function(t) {
                                        -1 === y.indexOf(t) && y.push(t)
                                    })
                                },
                                A = function(t) {
                                    a.active_stage(x[t], function() {
                                        k(), void 0 !== x[t + 1] ? A(t + 1) : O(h, y)
                                    })
                                },
                                O = function(t, e) {
                                    var i = window.open(a.data.ajax + "&action=pdf&nonce=ANSHUWAP-NONCE:" + a.data.nonce + (e.length > 0 ? "&fonts=" + encodeURIComponent(e.join("|")) : "") + (a.get.el("print-cropmarks").prop("checked") ? "&cropmarks=1" : "") + "&ratio=" + w.join(","));
                                    a.f(!1), null !== i ? i.addEventListener("load", function() {
                                        this.window.renderPDF(t, URL)
                                    }) : alert("Please allow popup on this site")
                                };
                            if (void 0 === e.full || !0 !== e.full) return k(), O(h, y);
                            if (x.filter(function(t) {
                                    return void 0 === a.data.stages[t].canvas
                                }).length > 0) return void alert(a.i(196));
                            a.f("Start rendering.."), A(0);
                            break;
                        case "json":
                            h = {
                                stages: {},
                                type: a.data.type,
                                updated: (new Date).getTime() / 1e3,
                                name: a.data.name
                            };
                            var j = [];
                            a.get.el("stage-nav").find("li[data-stage].active").each(function() {
                                var t = this.getAttribute("data-stage"),
                                    e = a.data.stages[t];
                                e.canvas ? (h.stages.lumise = {
                                    data: a.tools.export(e),
                                    screenshot: a.tools.toImage({
                                        stage: e
                                    }),
                                    edit_zone: e.edit_zone,
                                    image: e.image,
                                    overlay: e.overlay,
                                    updated: h.updated
                                }, j.push(t)) : e.data && (h.stages.lumise = {
                                    data: e.data,
                                    screenshot: "",
                                    edit_zone: "",
                                    image: "",
                                    overlay: e.overlay,
                                    updated: e.data.updated
                                }, j.push(t))
                            }), a.func.download("data:application/octet-stream;charset=utf-16le;base64," + a.func.enjson(h), l + ".mytpl")
                    }
                },
                download: function(t, e) {
                    a.func.dataURL2Blob(t, function(t) {
                        if ("webkitAppearance" in document.body.style == 0) return a.func.notice("After saving the download file, change the file type to ." + e.split(".")[1].toUpperCase(), "notice", 5e3), window.open(URL.createObjectURL(t));
                        var i = document.createElement("a");
                        i.download = e, i.href = URL.createObjectURL(t), i.click(), URL.revokeObjectURL(i.href), delete i
                    })
                },
                dataURL2Blob: function(t, e) {
                    e(this.url2blob(t))
                },
                url2blob: function(t) {
                    if ("string" != typeof t) throw new Error("Invalid argument: dataURI must be a string");
                    t = t.split(",");
                    for (var e = atob(t[1]), a = e.length, i = new Uint8Array(a), s = 0; s < a; s++) i[s] = e.charCodeAt(s);
                    return new Blob([i], {
                        type: t[0].substring(t[0].indexOf("image/"), t[0].indexOf(";") - 1)
                    })
                },
            };
    a.load()
});
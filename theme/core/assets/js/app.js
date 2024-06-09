jQuery(document).ready(function(t) {
    localStorage.setItem("LUMISE-TEMPLATE-APPEND", false);
    var scrollWidth=100;
    window.mobileTabCheck = function() {
        // (A) BREAK USER AGENT DOWN
        var isMobile = navigator.userAgent.toLowerCase().match(/mobile/i),
          isTablet = navigator.userAgent.toLowerCase().match(/tablet/i),
          isMacTablet = navigator.userAgent.toLowerCase().match(/macintosh/i),
          isAndroid = navigator.userAgent.toLowerCase().match(/android/i),
          isiPhone = navigator.userAgent.toLowerCase().match(/iphone/i),
          isiPad = navigator.userAgent.toLowerCase().match(/ipad/i);
        
        // (B) DETECTED DEVICE TYPE
        var detected = isMobile ? "Mobile | " : "Not Mobile | ";
        detected += (isTablet || isiPad) ? "Tablet | " : "Not Tablet | ";
        if (isAndroid) { detected += "Android"; }
        else if (isiPhone || isiPad) { detected += "Apple"; }
        else { detected += "Nope"; }
        //   alert("Device Type - " + detected);

        // deviceType = isMobile ? 1 : 0;
        var deviceType = (isTablet || isiPad) ? 1: 0; // || isMacTablet
        return deviceType;
    }
    
    window.mobileNCheck = function() {
        // (A) BREAK USER AGENT DOWN
        var isMobile = navigator.userAgent.toLowerCase().match(/mobile/i),
          isTablet = navigator.userAgent.toLowerCase().match(/tablet/i),
          isMacTablet = navigator.userAgent.toLowerCase().match(/macintosh/i),
          isAndroid = navigator.userAgent.toLowerCase().match(/android/i),
          isiPhone = navigator.userAgent.toLowerCase().match(/iphone/i),
          isiPad = navigator.userAgent.toLowerCase().match(/ipad/i);
        
        // (B) DETECTED DEVICE TYPE
        var detected = isMobile ? "Mobile | " : "Not Mobile | ";
        detected += (isTablet || isiPad) ? "Tablet | " : "Not Tablet | ";
        if (isAndroid) { detected += "Android"; }
        else if (isiPhone || isiPad) { detected += "Apple"; }
        else { detected += "Nope"; }
        //   alert("Device Type - " + detected);

        // deviceType = isMobile ? 1 : 0;
        var deviceType = (isMobile) ? 1: 0;
        return deviceType;
    }

    window.mobileCheck = function() {
      let check = false;
      (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4))) check = true;})(navigator.userAgent||navigator.vendor||window.opera);
      return check; 
    }
    
    var is_mobile_device = window.mobileCheck();
    var is_mobile = window.mobileNCheck();
    var is_tab_device = window.mobileTabCheck();
    round_side = 0; reloaded = false; reloadable = true;
    // Auto load templates 
    // t('#designer-left>div.row>div.col-md-12 .designer-left-nav li[data-tab="templates"] #template-load-more').trigger("click");
    // t('#designer-left>div.row>div.col-md-12 .designer-left-nav li[data-tab="color"]').trigger("click");
    var e = "https://www.arteno.in/",
        main_site = e,  
        a = {
            e: {
                tools: t("#designer-top-tools"),
                working_tools: t("#designer-working-tools"),
                layers: t("#designer-layers"),
                main: t("#designer")
            },
            i: function(t) {
                return a.data.js_lang[t.toString()]
            },
            f: function(t) {
                void 0 === t || "" === t || !1 === t ? (clearTimeout(a.ops.ftimer), document.getElementById("designer").setAttribute("data-processing", ""), document.getElementById("designer").setAttribute("data-msg", "")) : (clearTimeout(a.ops.ftimer), a.ops.ftimer = setTimeout(function(t) {
                    document.getElementById("designer").setAttribute("data-processing", "true"), document.getElementById("designer").setAttribute("data-msg", t)
                }, 300, t))
            },
            filters: [],
            ops: {
                downon: null,
                drag_start: null,
                first: {},
                categories: {},
                before_unload: null,
                excmobile: !1,
                first_completed: !1,
                session_designs: [],
                my_designs: {},
                export_list: ["id", "src", "origin_src", "evented", "visible", "selectable", "text", "fontFamily", "fontSize", "fontStyle", "textDecoration", "fontWeight", "font", "angle", "bridge", "name", "charSpacing", "lineHeight", "fill", "price", "resource", "fx", "opacity", "fxOrigin", "colors", "originX", "originY", "lockPosition", "group_pos", "imagebox", "boxbtn", "template"],
                color_maps: {
                    "#000000": "black",
                    "#000080": "navy",
                    "#00008b": "darkblue",
                    "#0000cd": "mediumblue",
                    "#0000ff": "blue",
                    "#006400": "darkgreen",
                    "#008000": "green",
                    "#008080": "teal",
                    "#008b8b": "darkcyan",
                    "#00bfff": "deepskyblue",
                    "#00ced1": "darkturquoise",
                    "#00fa9a": "mediumspringgreen",
                    "#00ff00": "lime",
                    "#00ff7f": "springgreen",
                    "#00ffff": "cyan",
                    "#191970": "midnightblue",
                    "#1e90ff": "dodgerblue",
                    "#20b2aa": "lightseagreen",
                    "#228b22": "forestgreen",
                    "#2e8b57": "seagreen",
                    "#2f4f4f": "darkslategrey",
                    "#32cd32": "limegreen",
                    "#3cb371": "mediumseagreen",
                    "#40e0d0": "turquoise",
                    "#4169e1": "royalblue",
                    "#4682b4": "steelblue",
                    "#483d8b": "darkslateblue",
                    "#48d1cc": "mediumturquoise",
                    "#4b0082": "indigo",
                    "#556b2f": "darkolivegreen",
                    "#5f9ea0": "cadetblue",
                    "#6495ed": "cornflowerblue",
                    "#663399": "rebeccapurple",
                    "#66cdaa": "mediumaquamarine",
                    "#696969": "dimgrey",
                    "#6a5acd": "slateblue",
                    "#6b8e23": "olivedrab",
                    "#708090": "slategrey",
                    "#778899": "lightslategrey",
                    "#7b68ee": "mediumslateblue",
                    "#7cfc00": "lawngreen",
                    "#7fff00": "chartreuse",
                    "#7fffd4": "aquamarine",
                    "#800000": "maroon",
                    "#800080": "purple",
                    "#808000": "olive",
                    "#808080": "grey",
                    "#87ceeb": "skyblue",
                    "#87cefa": "lightskyblue",
                    "#8a2be2": "blueviolet",
                    "#8b0000": "darkred",
                    "#8b008b": "darkmagenta",
                    "#8b4513": "saddlebrown",
                    "#8fbc8f": "darkseagreen",
                    "#90ee90": "lightgreen",
                    "#9370db": "mediumpurple",
                    "#9400d3": "darkviolet",
                    "#98fb98": "palegreen",
                    "#9932cc": "darkorchid",
                    "#9acd32": "yellowgreen",
                    "#a0522d": "sienna",
                    "#a52a2a": "brown",
                    "#a9a9a9": "darkgrey",
                    "#add8e6": "lightblue",
                    "#adff2f": "greenyellow",
                    "#afeeee": "paleturquoise",
                    "#b0c4de": "lightsteelblue",
                    "#b0e0e6": "powderblue",
                    "#b22222": "firebrick",
                    "#b8860b": "darkgoldenrod",
                    "#ba55d3": "mediumorchid",
                    "#bc8f8f": "rosybrown",
                    "#bdb76b": "darkkhaki",
                    "#c0c0c0": "silver",
                    "#c71585": "mediumvioletred",
                    "#cd5c5c": "indianred",
                    "#cd853f": "peru",
                    "#d2691e": "chocolate",
                    "#d2b48c": "tan",
                    "#d3d3d3": "lightgrey",
                    "#d8bfd8": "thistle",
                    "#da70d6": "orchid",
                    "#daa520": "goldenrod",
                    "#db7093": "palevioletred",
                    "#dc143c": "crimson",
                    "#dcdcdc": "gainsboro",
                    "#dda0dd": "plum",
                    "#deb887": "burlywood",
                    "#e0ffff": "lightcyan",
                    "#e6e6fa": "lavender",
                    "#e9967a": "darksalmon",
                    "#ee82ee": "violet",
                    "#eee8aa": "palegoldenrod",
                    "#f08080": "lightcoral",
                    "#f0e68c": "khaki",
                    "#f0f8ff": "aliceblue",
                    "#f0fff0": "honeydew",
                    "#f0ffff": "azure",
                    "#f4a460": "sandybrown",
                    "#f5deb3": "wheat",
                    "#f5f5dc": "beige",
                    "#f5f5f5": "whitesmoke",
                    "#f5fffa": "mintcream",
                    "#f8f8ff": "ghostwhite",
                    "#fa8072": "salmon",
                    "#faebd7": "antiquewhite",
                    "#faf0e6": "linen",
                    "#fafad2": "lightgoldenrodyellow",
                    "#fdf5e6": "oldlace",
                    "#ff0000": "red",
                    "#ff00ff": "magenta",
                    "#ff1493": "deeppink",
                    "#ff4500": "orangered",
                    "#ff6347": "tomato",
                    "#ff69b4": "hotpink",
                    "#ff7f50": "coral",
                    "#ff8c00": "darkorange",
                    "#ffa07a": "lightsalmon",
                    "#ffa500": "orange",
                    "#ffb6c1": "lightpink",
                    "#ffc0cb": "pink",
                    "#ffd700": "gold",
                    "#ffdab9": "peachpuff",
                    "#ffdead": "navajowhite",
                    "#ffe4b5": "moccasin",
                    "#ffe4c4": "bisque",
                    "#ffe4e1": "mistyrose",
                    "#ffebcd": "blanchedalmond",
                    "#ffefd5": "papayawhip",
                    "#fff0f5": "lavenderblush",
                    "#fff5ee": "seashell",
                    "#fff8dc": "cornsilk",
                    "#fffacd": "lemonchiffon",
                    "#fffaf0": "floralwhite",
                    "#fffafa": "snow",
                    "#ffff00": "yellow",
                    "#ffffe0": "lightyellow",
                    "#fffff0": "ivory",
                    "#ffffff": "white"
                }
            },
            trigger: function(t) {
                var e;
                for (var a in t.events) {
                    if ("function" == typeof t.events[a]) e = t.events[a];
                    else {
                        if ("function" != typeof t[t.events[a]]) continue;
                        e = t[t.events[a]]
                    }(a = a.split(",")).map(function(a) {
                        void 0 === (a = a.split(":"))[1] && (a[1] = "click"), "" === a[0] ? t.el.off(a[1]).on(a[1], t, e) : t.el.find(a[0]).off(a[1]).on(a[1], t, e)
                    })
                }
            },
            add_filter: function(t, e, a) {
                void 0 === a && (a = 10), void 0 === this.filters[a] && (this.filters[a] = {}), void 0 === this.filters[a][t] && (this.filters[a][t] = []), "function" == typeof e && this.filters[a][t].push(e)
            },
            apply_filter: function(t, e, a) {
                return this.apply_filters(t, e, a)
            },
            apply_filters: function(t, e, a) {
                return this.filters.map(function(i) {
                    void 0 !== i[t] && i[t].map(function(t) {
                        "function" == typeof t && (e = t(e, a))
                    })
                }), e
            },
            add_action: function(t, e, a) {
                this.actions.add(t, e, a)
            },
            do_action: function(t, e, a) {
                return this.actions.do(t, e, a)
            },
            extends: {
                controls: {
                    calcCoords: function(t) {
                        var e = this.angle * (Math.PI / 180),
                            a = this.getViewportTransform(),
                            i = t ? this._getTransformedDimensions() : this._calculateCurrentDimensions(),
                            s = i.x,
                            n = i.y,
                            o = Math.sin(e),
                            r = Math.cos(e),
                            l = s > 0 ? Math.atan(n / s) : 0,
                            c = s / Math.cos(l) / 2,
                            d = Math.cos(l + e) * c,
                            u = Math.sin(l + e) * c,
                            p = this.getCenterPoint(),
                            g = t ? p : fabric.util.transformPoint(p, a),
                            f = new fabric.Point(g.x - d, g.y - u),
                            m = new fabric.Point(f.x + s * r, f.y + s * o),
                            h = new fabric.Point(f.x - n * o, f.y + n * r),
                            v = new fabric.Point(g.x + d, g.y + u);
                        if (!t) var b = new fabric.Point((f.x + h.x) / 2, (f.y + h.y) / 2),
                            _ = new fabric.Point((m.x + f.x) / 2, (m.y + f.y) / 2),
                            x = new fabric.Point((v.x + m.x) / 2, (v.y + m.y) / 2),
                            w = new fabric.Point((v.x + h.x) / 2, (v.y + h.y) / 2),
                            y = new fabric.Point(f.x + s * r, f.y + s * o);
                        return g = {
                            tl: f,
                            tr: m,
                            br: v,
                            bl: h
                        }, t || (g.ml = b, g.mt = _, g.mr = x, g.mb = w, g.mtr = y), g
                    },
                    drawControls: function(t) {
                        if (!this.hasControls) return this;
                        var e = this._calculateCurrentDimensions(),
                            i = e.x,
                            s = e.y,
                            n = this.cornerSize,
                            o = -(i + n) / 2,
                            r = -(s + n) / 2,
                            l = (this.transparentCorners, a.stage().canvas.getActiveObject());
                        if (t.save(), this.hasRotatingPoint)
                            if (null !== l && undefined !== l && !0 === l.get("lockPosition")) t.fillStyle = "#f75555", t.fillRect(o, r, this.cornerSize, this.cornerSize), t.drawImage(a.objects.icons.del, o + .1 * this.cornerSize, r + .1 * this.cornerSize, .8 * this.cornerSize, .8 * this.cornerSize);
                            else {
                                var c = a.stage().canvas,
                                    d = c.getActiveObject(),
                                    u = (c.getActiveGroup(), a.get.color("invert"));
                                t.fillStyle = "#333" == u ? "#777" : "#ccc";
                                var p = {
                                        rot: [o + i + .1 * this.cornerSize, r + .1 * this.cornerSize],
                                        rez: [o + i + .1 * this.cornerSize, r + s + .1 * this.cornerSize],
                                        del: [o + .1 * this.cornerSize, r + .1 * this.cornerSize]
                                    },
                                    g = .8 * this.cornerSize;
                                !d || void 0 !== d.imagebox && "" !== d.imagebox && 0 !== c.getObjects().filter(function(t) {
                                    return t.id == d.imagebox
                                }).length || (p.dou = [o + .1 * this.cornerSize, r + s + .1 * this.cornerSize], t.fillRect(o, r + s, this.cornerSize, this.cornerSize)), t.fillRect(o + i, r, this.cornerSize, this.cornerSize), t.fillRect(o + i, r + s, this.cornerSize, this.cornerSize), t.beginPath(), t.arc(o + i / 2 + this.cornerSize / 2, r + this.cornerSize / 2, 3, 0, 2 * Math.PI, !1), t.fill(), t.closePath(), t.beginPath(), t.arc(o + i / 2 + this.cornerSize / 2, r + s + this.cornerSize / 2, 3, 0, 2 * Math.PI, !1), t.fill(), t.closePath(), t.beginPath(), t.arc(o + this.cornerSize / 2 - .5, r + s / 2 + this.cornerSize / 2, 3, 0, 2 * Math.PI, !1), t.fill(), t.closePath(), t.beginPath(), t.arc(o + i + this.cornerSize / 2 + .5, r + s / 2 + this.cornerSize / 2, 3, 0, 2 * Math.PI, !1), t.fill(), t.closePath(), t.fillStyle = "#f75555", t.fillRect(o, r, this.cornerSize, this.cornerSize), Object.keys(p).map(function(e) {
                                    t.drawImage(a.objects.icons[("#333" == u || "del" == e ? "" : "w") + e], p[e][0], p[e][1], g, g)
                                })
                            } return t.restore(), this
                    },
                    drawBorders: function(t) {
                        if (!this.hasBorders) return this;
                        var e = this._calculateCurrentDimensions(),
                            i = 1 / this.borderScaleFactor,
                            s = e.x + i,
                            n = e.y + i;
                        if (t.save(), t.strokeStyle = "#333" == a.get.color("invert") ? "rgba(30, 30, 30, 0.35)" : "rgba(230, 230, 230, 0.6)", this._setLineDash(t, [1, 1], null), t.strokeRect(-s / 2, -n / 2, s, n), this.hasRotatingPoint && this.isControlVisible("mtr") && !this.get("lockRotation") && this.hasControls) {
                            var o = -n / 2;
                            t.beginPath(), t.moveTo(0, o), t.lineTo(0, o - this.rotatingPointOffset), t.closePath(), t.stroke()
                        }
                        return t.restore(), this
                    },
                    targetCorner: function(t) {
                        if (!this.hasControls || !this.active) return !1;
                        var e, a, i = t.x,
                            s = t.y;
                        for (var n in this.__corner = 0, this.oCoords)
                            if (this.isControlVisible(n) && ("mtr" !== n || this.hasRotatingPoint) && (!this.get("lockUniScaling") || "mt" !== n && "mr" !== n && "ml" !== n)) {
                                a = this._getImageLines(this.oCoords[n].corner);
                                var o = this.canvas.getZoom() ? this.canvas.getZoom() : 1;
                                if (0 !== (e = this._findCrossPoints({
                                        x: i * o,
                                        y: s * o
                                    }, a)) && e % 2 == 1) return this.__corner = n, n
                            } return !1
                    }
                },
                canvas: {
                    _getRotatedCornerCursor: function(t, e, a) {
                        var i = "move";
                        switch (t) {
                            case "tr":
                                i = "crosshair";
                                break;
                            case "tl":
                                i = "pointer";
                                break;
                            case "br":
                                i = "nwse-resize";
                                break;
                            case "bl":
                                i = "pointer";
                                break;
                            case "mt":
                                i = "n-resize";
                                break;
                            case "mr":
                                i = "e-resize";
                                break;
                            case "mb":
                                i = "s-resize";
                                break;
                            case "ml":
                                i = "w-resize"
                        }
                        return i
                    },
                    _setupCurrentTransform: function(t, e) {
                        if (e) {
                            var i = this.getPointer(t),
                                s = e._findTargetCorner(this.getPointer(t, !0)),
                                n = this._getActionFromCorner(e, s, t),
                                o = this._getOriginFromCorner(e, s);
                            !0 !== a.func.ctrl_btns({
                                e: t,
                                target: e
                            }) && ("drag" == n && (a.ops.downon = e, a.ops.moved = !1), this._currentTransform = {
                                target: e,
                                action: n,
                                corner: s,
                                scaleX: e.scaleX,
                                scaleY: e.scaleY,
                                skewX: e.skewX,
                                skewY: e.skewY,
                                offsetX: i.x - e.left,
                                offsetY: i.y - e.top,
                                originX: o.x,
                                originY: o.y,
                                ex: i.x,
                                ey: i.y,
                                lastX: i.x,
                                lastY: i.y,
                                left: e.left,
                                top: e.top,
                                theta: fabric.util.degreesToRadians(e.angle),
                                width: e.width * e.scaleX,
                                mouseXSign: 1,
                                mouseYSign: 1,
                                shiftKey: t.shiftKey,
                                altKey: t[this.centeredKey]
                            }, this._currentTransform.original = {
                                left: e.left,
                                top: e.top,
                                scaleX: e.scaleX,
                                scaleY: e.scaleY,
                                skewX: e.skewX,
                                skewY: e.skewY,
                                originX: o.x,
                                originY: o.y
                            }, this._resetCurrentTransform())
                        }
                    }
                }
            },
            objects: {
                events: {
                    "selection:cleared": function(t) {
                        a.e.layers.find("li.active").removeClass("active"), a.actions.do("selection:cleared", t), a.stack.save()
                    },
                    "object:selected": function(t) {
                        a.stage().selected_object = t.target, t.target.setControlVisible("tr", !1), !0 === t.target.get("lockPosition") ? (t.target.lockMovementX = !0, t.target.lockMovementY = !0, t.target.setControlsVisibility({
                            mt: !1,
                            mb: !1,
                            ml: !1,
                            mr: !1,
                            bl: !1,
                            br: !1,
                            tl: !0,
                            tr: !1,
                            mtr: !1
                        })) : (t.target.lockMovementX = !1, t.target.lockMovementY = !1, t.target.setControlsVisibility({
                            mt: !0,
                            mb: !0,
                            ml: !0,
                            mr: !0,
                            bl: !0,
                            br: !0,
                            tl: !0,
                            tr: !1,
                            mtr: !0
                        })), a.actions.do("object:selected", t)
                    },
                    "object:added": function(t) {
                        a.actions.do("object:added", t)
                    },
                    "object:modified": function(t) {
                        a.actions.do("object:modified", t)
                    },
                    "object:rotating": function(t) {
                        [0, 45, 90, 135, 180, 225, 270, 315, 360].map(function(e) {
                            Math.abs(t.target.angle - e) < 5 && (t.target.angle = e)
                        }), a.get.el("rotate").val(t.target.angle).attr({
                            "data-value": Math.round(t.target.angle) + "ยบ"
                        })
                    },
                    "mouse:down": function(t) {
                        var e = a.stage(),
                            i = e.canvas.getObjects();
                        a.ops.limit_snap = e.limit_zone, e.canvas.isDrawingMode && !1 === t.e.shiftKey || (a.func.navigation("clear"), a.ops.mousedown = !0, t.e && t.e.shiftKey && e.canvas.set("selection", !1), (null === t.target || 0 === t.target.__corner && void 0 !== t.target.imagebox && "" !== t.target.imagebox) && i.map(function(a) {
                            if ("imagebox" == a.type && t.e.layerX > a.left - a.width / 2 && t.e.layerX < a.left + a.width / 2 && t.e.layerY > a.top - a.height / 2 && t.e.layerY < a.top + a.height / 2) {
                                var i = e.canvas.getObjects().filter(function(t) {
                                    return t.imagebox == a.id
                                });
                                i.length > 0 && (e.canvas.setActiveObject(i[i.length - 1]), t.target = i[i.length - 1], e.canvas._setupCurrentTransform(t.e, t.target))
                            }
                        }), null !== t.target ? (a.ops.corner = t.target.__corner, t.target.group_pos && (a.ops.original_pos = {}, i.map(function(e) {
                            e.group_pos == t.target.group_pos && (a.ops.original_pos[e.id] = [e.left, e.top])
                        }), 1 === Object.keys(a.ops.original_pos).length && (a.ops.original_pos = null, t.target.set({
                            group_pos: null
                        }))), void 0 !== t.target.imagebox && (a.ops.limit_snap = i.filter(function(e) {
                            return e.id == t.target.imagebox
                        }), a.ops.limit_snap.length > 0 ? a.ops.limit_snap = a.ops.limit_snap[0] : a.ops.limit_snap = e.limit_zone)) : (a.ops.corner = "", a.ops.original_pos = null), a.ops.auto_snap = a.get.el("auto-alignment").prop("checked"))
                    },
                    "path:created": function(t) {
                        a.stage().limit_zone.visible = !0, a.get.el("top-tools").attr({
                            "data-view": "drawing"
                        }), a.stack.save()
                    },
                    "mouse:up": function(e) {
                        if (void 0 !== e.e) {
                            var i = a.stage(),
                                s = i.canvas.getActiveObject(),
                                n = null;
                            if (!i.canvas.isDrawingMode) {
                                if (i.canvas.getObjects().map(function(t) {
                                        "imagebox" == t.type && e.e.layerX > t.left - t.boxbtn[0] / 4 && e.e.layerX < t.left + t.boxbtn[0] / 4 && e.e.layerY > t.top - t.boxbtn[1] / 4 && e.e.layerY < t.top + t.boxbtn[1] / 4 && (n = t)
                                    }), null !== n)
                                    if (s) {
                                        if ("image" == s.type) return s.set("imagebox", n.id)
                                    } else if (!0 !== a.ops.moved) return a.func.imagebox_select_file(n);
                                i.lineX.css({
                                    display: "none"
                                }), i.lineY.css({
                                    display: "none"
                                }), a.ops.mousedown = !1, 
                                // i.canvas.set("selection", !0),
                                i.canvas.set("selection", !1),
                                !1 !== a.ops.moved && null !== a.ops.downon && (i.lineX.hide(), i.lineY.hide());
                                var o = i.canvas.getActiveObject(),
                                    r = i.canvas.getActiveGroup(),
                                    l = o ? o.type : r ? "group" : "standard";
                                if (a.e.tools.attr({
                                        "data-view": l
                                    }), r) {
                                    var c = !0,
                                        d = "";
                                    r._objects.map(function(t) {
                                        t.get("group_pos") ? ("" !== d && t.get("group_pos") != d && (c = !1), d = t.get("group_pos")) : c = !1
                                    }), t('#designer-top-tools ul[data-mode="group"]').attr({
                                        "data-grouped": c ? "true" : "false"
                                    })
                                } else a.stack.save();
                                a.ops.downon = null, a.ops.moved = !1, a.ops.corner = "", a.ops.original_pos = null
                            }
                        }
                    },
                    "mouse:move": function(t) {
                        var e = a.stage(),
                            i = e.canvas.getZoom(),
                            s = e.canvas.viewportTransform,
                            n = !1;
                        if (null === t.target) {
                            var o = e.canvas.getObjects(),
                                r = e.canvas.getActiveObject(),
                                l = [];
                            o.map(function(t) {
                                void 0 !== t.imagebox && "" !== t.imagebox && -1 === l.indexOf(t.imagebox) && l.push(t.imagebox)
                            }), o.map(function(a) {
                                "imagebox" != a.type || null != r && "image" != r.type || (t.e.layerX > a.left - a.boxbtn[0] / 4 && t.e.layerX < a.left + a.boxbtn[0] / 4 && t.e.layerY > a.top - a.boxbtn[1] / 4 && t.e.layerY < a.top + a.boxbtn[1] / 4 ? "red" != a.stroke && (a.set({
                                    stroke: "red",
                                    strokeWidth: 2
                                }), e.canvas.defaultCursor = "pointer", e.canvas.renderAll()) : "red" == a.stroke && (a.set({
                                    stroke: "",
                                    strokeWidth: 0
                                }), e.canvas.defaultCursor = "default", e.canvas.renderAll()), -1 === l.indexOf(a.id) && a.set("opacity", 1))
                            })
                        }
                        if (t && t.e && t.e.shiftKey && (!0 === a.ops.mousedown || e.canvas.isDrawingMode) && i > 1 && "br" != a.ops.corner) {
                            var c = new fabric.Point(t.e.movementX, t.e.movementY);
                            e.canvas.relativePan(c)
                        } else if (null !== a.ops.downon) {
                            if (!0 !== a.ops.moved && (a.ops.moved = !0), !0 === a.ops.auto_snap) {
                                var d = {
                                        top: a.ops.downon.top - a.ops.downon.height * a.ops.downon.scaleY * .5,
                                        left: a.ops.downon.left - a.ops.downon.width * a.ops.downon.scaleX * .5,
                                        height: a.ops.downon.height * a.ops.downon.scaleY,
                                        width: a.ops.downon.width * a.ops.downon.scaleX
                                    },
                                    u = a.ops.limit_snap,
                                    p = "left" == u.originX ? u.width / 2 : 0,
                                    g = "top" == u.originY ? u.height / 2 : 0,
                                    f = u.left + p,
                                    m = u.top + g,
                                    h = "",
                                    v = "",
                                    b = "",
                                    _ = "";
                                if (Math.abs(a.ops.downon.left - f) <= 3 ? (yv = "block", v = f, _ = "center") : Math.abs(d.left - f) <= 3 ? (yv = "block", v = f, _ = "left") : Math.abs(d.left + d.width - f) <= 3 ? (yv = "block", v = f, _ = "right") : yv = "none", Math.abs(a.ops.downon.top - m) <= 3 ? (xv = "block", h = m, b = "center") : Math.abs(d.top - m) <= 3 ? (xv = "block", h = m, b = "top") : Math.abs(d.top + d.height - m) <= 3 ? (xv = "block", h = m, b = "bottom") : xv = "none", "none" !== yv && "none" !== xv || e.canvas.getObjects().map(function(t) {
                                        !1 !== t.visible && !1 !== t.evented && t !== a.ops.downon && (ob = {
                                            top: t.top - t.height * t.scaleY * .5,
                                            left: t.left - t.width * t.scaleX * .5,
                                            height: t.height * t.scaleY,
                                            width: t.width * t.scaleX
                                        }, "none" === yv && (Math.abs(d.left - ob.left) <= 2 ? (v = ob.left, yv = "block", _ = "left") : Math.abs(d.left + d.width - (ob.left + ob.width)) <= 2 ? (v = ob.left + ob.width, yv = "block", _ = "right") : Math.abs(d.left - (ob.left + ob.width)) <= 2 ? (v = ob.left + ob.width, yv = "block", _ = "left") : Math.abs(d.left + d.width - ob.left) <= 2 ? (v = ob.left, yv = "block", _ = "right") : Math.abs(d.left + d.width / 2 - (ob.left + ob.width / 2)) <= 2 && (v = ob.left + ob.width / 2, yv = "block", _ = "ycenter")), "none" === xv && (Math.abs(d.top - ob.top) <= 2 ? (h = ob.top, xv = "block", b = "top") : Math.abs(d.top + d.height - (ob.top + ob.height)) <= 2 ? (h = ob.top + ob.height, xv = "block", b = "bottom") : Math.abs(d.top - (ob.top + ob.height)) <= 2 ? (h = ob.top + ob.height, xv = "block", b = "top") : Math.abs(d.top + d.height - ob.top) <= 2 ? (h = ob.top, xv = "block", b = "bottom") : Math.abs(d.top + d.height / 2 - (ob.top + ob.height / 2)) <= 2 && (h = ob.top + ob.height / 2, xv = "block", b = "ycenter")))
                                    }), e.lineX.css({
                                        top: h * i + s[5] + "px",
                                        display: xv
                                    }), e.lineY.css({
                                        left: v * i + s[4] + "px",
                                        display: yv
                                    }), "block" == yv) {
                                    switch (_) {
                                        case "center":
                                            a.ops.downon.set("left", u.left + p);
                                            break;
                                        case "left":
                                            a.ops.downon.set("left", v + d.width / 2);
                                            break;
                                        case "right":
                                            a.ops.downon.set("left", v - d.width / 2);
                                            break;
                                        case "ycenter":
                                            a.ops.downon.set("left", v)
                                    }
                                    n = !0
                                }
                                if ("block" == xv) {
                                    switch (b) {
                                        case "center":
                                            a.ops.downon.set("top", u.top + g);
                                            break;
                                        case "top":
                                            a.ops.downon.set("top", h + d.height / 2);
                                            break;
                                        case "bottom":
                                            a.ops.downon.set("top", h - d.height / 2);
                                            break;
                                        case "xcenter":
                                            a.ops.downon.set("top", h)
                                    }
                                    n = !0
                                }
                            }
                            if (u === e.limit_zone && a.ops.downon.group_pos && a.ops.original_pos && a.ops.original_pos[a.ops.downon.id] && (a.ops.downon.left != a.ops.original_pos[a.ops.downon.id][0] || a.ops.downon.top != a.ops.original_pos[a.ops.downon.id][1])) {
                                var x = a.ops.original_pos[a.ops.downon.id];
                                e.canvas.getObjects().map(function(t) {
                                    t.group_pos == a.ops.downon.group_pos && t.id != a.ops.downon.id && t.set({
                                        left: a.ops.original_pos[t.id][0] + (a.ops.downon.left - x[0]),
                                        top: a.ops.original_pos[t.id][1] + (a.ops.downon.top - x[1])
                                    })
                                }), n = !0
                            }!0 === n && e.canvas.renderAll()
                        }
                    },
                    "after:render": function(t) {
                        a.actions.do("after:render")
                    }
                },
                do: {
                    deactiveAll: function() {
                        a.stage().canvas.deactivateAll(), a.stage().canvas.renderAll(), a.e.tools.attr({
                            "data-view": "standard"
                        }), t("#designer-layers li.active").removeClass("active")
                    }
                },
                roundRect: function(t, e, a, i, s, n, o, r) {
                    if (void 0 === r && (r = !0), void 0 === n && (n = 5), "number" == typeof n) n = {
                        tl: n,
                        tr: n,
                        br: n,
                        bl: n
                    };
                    else {
                        var l = {
                            tl: 0,
                            tr: 0,
                            br: 0,
                            bl: 0
                        };
                        for (var c in l) n[c] = n[c] || l[c]
                    }
                    t.beginPath(), t.moveTo(e + n.tl, a), t.lineTo(e + i - n.tr, a), t.quadraticCurveTo(e + i, a, e + i, a + n.tr), t.lineTo(e + i, a + s - n.br), t.quadraticCurveTo(e + i, a + s, e + i - n.br, a + s), t.lineTo(e + n.bl, a + s), t.quadraticCurveTo(e, a + s, e, a + s - n.bl), t.lineTo(e, a + n.tl), t.quadraticCurveTo(e, a, e + n.tl, a), t.closePath(), o && t.fill(), r && (t.strokeStyle = "red", t.stroke())
                },
                clipto: function(t, e) {
                    if (e && e.canvas) {
                        var i = a.stage();
                        i.canvas.getActiveGroup() && (e = i.canvas.getActiveGroup());
                        var s = e.getCenterPoint(),
                            n = i.limit_zone,
                            o = 1 / e.scaleX,
                            r = 1 / e.scaleY,
                            l = -e.skewX / 52,
                            c = -e.skewY / 52;
                        if (void 0 !== e.imagebox && "" !== e.imagebox) {
                            var d = i.canvas.getObjects();
                            d.map(function(t) {
                                "imagebox" == t.type && t.set("opacity", 1)
                            }), d.map(function(t) {
                                t.id == e.imagebox && (n = {
                                    left: t.left - t.width / 2,
                                    top: t.top - t.height / 2,
                                    strokeWidth: 1,
                                    width: t.width,
                                    height: t.height
                                }, t.set("opacity", .25))
                            })
                        }
                        e.flipX && (o = -o), e.flipY && (r = -r), t.save(), t.translate(0, 0), t.transform(1, c, 0, 1, 0, 0), t.transform(1, 0, l, 1, 0, 0), t.scale(o, r), t.rotate(-1 * e.angle * (Math.PI / 180));
                        var u = n.left - s.x + n.strokeWidth,
                            p = n.top - s.y + n.strokeWidth,
                            g = n.width - n.strokeWidth,
                            f = n.height - n.strokeWidth;
                        t.beginPath(), t.roundRect(u, p, g, f, n.radius ? n.radius : 0), t.fillStyle = "transparent", t.fill(), t.closePath(), t.restore()
                    }
                },
                sides: {},
                text: function(e) {
                    e.fontFamily && -1 === e.fontFamily.indexOf('"') && (e.fontFamily = '"' + e.fontFamily + '"'), "1" == a.data.text_direction && (e.originX = "1" == a.data.rtl ? "right" : "left", e.originY = "top");
                    var i = a.get.color("invert");
                    void 0 !== a.data.colors && "" !== a.data.colors && ((i = a.data.colors.split(",")[0]).indexOf(":") > -1 && (i = i.split(":")[1]), i = i.split("@")[0]), e.editable = "1" != a.data.rtl;
                    var s = a.stage().limit_zone,
                        n = t.extend({
                            left: s.left + s.width / 2,
                            top: s.top + s.height / 2,
                            angle: 0,
                            textAlign: "center",
                            fill: i,
                            name: e.text ? e.text : "Sample Text"
                        }, e),
                        o = new fabric.IText(e.text ? e.text : "Sample Text", n);
                    return o.set({
                        clipTo: function(t) {
                            try {
                                return a.objects.clipto(t, o)
                            } catch (t) {}
                        }
                    }), o
                },
                qrcode: function(t, e, i) {
                    var s = a.tools.qrcode({
                        text: t,
                        foreground: e
                    });
                    fabric.Image.fromURL(s.toDataURL(), function(s) {
                        var n = a.stage();
                        s.set({
                            left: n.limit_zone.left + n.limit_zone.width / 2,
                            top: n.limit_zone.top + n.limit_zone.height / 2,
                            width: .7 * n.limit_zone.width,
                            height: s.height * (.7 * n.limit_zone.width / s.width),
                            fill: e,
                            backgroundColor: a.func.invert(e),
                            name: t,
                            text: t,
                            type: "qrcode",
                            clipTo: function(t) {
                                return a.objects.clipto(t, s)
                            }
                        }), a.design.layers.create({
                            type: "image",
                            image: s
                        }), i(s)
                    })
                },
                lumise: {
                    "i-text": function(t, e) {
                        return e(a.objects.text(t))
                    },
                    curvedText: function(e, i) {
                        var s = a.stage().limit_zone,
                            n = a.get.color("invert");
                        void 0 !== a.data.colors && "" !== a.data.colors && ((n = a.data.colors.split(",")[0]).indexOf(":") > -1 && (n = n.split(":")[1]), n = n.split("@")[0]), e = t.extend({
                            left: s.left + s.width / 2,
                            top: s.top + s.height / 2,
                            angle: 0,
                            textAlign: "center",
                            fill: n,
                            textAlign: "center",
                            radius: 50,
                            spacing: 5
                        }, e);
                        var o = new fabric.CurvedText(e.text ? e.text : "Sample Text", e);
                        o.set({
                            clipTo: function(t) {
                                try {
                                    return a.objects.clipto(t, o)
                                } catch (t) {}
                            }
                        }), i(o)
                    },
                    image: function(e, i) {
                        if (e.src.indexOf(".svg") == e.src.length - 4) return this.svg(e, i);
                        var s = a.stage().canvas.getActiveObject(),
                            n = !1 !== e.replace && null != s && "function" == typeof s.setElement && "true" == localStorage.getItem("LUMISE-REPLACE-IMAGE");
                        if (n && e.src.indexOf(".svg") !== e.src.length - 4 && -1 === e.src.indexOf("data:image/svg+xml;base64")) return a.func.replace_image(e.src, s);
                        fabric.util.loadImage(e.src, function(o) {
                            if (null == o) a.func.notice(a.i(33) + e.src, "error", 5e3), i(null);
                            else {
                                var r = a.func.check_upload_dimensions(o);
                                if (null === r) return i(null);
                                if (e.src = r, 0 === e.src.indexOf("http")) {
                                    var l = document.createElement("canvas");
                                    l.height = o.naturalHeight, l.width = o.naturalWidth, l.getContext("2d").drawImage(o, 0, 0), e.src = l.toDataURL("image/" + (e.src.indexOf(".png") === e.src.length - 4 ? "png" : "jpeg")), o.onload = function() {
                                        a.stage().canvas.renderAll()
                                    }, o.src = e.src, delete l
                                }
                                e.src.length > 24e5 && a.func.notice(a.i(53), "", 5e3);
                                var c = new fabric.Image(o),
                                    d = a.stage(),
                                    u = d.canvas.getObjects(),
                                    p = null;
                                delete e.replace;
                                var g = u.filter(function(t) {
                                    return "imagebox" == t.type
                                });
                                if (g.length > 0 && (g.map(function(t) {
                                        0 === u.filter(function(e) {
                                            return e.imagebox == t.id
                                        }).length && (p = t)
                                    }), null === p && (p = g[0])), null == e.width && (e.width = .85 * d.limit_zone.width, e.height = e.width * (c.height / c.width)), null == e.height && (e.height = .85 * d.limit_zone.height, e.width = e.height * (c.width / c.height)), void 0 === e.evented && (null === p || n ? (e.width > .85 * d.limit_zone.width && (e.height = .85 * d.limit_zone.width * (e.height / e.width), e.width = .85 * d.limit_zone.width), e.height > .85 * d.limit_zone.height && (e.width = .85 * d.limit_zone.height * (e.width / e.height), e.height = .85 * d.limit_zone.height)) : (u.map(function(t) {
                                        t.imagebox == p.id && t.id != e.id && d.canvas.remove(t)
                                    }), e.width = p.width, e.height = c.height * (p.width / c.width), e.left = p.left, e.top = p.top, e.height < p.height && (e.height = p.height, e.width = c.width * (e.height / c.height)), p.ibadded = (new Date).getTime(), e.imagebox = p.id)), c.set(t.extend({
                                        left: d.limit_zone.left + d.limit_zone.width / 2,
                                        top: d.limit_zone.top + d.limit_zone.height / 2,
                                        width: e.width,
                                        height: e.height
                                    }, e)), e.filters && e.filters.length > 0 && (e.filters.map(function(t, a) {
                                        t.color && (e.filters[a] = new fabric.Image.filters.Tint({
                                            color: t.color
                                        }))
                                    }), c.set("filters", e.filters), c.applyFilters(d.canvas.renderAll.bind(d.canvas))), c.set("clipTo", function(t) {
                                        return a.objects.clipto(t, c)
                                    }), n) {
                                    var f = {
                                        width: s.width,
                                        height: s.height,
                                        src: c.src,
                                        origin_src: c.src
                                    };
                                    c.src.indexOf(".svg") == c.src.length - 4 || 0 === c.src.indexOf("data:image/svg+xml;base64") ? f.type = "svg" : f.type = "image", s.setElement(c._element), s.set(f), a.ops.importing = !1, a.stack.save(), a.ops.set_active = s, i(null)
                                } else i(c)
                            }
                        }, {
                            crossOrigin: "anonymous"
                        })
                    },
                    "text-fx": function(t, e) {
                        var i = a.objects.text(t);
                        t.width = i.width, t.height = i.height, delete t.type, delete t.clipTo, void 0 === t.bridge && (t.bridge = {
                            curve: -2.5,
                            offsetY: .5,
                            bottom: 2.5,
                            trident: !1,
                            oblique: !1
                        });
                        var s = ["angle", "skewX", "skewY", "opacity"],
                            n = {};
                        s.map(function(e) {
                            n[e] = t[e], delete t[e]
                        });
                        var o = new fabric.Text(t.text.trim(), t),
                            r = new Image;
                        r.src = o.toDataURL();
                        var l = ["width", "height", "scaleX", "scaleY", "fontSize", "stroke", "strokeWidth"];
                        l.map(function(e) {
                            t[e] = 2 * t[e]
                        }), o = new fabric.Text(t.text.trim(), t);
                        var c = new Image;
                        c.src = o.toDataURL(), l.map(function(e) {
                            t[e] = t[e] / 2
                        }), s.map(function(e) {
                            t[e] = n[e]
                        }), fabric.Image.fromURL(o.toDataURL(), function(i) {
                            t.type = "text-fx", t.cacheTextImage = r, t.cacheTextImageLarge = c, t.height = 2.5 * t.height, t.clipTo = function(t) {
                                return a.objects.clipto(t, i)
                            };
                            var s = a.func.bridgeText(i._element, t.bridge);
                            if (delete t.stroke, delete t.strokeWidth, i.set(t), t.filters && t.filters.length > 0) {
                                var n = a.stage();
                                t.filters.map(function(e, a) {
                                    e.color && (t.filters[a] = new fabric.Image.filters.Tint({
                                        color: e.color
                                    }))
                                }), i.set("filters", t.filters), i.applyFilters(n.canvas.renderAll.bind(n.canvas))
                            }
                            var o = t.width,
                                l = t.height;
                            i.setSrc(s, function() {
                                return i.set({
                                    height: l,
                                    width: o
                                }), e(i)
                            })
                        })
                    },
                    qrcode: function(t, e) {
                        this.image(t, e)
                    },
                    svg: function(e, i) {
                        if (void 0 === e.src) return i(null);
                        var s = function(e) {
                            if (e.src && 0 === e.src.indexOf("data:image/svg+xml;base64,")) {
                                var s = atob(e.src.split("base64,")[1]);
                                s = s.replace('width="undefined"', "").replace('height="undefined"', "");
                                var n = t("<div>" + s + "</div>"),
                                    o = n.find("svg").get(0),
                                    r = o.getAttribute("viewBox") ? o.getAttribute("viewBox") : o.getAttribute("viewbox");
                                r = r.replace(/\,/g, " ").replace(/  /g, " ").split(" "), o.getAttribute("width") && o.getAttribute("height") || (o.setAttribute("width", r[2]), o.setAttribute("height", r[3])), void 0 === e.height && (e.height = e.width * (r[3] / r[2])), e.src = "data:image/svg+xml;base64," + btoa(n.html()), delete n, delete o, delete r
                            }
                            return a.objects.lumise.image(e, i)
                        };
                        0 === e.src.indexOf("http") ? t.ajax({
                            url: e.src,
                            method: "GET",
                            dataType: "text",
                            statusCode: {
                                403: function() {
                                    a.func.notice(a.i(33) + "(403) " + e.src, "error", 3500), i(null)
                                },
                                404: function() {
                                    a.func.notice(a.i(33) + "(404) " + e.src, "error", 3500), i(null)
                                }
                            },
                            success: function(t) {
                                e.src = "data:image/svg+xml;base64," + btoa(t), e.fill = "", s(e)
                            }
                        }) : s(e)
                    },
                    path: function(e, i) {
                        var s = a.stage().limit_zone,
                            n = new fabric.Path(e.path, t.extend({
                                left: s.left + s.width / 2,
                                top: s.top + s.height / 2
                            }, e));
                        n.set("clipTo", function(t) {
                            return a.objects.clipto(t, n)
                        }), n.set("fill", null), i(n)
                    },
                    "path-group": function(t, e) {
                        return this.svg(t, e)
                    },
                    imagebox: function(e, i) {
                        if (void 0 !== e.src) return this.image(e, i);
                        var s = new Image,
                            n = a.stage();
                        (e = t.extend({
                            width: n.limit_zone.width,
                            height: n.limit_zone.height,
                            left: n.limit_zone.left,
                            top: n.limit_zone.top,
                            border: 10,
                            background: "#eee",
                            button: a.data.assets + "assets/images/imagebox-btn.png",
                            imagebox: ""
                        }, e, !0)).width -= 2 * e.border, e.height -= 2 * e.border, e.border = 0, e.evented = !1, e.selectable = !1, e.lockMovementX = !0, e.lockMovementY = !0;
                        var o = document.createElement("canvas");
                        ctx = o.getContext("2d"), o.width = 2 * e.width, o.height = 2 * e.height, ctx.fillStyle = e.background, ctx.fillRect(0, 0, o.width, o.height), s.onload = function() {
                            return e.boxbtn = [this.width, this.height], ctx.drawImage(this, e.width - this.width / 2, e.height - this.height / 2, e.boxbtn[0], e.boxbtn[1]), e.src = o.toDataURL("image/jpeg"), a.objects.lumise.image(e, i)
                        }, s.src = e.button
                    }
                },
                icons: {
                    init: function() {
                        var t = {
                            del: btoa('<svg width="512" height="512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ccc"><path d="m405 137l-30-30-119 119-119-119-30 30 119 119-119 119 30 30 119-119 119 119 30-30-119-119z"></path></svg>'),
                            rot: btoa('<svg width="512" height="512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ccc"><path d="m295 66c-96 0-175 66-187 160l-81-16l80 118l118-79l-75-15c10-60 73-126 146-126c81 0 146 69 146 150c0 80-80 146-144 146l0 42c107 0 187-86 187-190c0-104-86-190-190-190z"></path></svg>'),
                            rez: btoa('<svg width="512" height="512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ccc"><path d="M96,96v128l50.078-50l9.014,9l183.286,183L288.3,416h128.2V288l-50.078,50l-128.2-128l-64.1-64L224.2,96H96z"/></svg>'),
                            dou: btoa('<svg width="512" height="512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ccc"><path d="m160 352l160 0l0-128l96 0l0 256l-256 0z m-160-320l0 320l128 0l0 160l320 0l0-320l-128 0l0-160z"></path></svg>'),
                            gro: btoa('<svg width="512" height="512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#ccc"><path d="m388 140l-31-31-140 139 31 31z m93-31l-233 231-92-91-30 31 122 123 264-263z m-481 171l123 123 31-31-122-123z"></path></svg>'),
                            wrot: btoa('<svg width="512" height="512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#777"><path d="m295 66c-96 0-175 66-187 160l-81-16l80 118l118-79l-75-15c10-60 73-126 146-126c81 0 146 69 146 150c0 80-80 146-144 146l0 42c107 0 187-86 187-190c0-104-86-190-190-190z"></path></svg>'),
                            wrez: btoa('<svg width="512" height="512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#777"><path d="M96,96v128l50.078-50l9.014,9l183.286,183L288.3,416h128.2V288l-50.078,50l-128.2-128l-64.1-64L224.2,96H96z"/></svg>'),
                            wdou: btoa('<svg width="512" height="512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#777"><path d="m160 352l160 0l0-128l96 0l0 256l-256 0z m-160-320l0 320l128 0l0 160l320 0l0-320l-128 0l0-160z"></path></svg>'),
                            wgro: btoa('<svg width="512" height="512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#777"><path d="m388 140l-31-31-140 139 31 31z m93-31l-233 231-92-91-30 31 122 123 264-263z m-481 171l123 123 31-31-122-123z"></path></svg>')
                        };
                        Object.keys(t).map(function(e) {
                            a.objects.icons[e] = new Image, a.objects.icons[e].src = "data:image/svg+xml;base64," + t[e]
                        })
                    }
                }
            },
            design: {
                events: function() {
                    var e = function(t, e) {
                        e || (e = this);
                        var a = e.value,
                            i = e.getAttribute("data-unit") || "";
                        return parseFloat(e.getAttribute("data-ratio")), e.getAttribute("data-range") && e.getAttribute("data-range").split(",").map(function(t) {
                            Math.abs(a - parseFloat(t)) < 5 && (a = t)
                        }), e.setAttribute("data-value", a + i), "helper" == e.parentNode.getAttribute("data-range") && e.parentNode.setAttribute("data-value", a + i), a
                    };
                    a.trigger({
                        el: t("#designer"),
                        events: {
                            'input[type="range"][data-view="designer"]:input': e,
                            'input[type="range"][data-action]:input, input[type="range"][data-callback]:input': function(t) {
                                var i = a.stage().canvas,
                                    s = i.getActiveObject(),
                                    n = this.getAttribute("data-callback"),
                                    o = this.getAttribute("data-action"),
                                    r = parseFloat(this.getAttribute("data-ratio")) || 1,
                                    l = e(0, this);
                                n ? a.design.nav.callback[n] && a.design.nav.callback[n](this, t, r) : o && s && !t.isTrigger && (s.set(o, l * r), i.renderAll())
                            },
                            'div[data-callback="qrcode"]': function(t) {
                                var i = a.stage().canvas,
                                    s = i.getActiveObject(),
                                    n = this.getAttribute("data-callback"),
                                    o = this.getAttribute("data-action"),
                                    r = parseFloat(this.getAttribute("data-ratio")) || 1,
                                    l = e(0, this);
                                n ? a.design.nav.callback[n] && a.design.nav.callback[n](this, t, r) : o && s && !t.isTrigger && (s.set(o, l * r), i.renderAll())
                            },
                            'input[type="range"][data-callback="textFX"]:change': "textFX",
                            "#designer-stroke-fix-colors li": "strokeColor",
                            "div#designer-left>div.row>div.col-md-12>div.designer-left-nav-wrp>ul.designer-left-nav li[data-tab]": "leftNav",
                            "#designer-general-status": "general_status",
                            "div#designer-left>div.row>div.col-md-12 #designer-side-close": "close_side",
                            "svg#designer-nav-file": "resp_file",
                            "#designer-stage-nav": "stages",
                            "#designer-cliparts": "cliparts",
                            "#designer-uploads header button": "upload_nav",
                            "#designer-left>div.row>div.col-md-12 .designer-x-thumbn:mouseover,#designer-left .designer-x-thumbn:mouseout": "x_thumbn_preview",
                            '#designer-left>div.row>div.col-md-12 button[data-func="show-categories"]': "x_thumbn_categories",
                            "#designer-cliparts-list:scroll": "cliparts_more",
                            "#designer-list-items:scroll": "templates_more",
                            "#designer-templates-list:scroll": "templates_more",
                            'ul[data-func="show-categories"]': "templates_search",
                            "#template-load-more:click": "templates_more",
                            "#cliparts-load-more:click": "cliparts_more",
                            '#designer-uploads div[data-tab="internal"]:scroll': "images_more",
                            "#designer-shapes:scroll": "shapes_more",
                            ".designer-tab-body-wrp .designer-xitems-list:scroll": a.xitems.scroll_more,
                            "#designer-saved-designs:scroll": "designs_more",
                            "#designer-templates-search-inp:click,#designer-templates-search-inp:keydown,#designer-templates-search-categories:change": "templates_search",
                            "#designer-cliparts-search-inp:click,#designer-cliparts-search-inp:keydown,#designer-cliparts-search-categories:change": "cliparts_search",
                            ".designer-xitems-search>input:click,.designer-xitems-search>input:keydown,.designer-xitems-search>input:change": a.xitems.search,
                            "div#designer-top-tools>ul.designer-top-nav>li[data-tool], div#designer-navigations ul li[data-tool]": "topTools",
                            'input#designer-zoom[type="range"]:input, #designer-zoom-wrp i[data-zoom], #designer-zoom-wrp:mousewheel': "doZoom",
                            'ul[data-mode="text"] .text-format': "textFormat",
                            ".designer-edit-text:input": "editText",
                            "#designer-text-mask-guide": function() {
                                a.tools.lightbox({
                                    content: '<img src="' + a.data.assets + '/assets/images/text-mask-guide.jpg" />'
                                })
                            },
                            "#designer-flip-x:change, #designer-flip-y:change": "flip",
                            "#designer-lock-position:change": "lock_position",
                            "#designer-reset-transform": "resetTransform",
                            "input#designer-curved:change": "enableCurved",
                            "input#designer-fill:input,input#designer-fill:change": "fillColor",
                            "button#designer-fill:click": "fillColor",
                            "span.designer-save-color": "saveColor",
                            "input#designer-stroke:input, input#designer-stroke:change": "fillStroke",
                            "input#designer-svg-fill:input,input#designer-svg-fill:change": "svgFillColor",
                            "#designer-svg-colors [data-func]": "svgFuncs",
                            'li[data-tool="arrange"] button[data-arrange]': "doArrange",
                            ".designer-more-fonts": "load_fonts",
                            "#designer-fonts": "select_font",
                            '#designer-upload-form input[type="file"]:change': function() {
                                a.func.process_files(this.files)
                            },
                            "#designer-design-undo": a.stack.back,
                            "#designer-design-redo": a.stack.forward,
                            "#designer-save-btn": a.tools.save,
                            "#designer-discard-drawing": "exit_drawing",
                            "#designer-text-effect img[data-effect]": "text_effect",
                            "#designer-text-fx-trident:change": "textFX",
                            'input[data-image-fx][type="range"]:change': "imageFX",
                            "#designer-drawing-color:change": function(t) {
                                a.design.nav.callback.drawing(t)
                            },
                            "#designer-auto-alignment:change, #designer-template-append:change, #designer-replace-image:change": "options",
                            'button[data-func="update-text-fx"]': a.func.update_text_fx,
                            "#designer-bug button.submit": "bug_submit",
                            "#designer-image-fx-mode:change": "selectImageFX",
                            "#designer-image-fx-fx>li[data-fx]": "imageColorFX",
                            "#designer-saved-designs": "saved_designs",
                            "#designer-template-designs": "template_designs",
                            "#designer-designs-search input:input": "saved_designs_search",
                            "#designer-languages li": "change_lang",
                            "button#designer-change-product, button#designer-select-product": "change_product",
                            "#designer-file-nav li[data-func]": "fileNav",
                            "#designer-print-nav .doPrint:change, #designer-print-nav button[data-func]": "doPrint",
                            ".designer-tabs-nav": "nav",
                            "#designer-shares-wrp": "doShare",
                            "#designer-shares-wrp-generate": "doGenerate",
                            "#share-button:click": "generateShare",
                            "#wishlist-button:click": "generateWishlist",
                            "#designer-publish-design:click":"publishDesign",
                            "#designer-cart-items": "my_cart",
                            'a[data-view="cart-details"]': a.render.cart_details
                        },
                        leftNav: function(e) {
                            var i = this.getAttribute("data-tab"),
                                s = a.stage();
                            if (void 0 !== s && void 0 !== s.canvas) {
                                if ("drawing" == i) {
                                    s.canvas.isDrawingMode = !0, s.limit_zone.visible = !0;
                                    var n = a.get.color("invert");
                                    void 0 !== a.data.colors && "" !== a.data.colors && ((n = a.data.colors.split(",")[0]).indexOf(":") > -1 && (n = n.split(":")[1]), n = n.split("@")[0]), s.canvas.freeDrawingBrush.color = n, a.get.el("top-tools").attr({
                                        "data-view": "drawing"
                                    })
                                } else "uploads" == i ? a.get.el("external-images").hasClass("active") && t("#designer-external-images iframe").each(function() {
                                    this.contentWindow.postMessage({
                                        action: "refresh"
                                    }, "*")
                                }) : s && s.canvas && (s.canvas.isDrawingMode = !1, s.limit_zone.visible = !1, a.get.el("top-tools").attr({
                                    "data-view": "standard"
                                }), s.canvas.renderAll());
                                this.getAttribute("data-load") && ("function" == typeof a.design.nav.load[this.getAttribute("data-load")] && a.design.nav.load[this.getAttribute("data-load")](e), this.removeAttribute("data-load")), t("#designer-left .designer-tab-body-wrp.active,#designer-left>div.row>div.col-md-12 ul.designer-left-nav li[data-tab].active").removeClass("active"), t('#designer-left [data-view="preactive"]').removeAttr("data-view"), t(this).addClass("active").prev("li[data-tab]").attr({
                                    "data-view": "preactive"
                                }), t("#designer-" + this.getAttribute("data-tab")).addClass("active"), t("#designer-side-close").addClass("active"), this.getAttribute("data-callback") && "function" == typeof a.design.nav.callback[this.getAttribute("data-callback")] && a.design.nav.callback[this.getAttribute("data-callback")](e)
                            }
                        },
                        general_status: function(t) {
                            var e = t.target.getAttribute("data-func");
                            if (e) switch (t.preventDefault(), e) {
                                case "cancel-cart":
                                    a.func.set_url("cart", null), a.get.el("general-status").html('<span>\t\t\t\t\t\t\t\t\t\t<text>\t\t\t\t\t\t\t\t\t\t\t<i class="fa fa-exclamation-triangle"></i> ' + a.i(184) + '</text>\t\t\t\t\t\t\t\t\t\t<a href="#clear-designs" data-btn="cancel" data-func="clear-designs">\t\t\t\t\t\t\t\t\t\t\t' + a.i(185) + "\t\t\t\t\t\t\t\t\t\t</a>\t\t\t\t\t\t\t\t\t</span>"), a.render.cart_change();
                                    break;
                                case "cancel-design":
                                    a.func.set_url("my_design", null), a.get.el("general-status").html('<span>\t\t\t\t\t\t\t\t\t\t<text>\t\t\t\t\t\t\t\t\t\t\t<i class="fa fa-exclamation-triangle"></i> ' + a.i(184) + '</text>\t\t\t\t\t\t\t\t\t\t<a href="#clear-designs" data-btn="cancel" data-func="clear-designs">\t\t\t\t\t\t\t\t\t\t\t' + a.i(185) + "\t\t\t\t\t\t\t\t\t\t</a>\t\t\t\t\t\t\t\t\t</span>"), a.render.cart_change();
                                    break;
                                case "save-design":
                                    a.func.export("designs"), a.render.refresh_my_designs();
                                    break;
                                case "clear-designs":
                                    a.tools.clearAll(), a.render.cart_change(), a.get.el("general-status").html("")
                            }
                        },
                        close_side: function(e) {
                            t(this).removeClass("active"), t("#designer-left>div.row>div.col-md-12 ul.designer-left-nav li.active, .designer-tab-body-wrp.active").removeClass("active")
                        },
                        resp_file: function() {
                            t(this).prev().hasClass("active") ? (t(this).prev().removeClass("active"), t(this).find("#__m").show(), t(this).find("#__x").hide()) : (t(this).prev().addClass("active"), t(this).find("#__m").hide(), t(this).find("#__x").show())
                        },
                        stages: function(e) {
                            var i = e.target.getAttribute("data-stage"),
                                s = t(this),
                                n = t(this).hasClass("preview-designs");
                            if (a.do_action("stage_nav_click", e), "designer-stage-nav" == e.target.id && n) return s.removeClass("preview-designs").removeClass("stages-expand"), s.find("li[data-stage].active").removeClass("active"), void s.find('li[data-stage="' + a.current_stage + '"]').addClass("active");
                            if (i) {
                                if (!s.hasClass("stages-expand") && !n) return void s.addClass("stages-expand")
                            } else {
                                var o = e.target.getAttribute("data-nav") || e.target.parentNode.getAttribute("data-nav") || e.target.parentNode.parentNode.getAttribute("data-nav"),
                                    r = a.get.el("stage-nav").find("li.active");
                                o && "func" != o && ("prev" == o && r.prev("li[data-stage]") ? i = r.prev("li[data-stage]").data("stage") : "next" == o && r.next("li[data-stage]") && (i = r.next("li[data-stage]").data("stage")))
                            }
                            i && (i != a.current_stage || n) && a.data.stages[i] && (s.hasClass("preview-designs") ? a.func.stage_nav(i) : (s.removeClass("stages-expand preview-designs"), a.active_stage(i, function() {
                                a.design.layers.build(),
                                // a.get.el("zoom").val(100 * a.stage().canvas.getZoom()).trigger("input"), 
                                a.get.el("zoom").val(100).trigger("input"), 
                                a.e.tools.attr({
                                    "data-view": "standard"
                                })
                            })))
                        },
                        cliparts: function(e) {
                            var i = e.target.getAttribute("data-act") ? t(e.target) : t(e.target).closest("[data-act]"),
                                s = null;
                            if (i.get(0) && (s = i.data("act")), s) switch (s) {
                                case "category":
                                    a.get.el("cliparts-list"), a.get.el("cliparts").find(".designer-cliparts-category.selected").removeClass("selected"), i.addClass("selected"), a.get.el("cliparts").addClass("selected"), a.get.el("cliparts-list").data({
                                        category: i.data("category")
                                    }).html('<header>\t\t\t\t\t\t\t\t\t\t\t\t<span data-act="back" title="' + a.i(43) + '">\t\t\t\t\t\t\t\t\t\t\t\t\t<i class="fa fa-arrow-left"></i>\t\t\t\t\t\t\t\t\t\t\t\t</span>\t\t\t\t\t\t\t\t\t\t\t\t<span class="designer-category-title">' + a.i(44) + '</span>\t\t\t\t\t\t\t\t\t\t\t</header><i class="designer-spinner white x3 mt2"></i>'), a.post({
                                        action: "cliparts",
                                        category: i.data("category"),
                                        q: a.ops.cliparts_q,
                                        index: 0
                                    }), a.ops.cliparts_index = 0;
                                    break;
                                case "back":
                                    a.get.el("cliparts").find(".designer-cliparts-category.selected").removeClass("selected"), a.get.el("cliparts").removeClass("selected"), a.get.el("cliparts-list").data({
                                        category: ""
                                    })
                            }
                        },
                        do_search: function(t) {
                            // t_list = designer-list-items;
                            a.ops[t + "_index"] = 0, a.ops[t + "loading"] = !1, a.get.el("list-items").html(""), a.get.el(t + "-list").trigger("scroll") // a.templates.storage = [],
                            // a.ops[t + "_index"] = 0, a.ops[t + "loading"] = !1, a.get.el(t + "-list").find("ul").html(""), a.get.el(t + "-list").trigger("scroll")
                        },
                        // templates_search: function(t) {
                        //     "click" == t.type && setTimeout(function(e) {
                        //         a.ops.templates_q != e.value && "" === e.value && (a.ops.templates_q = e.value, t.data.do_search("templates"))
                        //     }, 100, this), "INPUT" == this.tagName && 13 !== t.keyCode || ("INPUT" == this.tagName && (a.ops.templates_q = this.value), t.data.do_search("templates"))
                        // },
                        templates_search: function(t) {
                            var s_cat_val = $("#selected_category").val();
                            a.ops.templates_category = s_cat_val;
                            a.ops.templates_clear = !1;
                            if(a.ops.templates_empty == !1) a.ops.templates_loading = !1;
                            if(a.ops.templates_index !== 0) a.ops.templates_loading = !1;
                            // a.ops.templates_q = s_cat_val;
                            "click" == t.type && setTimeout(function(e) {
                                a.ops.templates_category != s_cat_val && "" === s_cat_val && (a.ops.templates_category = s_cat_val, t.data.do_search("templates"))
                                // a.ops.templates_q != e.value && "" === e.value && (a.ops.templates_q = e.value, t.data.do_search("templates"))
                            }, 100, this), "INPUT" == this.tagName && 13 !== t.keyCode || ("INPUT" == this.tagName && (a.ops.templates_category = s_cat_val), t.data.do_search("templates"))
                        },
                        cliparts_search: function(t) {
                            "click" == t.type && setTimeout(function(e) {
                                a.ops.cliparts_q != e.value && "" === e.value && (a.ops.cliparts_q = e.value, t.data.do_search("cliparts"))
                            }, 100, this), "INPUT" == this.tagName && 13 !== t.keyCode || ("INPUT" == this.tagName && (a.ops.cliparts_q = this.value), t.data.do_search("cliparts"))
                        },
                        upload_nav: function(e) {
                            var a = t(this).closest("#designer-uploads"),
                                i = this.getAttribute("data-nav"),
                                s = a.find('div[data-tab="' + i + '"]');
                            "external1" == i && (0 === s.find("iframe").length ? s.html('<iframe src="https://www.arteno.in/images/"></iframe>') : t(this).hasClass("active") && (s.scrollTop(0), s.find("iframe").get(0).contentWindow.postMessage({
                                action: "scrollTop"
                            }, "*"))), a.find("header button.active, div[data-tab].active").removeClass("active"), t(this).addClass("active"), s.addClass("active"), e.preventDefault()
                        },
                        x_thumbn_preview: function(e) {
                            if ("I" == e.target.tagName && e.target.getAttribute("data-info") && e.target.parentNode.getAttribute("data-ops"))
                                if ("mouseover" == e.type && null === a.ops.drag_start) {
                                    void 0 !== a.ops.xtc_timer && clearTimeout(a.ops.xtc_timer);
                                    try {
                                        var i = JSON.parse(e.target.parentNode.getAttribute("data-ops"))[0]
                                    } catch (t) {
                                        return console.warn(t.message), void console.log(t)
                                    }
                                    var s = "image" == i.type || "template" == i.type ? i.price > 0 ? a.func.price(i.price) : a.i(100) : "",
                                        n = "upload" == i.type ? a.i(84) : "null" != i.cates && "" != i.cates ? i.cates : "" != i.tags && "null" != i.tags ? i.tags : "",
                                        o = function() {
                                            void 0 !== i.component && (i.url = a.xitems.resources[i.component].url[i.id]), a.get.el("x-thumbn-preview").show().find(">div").html('<img src="' + i.url + '" />'), a.get.el("x-thumbn-preview").find(">header").html((i.name ? i.name : i.url.split("/").pop().substr(0, 50)) + "<span>" + s + "</span>"), "" !== n ? a.get.el("x-thumbn-preview").find(">footer").show().html(a.i(105) + " " + n) : a.get.el("x-thumbn-preview").find(">footer").hide().html("")
                                        };
                                    if ("template" == i.type) return r = a.stage(), l = a.get.color(), a.get.el("x-thumbn-preview").show().find(">div").html('<div class="designer-template-preview">\t\t\t\t\t\t\t\t\t\t\t\t<img style="background:' + l + '" src="' + r.product._element.src + '" />\t\t\t\t\t\t\t\t\t\t\t\t<div class="designer-tp-limit"></div>\t\t\t\t\t\t\t\t\t\t\t</div>'), a.get.el("x-thumbn-preview").find("img").on("load", function() {
                                        var e = t(this).parent().find(".designer-tp-limit"),
                                            s = r.product_width ? this.offsetWidth / r.product_width : 1,
                                            n = Math.round(r.edit_zone.width * s),
                                            o = Math.round(r.edit_zone.height * s),
                                            c = r.edit_zone.top * s,
                                            d = r.edit_zone.left * s;
                                        e.css({
                                            marginLeft: d + "px",
                                            marginTop: c + "px",
                                            height: (o % 2 != 0 ? o + 1 : o) + "px",
                                            width: (n % 2 != 0 ? n + 1 : n) + "px",
                                            borderColor: a.func.invert(l)
                                        }).html('<img src="' + i.screenshot + '" />')
                                    }), a.get.el("x-thumbn-preview").find(">header").html((i.name ? i.name : i.url.split("/").pop().substr(0, 50)) + "<span>" + s + "</span>"), void("" !== n ? a.get.el("x-thumbn-preview").find(">footer").show().html(a.i(105) + " " + n) : a.get.el("x-thumbn-preview").find(">footer").hide().html(""));
                                    void 0 === i.url && (i.url = a.cliparts.storage[i.id] || a.cliparts.uploads[i.id]), void 0 !== i.url && 0 === i.url.indexOf("dumb-") && (a.indexed.get(i.url.split("dumb-")[1], "dumb", function(t) {
                                        null != t ? (a.cliparts.uploads[i.id] = t[0], i.url = t[0], o(), delete t) : a.func.notice(a.i(165))
                                    }), i.url = ""), o()
                                } else a.ops.xtc_timer = setTimeout(function() {
                                    a.get.el("x-thumbn-preview").hide()
                                }, 350);
                            var r, l
                        },
                        x_thumbn_categories: function(t) {
                            var e = a.get.el("x-thumbn-preview"),
                                i = this.getAttribute("data-type");
                            if (void 0 !== a.ops.xtc_timer && clearTimeout(a.ops.xtc_timer), "block" == e.css("display") && 0 !== e.find("div.designer-categories-wrp").length) return e.hide();
                            e.show().find(">div").html(""), e.find(">header").html("<strong>" + a.i(56) + '<i class="fa fa-times close"></i></strong>'), e.find(">footer").html("").hide(), a.render.categories(i)
                        },
                        templates_more: function(t) {
                            (a.ops["templates_index"]==0 || (!0 !== a.ops.templates_loading && ((!is_mobile_device) ? this.scrollTop + this.offsetHeight >= this.scrollHeight : this.scrollLeft + this.offsetWidth >= this.scrollWidth)) ) && (a.post({
                                action: "templates",
                                base_id: a.func.url_var("product", 2),
                                category: a.ops.templates_category,
                                q: a.ops.templates_q,
                                index: a.ops.templates_index
                            }),
                            // ((is_mobile_device) ? a.get.el("templates-list").find("i.arteno-designer-loader").remove() : $("#template-view-show").find("i.arteno-designer-loader").remove()),
                            // is_tab_device ? ((is_mobile_device) ? a.get.el("templates-list").append('<i class="arteno-designer-loader"></i>') : $("#template-view-show").append('<i class="arteno-designer-loader"></i>')) : '',
                            a.ops.templates_loading = !0);
                        },
                        cliparts_more: function(t) {
                            !0 !== a.ops.cliparts_loading && this.scrollTop + this.offsetHeight >= this.scrollHeight && (a.post({
                                action: "cliparts",
                                category: a.ops.cliparts_category,
                                q: a.ops.cliparts_q,
                                index: a.ops.cliparts_index
                            }), a.get.el("cliparts-list").append('<i class="designer-spinner white x3 mt1 mb1"></i>'), a.ops.cliparts_loading = !0)
                        },
                        images_more: function(e) {
                            !0 !== a.ops.images_loading && this.scrollTop + this.offsetHeight >= this.scrollHeight - 100 && (a.ops.images_loading = !0, a.indexed.list(function(t) {
                                a.cliparts.import(t.id, {
                                    url: "dumb-" + t.id,
                                    thumbn: t.thumbn,
                                    name: t.name,
                                    save: !1
                                }), a.ops.uploads_cursor = t.id, delete t
                            }, "uploads", function(e) {
                                a.ops.images_loading = !1, "done" == e && t("#designer-uploads").off("scroll")
                            }))
                        },
                        shapes_more: function(t) {
                            !0 !== a.ops.shapes_loading && this.scrollTop + this.offsetHeight >= this.scrollHeight - 100 && (a.post({
                                action: "shapes",
                                index: a.ops.shapes_index
                            }), a.get.el("shapes").append('<i class="designer-spinner white x3 mt3 mb1"></i>'), a.ops.shapes_loading = !0)
                        },
                        designs_more: function(e) {
                            !0 !== a.ops.designs_loading && this.scrollTop + this.offsetHeight >= this.scrollHeight - 100 && (a.ops.designs_loading = !0, a.ops.designs_cursor = t('#designer-saved-designs>li[data-id]:not([data-id="new"])').last().data("id"), a.indexed.list(function(t) {
                                a.render.my_designs(t), a.ops.designs_cursor = t.id, delete t
                            }, "designs", function(e) {
                                a.ops.designs_loading = !1, "done" == e && t("#designer-my-designs").off("scroll")
                            }))
                        },
                        dragPop: function(e) {
                            if ("H3" == e.target.tagName) {
                                var i = this;
                                i.dragging = !0, void 0 === i.dragSetup && (t(document).on("mousemove", function(t) {
                                    i.dragging && !a.e.tools.hasClass("minisize") && (a.get.scroll(), a.e.tools.css({
                                        top: t.clientY - i.rect.clientY + i.rect.top + "px",
                                        left: t.clientX - i.rect.clientX + i.rect.left + "px"
                                    }))
                                }).on("mouseup", function(t) {
                                    i.dragging = !1
                                }), i.dragSetup = !0);
                                var s = document.querySelector("#designer-workspace").getBoundingClientRect(),
                                    n = a.body.scrollTop ? a.body.scrollTop : a.html.scrollTop,
                                    o = a.body.scrollLeft ? a.body.scrollLeft : a.html.scrollLeft;
                                i.rect = {
                                    left: a.e.tools.offset().left - s.left - o,
                                    top: a.e.tools.offset().top - s.top - n,
                                    clientX: e.clientX,
                                    clientY: e.clientY
                                }
                            }
                        },
                        topTools: function(e) {
                             $('#designer-top-tools').show;
                            var i = this.getAttribute("data-tool"),
                                s = this.getAttribute("data-callback");
                            if (this.getAttribute("data-load") && ("function" == typeof a.design.nav.load[this.getAttribute("data-load")] && a.design.nav.load[this.getAttribute("data-load")](e), this.removeAttribute("data-load")), "callback" == i && s && "function" == typeof a.design.nav.callback[s]) return a.design.nav.callback[s](this, e);
                            i && !(t(e.target).closest('[data-view="sub"]').length > 0) || -1 !== e.target.className.toString().indexOf("close") && !e.target.getAttribute("data-noclose") ? (a.func.navigation(this, e), s && "function" == typeof a.design.nav.callback[s] && a.design.nav.callback[s](this, e)) : i && e.data[i] && "function" == typeof e.data[i] && e.data[i](e)
                        },
                        position: function(t) {
                            var e = t.target.getAttribute("data-position") || t.target.parentNode.getAttribute("data-position") || t.target.parentNode.parentNode.getAttribute("data-position"),
                                i = a.stage(),
                                s = i.limit_zone,
                                n = i.canvas.getActiveObject() || i.canvas.getActiveGroup();
                            if (void 0 !== n.imagebox && "" !== n.imagebox) {
                                var o = i.canvas.getObjects().filter(function(t) {
                                    return "imagebox" == t.type && t.id == n.imagebox
                                });
                                o.length > 0 && (s = {
                                    width: o[0].width,
                                    height: o[0].height,
                                    top: o[0].top - o[0].height / 2,
                                    left: o[0].left - o[0].width / 2
                                })
                            }
                            if (n && e) {
                                var r = n.left,
                                    l = n.top;
                                switch (e) {
                                    case "tl":
                                        r = s.left + n.getWidth() / 2, l = s.top + n.getHeight() / 2;
                                        break;
                                    case "tc":
                                        r = s.left + s.width / 2, l = s.top + n.getHeight() / 2;
                                        break;
                                    case "tr":
                                        r = s.left + s.width - n.getWidth() / 2, l = s.top + n.getHeight() / 2;
                                        break;
                                    case "ml":
                                        r = s.left + n.getWidth() / 2, l = s.top + s.height / 2;
                                        break;
                                    case "mc":
                                        r = s.left + s.width / 2, l = s.top + s.height / 2;
                                        break;
                                    case "mr":
                                        r = s.left + s.width - n.getWidth() / 2, l = s.top + s.height / 2;
                                        break;
                                    case "bl":
                                        r = s.left + n.getWidth() / 2, l = s.top + s.height - n.getHeight() / 2;
                                        break;
                                    case "bc":
                                        r = s.left + s.width / 2, l = s.top + s.height - n.getHeight() / 2;
                                        break;
                                    case "br":
                                        r = s.left + s.width - n.getWidth() / 2, l = s.top + s.height - n.getHeight() / 2;
                                        break;
                                    case "cv":
                                        l = s.top + s.height / 2;
                                        break;
                                    case "ch":
                                        r = s.left + s.width / 2
                                }
                                n.group_pos && i.canvas.getObjects().map(function(t) {
                                    t.group_pos && t.id != n.id && t.set({
                                        left: t.left + (r - n.left),
                                        top: t.top + (l - n.top)
                                    })
                                }), n.set({
                                    top: l,
                                    left: r
                                }), n.setCoords(), i.canvas.renderAll()
                            }
                        },
                        doZoom: function(t) {
                            var e = a.stage();
                            if (e) {
                                var i = e.canvas,
                                    s = parseInt(a.get.el("zoom").val());
                                if (void 0 !== t.originalEvent && void 0 !== t.originalEvent.deltaY) return (s -= t.originalEvent.deltaY) < 100 && (s = 100), s > 300 && (s = 300), t.preventDefault(), a.get.el("zoom").val(s).trigger("input");
                                if ("I" == this.tagName) return "out" == this.getAttribute("data-zoom") ? s -= 10 : s += 10, s < 100 && (s = 100), s > 300 && (s = 300), a.get.el("zoom").val(s).trigger("input"), !1;
                                [125, 150, 175, 200].map(function(t) {
                                    Math.abs(s - t) < 5 && (s = t)
                                }), this.setAttribute("data-value", s + "%"), this.parentNode.setAttribute("data-value", s + "%");
                                var n = a.get.el("stage-" + a.current_stage);
                                n.data("w") || n.data({
                                    w: n.width(),
                                    h: n.height()
                                }), n.data("w"), n.data("h"), i.viewportTransform, s /= 100, i.zoomToPoint(new fabric.Point(e.limit_zone.left + e.limit_zone.width / 2, e.limit_zone.top + e.limit_zone.height / 2), s), a.func.reversePortView(!1)
                            }
                        },
                        moveZoom: function(t) {
                            var e = this.parentNode,
                                i = function(t) {
                                    document.removeEventListener("mouseup", i, !1), e.removeEventListener("mousemove", a.func.onZoomThumnMove, !1)
                                };
                            a.ops.preventClick = !0, e.addEventListener("mousemove", a.func.onZoomThumnMove, !1), document.addEventListener("mouseup", i, !1)
                        },
                        wheelZoom: function(t) {
                            var e = parseFloat(a.get.el("zoom").val());
                            (e += .15 * t.originalEvent.wheelDelta) < 100 ? e = 100 : e > 250 && (e = 250), a.get.el("zoom").val(e).trigger("input"), t.preventDefault()
                        },
                        fillColor: function(t) {
                            var e = a.stage().canvas,
                                i = e.getActiveObject();
                            if (i && i.fill !== this.value) {
                                if ("qrcode" == i.type || "text-fx" == i.type) { //"image" == i.type || 
                                    if (a.get.el("fill").closest('li[data-tool="fill"]').css({
                                            "border-bottom": ""
                                        }), i.set("fill", this.value), i._element && i._element.src.indexOf("data:image/svg+xml;base64") > -1) {
                                        var s = a.func.fill_svg(i._element.src, this.value);
                                        return i._element.src = s, i._element.onload = function() {
                                            e.renderAll()
                                        }, void i.set({
                                            colors: [this.value],
                                            origin_src: s,
                                            src: s
                                        })
                                    }
                                    if ("" !== this.value) {
                                        var n = new fabric.Image.filters.Tint({
                                            color: this.value
                                        });
                                        if (i.filters || (i.filters = []), 0 == i.filters.length) i.filters.push(n);
                                        else {
                                            var o = i.filters.filter(function(t) {
                                                return void 0 !== t.color
                                            });
                                            o.length > 0 ? o[0].color = this.value : i.filters.push(n)
                                        }
                                        "qrcode" == i.type && (i.backgroundColor = a.func.invert(this.value))
                                    } else {
                                        var r = [];
                                        i.filters.map(function(t) {
                                            void 0 === t.color && r.push(t)
                                        }), i.filters = r
                                    }
                                    "function" == typeof i.applyFilters && i.applyFilters(e.renderAll.bind(e))
                                } else "path-group" != i.type && "svg" != i.type && i.set("fill", this.value);
                                "text-fx" != i.type ? e.renderAll() : a.func.update_text_fx(), a.design.layers.build()
                            }
                        },
                        fillStroke: function(t) {
                            var e = a.stage().canvas,
                                i = e.getActiveObject();
                            i && i.strokeWidth > 0 && (i.set("stroke", this.value), e.renderAll())
                        },
                        svgFillColor: function(e) {
                            var i = a.stage().canvas,
                                s = i.getActiveObject(),
                                n = this.value,
                                o = this.getAttribute("data-active-color");
                            if (null != s)
                                if (void 0 !== s.j_object) {
                                    a.tools.svg.replace(s.j_object, n, o);
                                    var r = "data:image/svg+xml;base64," + btoa(s.j_object.html());
                                    a.get.el("svg-colors").find('span[data-color="' + o + '"] input').css({
                                        "background-color": n
                                    }), s.set("fill", ""), s.set("src", r), s.set("origin_src", r), s._element.src = r, s._originalElement.src = r, s._element.onload = function() {
                                        i.renderAll()
                                    }
                                } else t("#lumise-color-picker-header i").click()
                        },
                        saveColor: function(t) {
                            var e = a.get.el(this.getAttribute("data-target")).val().toString().toLowerCase(),
                                i = "#F4511E|#546E7A|#00ACC1|#3949AB|#5E35B1|#e53935|#FDD835|#7CB342|#6D4C41|#8E24AA";
                            if (0 === e.indexOf("rgb") && (e = a.tools.svg.rgb2hex(e)), e = e.toUpperCase(), localStorage.getItem("lumise_color_presets") && (i = localStorage.getItem("lumise_color_presets")), i = i.split("|"), !("" === e || i.indexOf(e) > -1)) {
                                for (i.unshift(e); i.length > 10;) i.pop();
                                localStorage.setItem("lumise_color_presets", i.join("|")), a.render.colorPresets()
                            }
                        },
                        enableCurved: function(t) {
                            if (!t.isTrigger) {
                                var e, i = a.stage().canvas,
                                    s = i.getActiveObject(),
                                    n = null;
                                if (s)
                                    if (this.checked && "i-text" == s.type ? (delete(e = s.toObject(a.ops.export_list)).type, e.clipTo = function(t) {
                                            return a.objects.clipto(t, n)
                                        }, [
                                            ["textAlign", "center"],
                                            ["radius", 50],
                                            ["spacing", 5],
                                            ["angle", 0],
                                            ["effect", "bridge"]
                                        ].map(function(t) {
                                            void 0 === e[t[0]] && (e[t[0]] = t[1])
                                        }), n = new fabric.CurvedText(s.getText().trim(), e)) : this.checked || "curvedText" != s.type || ((e = s.toObject(a.ops.export_list)).text = s.getText().trim(), delete e.type, e.clipTo = function(t) {
                                            return a.objects.clipto(t, n)
                                        }, n = a.objects.text(e)), null !== n) {
                                        var o = i.getObjects().indexOf(s);
                                        i.remove(s), a.stage().stack.data.pop(), i.add(n), n.moveTo(o), i.setActiveObject(n).renderAll(), a.design.layers.build()
                                    } else alert(a.i(18))
                            }
                        },
                        text_effect: function(e) {
                            if (!e.isTrigger) {
                                var i = a.stage().canvas,
                                    s = i.getActiveObject(),
                                    n = this.getAttribute("data-effect"),
                                    o = s.toObject(a.ops.export_list),
                                    r = null;
                                if (s)
                                    if (a.f(""), t(this.parentNode).find("[data-selected]").attr({
                                            "data-selected": ""
                                        }), t(this).attr({
                                            "data-selected": "true"
                                        }), "curved" == n) delete o.type, o.clipTo = function(t) {
                                        return a.objects.clipto(t, r)
                                    }, [
                                        ["textAlign", "center"],
                                        ["radius", 50],
                                        ["spacing", 5],
                                        ["angle", 0],
                                        ["effect", "bridge"]
                                    ].map(function(t) {
                                        void 0 === o[t[0]] && (o[t[0]] = t[1])
                                    }), r = new fabric.CurvedText(s.text.trim(), o), a.func.switch_type(r), r.set("radius", 50), i.renderAll();
                                    else {
                                        if (o.text = s.text.trim(), delete o.type, o.clipTo = function(t) {
                                                return a.objects.clipto(t, r)
                                            }, "normal" == n) return a.func.switch_type(a.objects.text(o));
                                        if (void 0 === o.bridge && (o.bridge = {
                                                curve: -2.5,
                                                offsetY: .5,
                                                bottom: 2.5,
                                                trident: !1,
                                                oblique: !1
                                            }), o.bridge.oblique = "oblique" == n, "oblique" == n ? a.get.el("text-fx-trident").closest('li[data-func="text-fx"]').hide() : a.get.el("text-fx-trident").closest('li[data-func="text-fx"]').css({
                                                display: ""
                                            }), "text-fx" == s.type) {
                                            s.set({
                                                bridge: o.bridge
                                            });
                                            var l = a.func.bridgeText(s.cacheTextImageLarge, s.bridge);
                                            s._element.onload = function() {
                                                i.renderAll(), a.f(!1), a.get.el("text-effect").find("img[data-effect]").attr({
                                                    "data-selected": null
                                                }), a.get.el("text-effect").find('img[data-effect="' + n + '"]').attr({
                                                    "data-selected": "true"
                                                })
                                            }, s._element.src = l, s._originalElement.src = l
                                        } else a.objects.lumise["text-fx"](o, a.func.switch_type)
                                    }
                            }
                        },
                        editText: function(t) {
                            var e = a.stage().canvas,
                                i = e.getActiveObject(),
                                s = this,
                                n = function() {
                                    e.renderAll(), a.get.el("workspace").find(".designer-edit-text").val(s.value)
                                };
                            if (i && !t.isTrigger) {
                                switch (i.type) {
                                    case "curvedText":
                                    case "i-text":
                                        i.setText(this.value);
                                        break;
                                    case "qrcode":
                                        var o = a.tools.qrcode({
                                            text: this.value,
                                            foreground: i.fill
                                        });
                                        return i._element.onload = n, i._element.src = o.toDataURL(), i.set({
                                            text: this.value,
                                            name: i.name ? i.name : this.value,
                                            fill: i.fill
                                        }), delete o;
                                    case "text-fx":
                                        i.set("text", this.value)
                                }
                                n()
                            }
                        },
                        textFormat: function(e) {
                            var i = a.stage().canvas,
                                s = i.getActiveObject(),
                                n = this.getAttribute("data-format"),
                                o = this;
                            s && !e.isTrigger && (o.getAttribute("data-align") ? (t(o.parentNode).find("[data-align].selected").removeClass("selected"), t(o).addClass("selected"), s.set("textAlign", o.getAttribute("data-align")), a.get.el("text-align").attr({
                                class: "fa fa-align-" + (o.getAttribute("data-align") ? o.getAttribute("data-align") : "center")
                            })) : n && ("upper" == n ? s.get("text").toString() != s.get("text").toString().toUpperCase() ? s.setText(s.get("text").toString().toUpperCase()) : s.setText(s.get("text").toString().toLowerCase()) : [
                                ["bold", "fontWeight"],
                                ["italic", "fontStyle"],
                                ["underline", "textDecoration"]
                            ].map(function(e) {
                                n == e[0] && (t(o).hasClass("selected") ? (t(o).removeClass("selected"), s.set(e[1], "")) : (t(o).addClass("selected"), s.set(e[1], e[0])))
                            })), "text-fx" != s.type ? document.fonts.load(s.fontStyle + " " + s.fontWeight + " 1px " + s.fontFamily, "a").then(function() {
                                fabric.util.clearFabricFontCache(s.fontFamily), i.renderAll()
                            }) : a.func.update_text_fx())
                        },
                        textFX: function(t, e, i) {
                            if (void 0 === e || void 0 === e.isTrigger) {
                                var s = a.get.stage();
                                if (s.active) {
                                    s.active.bridge || (s.active.bridge = {});
                                    var n = "input";
                                    t.target && (t = this, i = parseFloat(this.getAttribute("data-ratio")) || 1, n = "change");
                                    var o, r = t.getAttribute("data-fx");
                                    s.active.bridge[r] = "trident" == r ? t.checked : parseFloat(t.value) * i, o = "change" == n ? a.func.bridgeText(s.active.cacheTextImageLarge, s.active.bridge) : a.func.bridgeText(s.active.cacheTextImage, s.active.bridge), s.active._element.onload = function() {
                                        s.active.set("fill", s.active.fill), s.canvas.renderAll()
                                    }, s.active._element.src = o, s.active._originalElement.src = o
                                }
                            }
                        },
                        strokeColor: function(t) {
                            var e = a.stage().canvas.getActiveObject(),
                                i = this.getAttribute("data-color"),
                                s = a.get.el("stroke").get(0);
                            a.get.el("stroke-width").val(), s.color && "function" == typeof s.color.fromString && s.color.fromString(i), e.set("stroke", this.getAttribute("data-color")), a.stage().canvas.renderAll()
                        },
                        imageFX: function(t) {
                            this.setAttribute("data-value", this.value), a.func.update_image_fx(this.getAttribute("data-image-fx"), this.value)
                        },
                        doArrange: function(e) {
                            var i = a.stage().canvas,
                                s = i.getActiveObject();
                            if (s) {
                                var n = i.getObjects(),
                                    o = n.indexOf(s);
                                return "forward" == this.getAttribute("data-arrange") ? void 0 !== n[o + 1] ? (s.moveTo(o + 1), i.renderAll(), a.design.layers.build()) : t(this).addClass("disabled") : "back" == this.getAttribute("data-arrange") ? void 0 !== n[o - 1] && !1 !== n[o - 1].evented ? (s.moveTo(o - 1), i.renderAll(), a.design.layers.build()) : t(this).addClass("disabled") : void 0
                            }
                        },
                        load_fonts: function() {
                            a.tools.lightbox({
                                width: 1020,
                                content: '<iframe src="https://www.arteno.in/fonts/"></iframe>\t\t\t\t\t\t\t\t\t '
                            }),$("#font_loader").show(), t("#designer-lightbox iframe").on("load", function() {
                                this.contentWindow.postMessage({
                                    action: "fonts",
                                    fonts: localStorage.getItem("LUMISE_FONTS")
                                }, "*"),$("#font_loader").hide(), t('#designer-lightbox span[data-view="loading"]').remove()
                            })
                        },
                        select_font: function(e) {
                            var i = e.target.getAttribute("data-family");
                            if (i) {
                                a.get.el("fonts").find("font.selected").removeClass("selected"), t(e.target).addClass("selected").closest('li[data-tool="font"]').find("button.dropdown").html("<font style=\"font-family:'" + i + "'\">" + i + "</font>");
                                var s = a.stage().canvas,
                                    n = s.getActiveObject();
                                if (n.fontFamily == i) return;
                                n.set("fontFamily", '"' + i + '"'), e.target.getAttribute("data-source") ? (n.set("font", e.target.getAttribute("data-source")), a.func.font_blob(n)) : (fonts = JSON.parse(localStorage.getItem("LUMISE_FONTS")), fonts[encodeURIComponent(i)] && n.set({
                                    font: fonts[encodeURIComponent(i)]
                                })), "text-fx" != n.type ? s.renderAll() : a.func.update_text_fx()
                            }
                        },
                        flip: function(t) {
                            var e = a.stage().canvas,
                                i = e.getActiveObject();
                            "designer-flip-x" == this.id ? i.set("flipX", this.checked) : i.set("flipY", this.checked), e.renderAll()
                        },
                        lock_position: function(t) {
                            var e = a.stage().canvas;
                            e.getActiveObject().set({
                                lockPosition: this.checked,
                                lockMovementX: this.checked,
                                lockMovementY: this.checked
                            }), a.get.el("position-wrp").attr({
                                "data-lock": !0 === this.checked ? "true" : "false"
                            }), e.renderAll()
                        },
                        resetTransform: function() {
                            var t = a.stage().canvas,
                                e = t.getActiveObject();
                            e.set({
                                scaleY: e.scaleX,
                                skewX: 0,
                                skewY: 0,
                                angle: 0,
                                flipX: !1,
                                flipY: !1
                            }), t.renderAll(), a.tools.set(e)
                        },
                        selectImageFX: function(t) {
                            a.func.update_image_fx(this.getAttribute("data-fx"), this.value)
                        },
                        imageColorFX: function(e) {
                            var i = a.get.stage();
                            "bnw" == this.getAttribute("data-fx") ? (t("#designer-image-fx-saturation").val(15).trigger("input"), a.func.update_image_fx("saturation", 15)) : i.active.fx && 15 == i.active.fx.saturation ? (i.active.fx.saturation = 100, t("#designer-image-fx-saturation").val(100).trigger("input")) : "" === this.getAttribute("data-fx") && (i.active.fx.saturation = 100, i.active.fx.brightness = 0, i.active.fx.contrast = 0, a.get.el("image-fx-brightness").val(0).attr({
                                "data-value": 0
                            }), a.get.el("image-fx-contrast").val(0).attr({
                                "data-value": 0
                            }), a.get.el("image-fx-saturation").val(100).attr({
                                "data-value": 100
                            })), t(this.parentNode).find('[data-selected="true"]').removeAttr("data-selected"), t(this).attr({
                                "data-selected": "true"
                            }), a.func.update_image_fx("fx", this.getAttribute("data-fx"))
                        },
                        bug_submit: function(t) {
                            var e = a.get.el("bug"),
                                i = e.find('textarea[data-id="report-content"]').val();
                            if (i.length < 30) return e.find('textarea[data-id="report-content"]').shake();
                            i = btoa(encodeURIComponent(i.substr(0, 1500))), e.attr({
                                "data-view": "sending"
                            }), a.post({
                                action: "send_bug",
                                content: i
                            }, function(t) {
                                try {
                                    t = JSON.parse(t)
                                } catch (e) {
                                    t = {}
                                }
                                if (1 != t.success) return e.removeAttr("data-view"), void a.func.notice(t.message, "error", 3500);
                                e.attr({
                                    "data-view": "success"
                                }), setTimeout(function() {
                                    e.removeAttr("data-view"), e.find('textarea[data-id="report-content"]').val("")
                                }, 1e4)
                            })
                        },
                        options: function() {
                            "function" == typeof this.getAttribute && localStorage.setItem("LUMISE-" + this.getAttribute("data-name"), this.checked)
                        },
                        exit_drawing: function() {
                            a.get.el('left .designer-left-nav li[data-tab="layers"]').trigger("click")
                        },
                        template_designs: function(e) {
                            var i = e.target.getAttribute("data-func");
                            if (i) {
                                a.ops.preventClick = !0;
                                var s = t(e.target).closest("li[data-id]").data("id");
                                if (s || "new" == i) switch (i) {
                                    case "edit":
                                        if ("new" == s) {
                                            var n = !0;
                                            return Object.keys(a.cart.printing.states_data).map(function(t) {
                                                Object.keys(a.cart.printing.states_data[t]).map(function(e) {
                                                    "number" == typeof a.cart.printing.states_data[t][e] && 0 !== a.cart.printing.states_data[t][e] && (n = !1)
                                                })
                                            }), n ? a.func.notice(a.i(96), "error", 3500) : (a.func.set_url("my_design", null), a.func.export("designs"), a.render.refresh_my_designs())
                                        }
                                        if (t(e.target).closest('li.active[data-id="' + s + '"]').length > 0) return;
                                        a.indexed.get(s, "dumb", function(t) {
                                            console.table(a.ops.my_designs);
                                            null !== t ? (a.ops.my_designs[s].stages = t.stages, a.func.edit_design(a.ops.my_designs[s])) : a.func.notice(a.i(166), "error", 3500)
                                        });
                                        break;
                                    case "name":
                                        var o = t(e.target).text();
                                        e.target.onblur = function() {
                                            o != t(this).text() && (o = t(this).text(), setTimeout(function() {
                                                a.indexed.get(s, "designs", function(t) {
                                                    null !== t && (t.name = o, a.indexed.get(s, "dumb", function(e) {
                                                        null !== e && (e.name = o, a.indexed.save([t, e], "designs"), delete t, delete e)
                                                    }))
                                                })
                                            }, 300))
                                        };
                                        break;
                                    case "delete":
                                        if (!confirm(a.i("sure"))) return;
                                        a.indexed.delete(s, "designs"), t(e.target).closest("li[data-id]").find("img").each(function() {
                                            0 === this.src.indexOf("blob:") && URL.revokeObjectURL(this.src)
                                        }), t(e.target).closest("li[data-id]").remove()
                                }
                            }
                        },
                        saved_designs: function(e) {
                            var i = e.target.getAttribute("data-func");
                            if (i) {
                                a.ops.preventClick = !0;
                                var s = t(e.target).closest("li[data-id]").data("id");
                                if (s || "new" == i) switch (i) {
                                    case "edit":
                                        if ("new" == s) {
                                            var n = !0;
                                            return Object.keys(a.cart.printing.states_data).map(function(t) {
                                                Object.keys(a.cart.printing.states_data[t]).map(function(e) {
                                                    "number" == typeof a.cart.printing.states_data[t][e] && 0 !== a.cart.printing.states_data[t][e] && (n = !1)
                                                })
                                            }), n ? a.func.notice(a.i(96), "error", 3500) : (a.func.set_url("my_design", null), a.func.export("designs"), a.render.refresh_my_designs())
                                        }
                                        if (t(e.target).closest('li.active[data-id="' + s + '"]').length > 0) return;
                                        a.indexed.get(s, "dumb", function(t) {
                                            console.table(a.ops.my_designs);
                                            null !== t ? (a.ops.my_designs[s].stages = t.stages, a.func.edit_design(a.ops.my_designs[s])) : a.func.notice(a.i(166), "error", 3500)
                                        });
                                        break;
                                    case "name":
                                        var o = t(e.target).text();
                                        e.target.onblur = function() {
                                            o != t(this).text() && (o = t(this).text(), setTimeout(function() {
                                                a.indexed.get(s, "designs", function(t) {
                                                    null !== t && (t.name = o, a.indexed.get(s, "dumb", function(e) {
                                                        null !== e && (e.name = o, a.indexed.save([t, e], "designs"), delete t, delete e)
                                                    }))
                                                })
                                            }, 300))
                                        };
                                        break;
                                    case "delete":
                                        if (!confirm(a.i("sure"))) return;
                                        a.indexed.delete(s, "designs"), t(e.target).closest("li[data-id]").find("img").each(function() {
                                            0 === this.src.indexOf("blob:") && URL.revokeObjectURL(this.src)
                                        }), t(e.target).closest("li[data-id]").remove()
                                }
                            }
                        },
                        saved_designs_search: function(e) {
                            var i = this.value.trim().toLowerCase();
                            a.get.el("saved-designs").find("li").each(function() {
                                "" === i || t(this).find('span[data-view="name"]').text().trim().toLowerCase().indexOf(i) > -1 ? this.style.display = "" : this.style.display = "none"
                            })
                        },
                        change_lang: function(e) {
                            a.post({
                                action: "change_lang",
                                code: this.getAttribute("data-id")
                            }), t(this).closest('li[data-tool="languages"]').removeClass("active").html('<i class="designer-spinner white"></i>')
                        },
                        change_product: function(t) {
                            var e = a.func.url_var("product") ? a.i(80) : a.i(87);
                            //console.log(void 0), console.log(e), 
                            a.ops.products = void 0, a.render.products_list(e)
                        },
                        fileNav: function(t) {
                            switch (this.getAttribute("data-func")) {
                                case "new":
                                    a.design.my_designs.new();
                                    break;
                                case "import":
                                    var e = a.get.el("import-json").get(0);
                                    e.type = "", e.type = "file", e.click(), !0 !== a.get.el("import-json").data("addEvent") && a.get.el("import-json").data({
                                        addEvent: !0
                                    }).on("change", function() {
                                        a.design.my_designs.import(this.files[0])
                                    });
                                    break;
                                case "clear":
                                    a.tools.clearAll(), a.func.notice(a.i(29), "success");
                                    break;
                                case "saveas":
                                    a.func.download_design({
                                        type: "json"
                                    });
                                    break;
                                case "save":
                                    return void a.func.export("designs");
                                case "download":
                                    a.func.download_design({
                                        type: this.getAttribute("data-type")
                                    })
                            }
                            a.func.navigation("clear")
                        },
                        doPrint: function(e) {
                            var i = localStorage.getItem("LUMISE_PRINT_CFG"),
                                s = this.getAttribute("data-format");
                            switch (i = i && "" !== i ? JSON.parse(i) : {}, this.getAttribute("data-dp")) {
                                case "format":
                                    var n = ['li[data-row="size"]', 'li[data-row="csize"]', 'li[data-row="unit"]', 'li[data-row="orien"]', 'button[data-func="print"]'],
                                        o = void 0 !== (u = a.stage()) && void 0 !== u.size ? u.size : "";
                                    n = t("#designer-print-nav").find(n.join(",")), i.format = s, "png" == s ? ("" !== o ? (n.hide(), t('#designer-print-nav li[data-row="size"] select option[value="' + o + '"]').length > 0 ? t("#designer-print-nav").find('li[data-row="size"]').show() : t("#designer-print-nav").find('li[data-row="csize"],li[data-row="unit"]').show()) : n.show(), t('#designer-print-nav designer-btn[data-func="print"]').show()) : (n.hide(), t('#designer-print-nav designer-btn[data-func="print"]').hide(), t("#designer-print-nav").find('li[data-row="size"]').hide()), "pdf" == s ? t("#designer-print-nav").find('li[data-row="full"], li[data-row="cropmarks"]').show() : t("#designer-print-nav").find('li[data-row="full"], li[data-row="cropmarks"]').hide();
                                    break;
                                case "csize":
                                    i.csize = this.value;
                                    break;
                                case "orien":
                                    i.orien = this.value;
                                    break;
                                case "base":
                                    i.base = this.checked;
                                    break;
                                case "overflow":
                                    i.overflow = this.checked;
                                    break;
                                case "cropmarks":
                                    i.cropmarks = this.checked;
                                    break;
                                case "all_pages":
                                    i.all_pages = this.checked;
                                    break;
                                case "unit":
                                    var r = t('#designer-print-nav select[name="select-size"]').val();
                                    if (inp = t('#designer-print-nav input[name="size"]'), l = this.getAttribute("data-unit"), "" === r || null === r) return;
                                    i.unit = l, (r = r.split("x"))[0] = parseFloat(r[0].trim()), r[1] = parseFloat(r[1].trim()), "inch" == l ? (r[0] = (r[0] / 2.54).toFixed(2), r[1] = (r[1] / 2.54).toFixed(2)) : "px" == l && (r[0] = (118.095238 * r[0]).toFixed(2), r[1] = (118.095238 * r[1]).toFixed(2)), r = r.join(" x "), inp.val(r), i.csize = r;
                                    break;
                                case "size":
                                    var l = t('#designer-print-nav input[name="print-unit"]:checked').data("unit");
                                    if ("" === (r = this.value)) return;
                                    i.size = r, (r = r.split("x"))[0] = parseFloat(r[0].trim()), r[1] = parseFloat(r[1].trim()), "inch" == l ? (r[0] = (r[0] / 2.54).toFixed(2), r[1] = (r[1] / 2.54).toFixed(2)) : "px" == l && (r[0] = (118.1 * r[0]).toFixed(0), r[1] = (118.1 * r[1]).toFixed(0)), r = r.join(" x "), i.csize = r, a.get.el("print-nav").find('input[name="size"]').val(r)
                            }
                            if ("BUTTON" == this.tagName) {
                                s = t('#designer-print-nav input[name="print-format"]:checked').attr("data-format");
                                var c = t("#designer-print-base").prop("checked"),
                                    d = t("#designer-print-full").prop("checked"),
                                    u = (t("#designer-print-overflow").prop("checked"), a.stage()),
                                    p = this.getAttribute("data-func");
                                if ("svg" == s || "pdf" == s) return a.func.download_design({
                                    type: s,
                                    include_base: c,
                                    full: d
                                });
                                $('#loader_print_data').show();
                                document.getElementById("designer").setAttribute("data-processing", "true"), document.getElementById("designer").setAttribute("data-msg", a.i("render")), a.get.el("zoom").val("100").trigger("input");
                                var g = a.get.size();
                                setTimeout(function(t) {
                                    a.func.download_design({
                                        type: "png",
                                        orien: g.o,
                                        height: g.h,
                                        width: g.w,
                                        include_base: c,
                                        callback: function(t) {
                                            $('#loader_print_data').hide();
                                            return a.f(!1), "download" == p ? 
                                                (
                                                    name = a.data.prefix_file + "_print_" + a.current_stage + ".png",
                                                    "" !== a.func.url_var("order_print", "")
                                                    && (name = "order-" + a.func.url_var("order_print") + "__product-" + a.func.url_var("product_cms") + "__base-" + a.func.url_var("product") + "__stage-" + (Object.keys(a.data.stages).indexOf(a.current_stage) + 1) + ".png"),
                                                    void a.func.download(t, name)
                                                ) :
                                            t.length < 10 ? alert(a.i(36)) : void window.open().document.write('<img style="width:100%" src="' + t + '" onload="window.print();window.close();" />')
                                        }
                                    })
                                }, 10, this)
                            }
                            localStorage.setItem("LUMISE_PRINT_CFG", JSON.stringify(i))
                        },
                        nav: function(e) {
                            if ("nav" == e.target.getAttribute("data-func")) {
                                var a = t(e.target),
                                    i = a.data("nav"),
                                    s = a.closest(".designer-tabs-nav").find('li[data-view="' + i + '"]');
                                a.closest(".designer-tabs-nav").attr({
                                    "data-nav": i
                                }).find('[data-active="true"]').removeAttr("data-active"), a.attr({
                                    "data-active": "true"
                                }), s.attr({
                                    "data-active": "true"
                                }), e.preventDefault()
                            }
                        },
                        doShare: function(e) {
                            var i = e.target.getAttribute("data-func");
                            if (i) {
                                var s = localStorage.getItem("LUMISE_SHARE_HISTORY"),
                                    n = t(e.target);
                                if (s) try {
                                    s = JSON.parse(s)
                                } catch (t) {
                                    s = []
                                } else s = [];
                                s.length > 3 && s.splice(3);
                                var o = function(t) {
                                    var e = a.get.el("shares-wrp").find('li[data-view="history"]');
                                    e.attr({
                                        "data-process": "true"
                                    }), a.post({
                                        action: "get_shares",
                                        index: t,
                                        stream: a.func.url_var("stream", "")
                                    }, function(t) {
                                        if (e.removeAttr("data-process"), (t = JSON.parse(t)).result.length > 0) {
                                            var i = "",
                                                s = "";
                                            t.result.map(function(t) {
                                                (s = a.data.tool_url).indexOf("?") > -1 ? s += "&" : s += "?", s += "product=" + t.product, s += "&product_cms=" + t.product_cms, s = (s += "&share=" + t.share_id).replace("?&", "?"), i += '<span data-item>\t\t\t\t\t\t\t\t\t\t\t<a href="' + s + '" target="_blank">\t\t\t\t\t\t\t\t\t\t\t\t<img src="' + a.data.upload_url + "shares/" + a.func.date("Y/t", t.created) + "/" + t.share_id + '.jpg" height="150" />\t\t\t\t\t\t\t\t\t\t\t</a>\t\t\t\t\t\t\t\t\t\t\t<name>' + t.name + '</name>\t\t\t\t\t\t\t\t\t\t\t<span data-view="func">\t\t\t\t\t\t\t\t\t\t\t\t<i class="lumise-icon-menu"></i>\t\t\t\t\t\t\t\t\t\t\t\t<span data-view="fsub" data-id="' + t.share_id + '" data-aid="' + t.aid + '" data-link="' + encodeURIComponent(s) + '" data-created="' + t.created + '">\t\t\t\t\t\t\t\t\t\t\t\t\t<date data-func="date">' + a.func.date("h:m D d M, Y", t.created) + '</date>\t\t\t\t\t\t\t\t\t\t\t\t\t<button data-func="copy-link">\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class="lumise-icon-doc"></i> ' + a.i(130) + '\t\t\t\t\t\t\t\t\t\t\t\t\t</button>\t\t\t\t\t\t\t\t\t\t\t\t\t<button data-func="open">\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class="lumise-icon-link"></i> ' + a.i(131) + '\t\t\t\t\t\t\t\t\t\t\t\t\t</button>\t\t\t\t\t\t\t\t\t\t\t\t\t<button data-func="delete">\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class="lumise-icon-trash"></i> ' + a.i(132) + "\t\t\t\t\t\t\t\t\t\t\t\t\t</button>\t\t\t\t\t\t\t\t\t\t\t\t</span>\t\t\t\t\t\t\t\t\t\t\t</span>\t\t\t\t\t\t\t\t\t\t</span>"
                                            }), e.html(i)
                                        } else e.html('<p class="notice mt2 mb2">' + a.i(129) + "</p>");
                                        if (t.per_page < t.total) {
                                            var n = '<ul data-view="pagenation">';
                                            t.index > t.per_page && (n += '<li data-func="pagination" data-p="0"><i data-func="pagination" data-p="0" class="fa fa-arrow-left"></i><i data-func="pagination" data-p="0" class="fa fa-arrow-left"></i></li>');
                                            for (var o = 1; o <= Math.ceil(t.total / t.per_page); o++) n += '<li data-func="pagination" data-p="' + (o - 1) * t.per_page + '"' + (t.index == o * t.per_page ? ' data-active="true"' : "") + ">" + o + "</li>";
                                            t.index < t.total && (n += '<li data-func="pagination" data-p="' + (Math.ceil(t.total / t.per_page) - 1) * t.per_page + '"><i data-func="pagination" data-p="' + (Math.ceil(t.total / t.per_page) - 1) * t.per_page + '" class="fa fa-arrow-right"></i><i data-func="pagination" data-p="' + (Math.ceil(t.total / t.per_page) - 1) * t.per_page + '" class="fa fa-arrow-right"></i></li>'), n += "</ul>", e.append(n)
                                        } else t.index > t.per_page && t.result.length > 0 && e.append('<p class="center">' + a.i(134) + "</p>")
                                    })
                                };
                                switch ("history" == n.data("nav") && o(0), i) {
                                    case "nav":
                                        return e.data.nav(e);
                                    case "pagination":
                                        o(n.data("p"));
                                        break;
                                    case "copy-link":
                                        a.func.copy(decodeURIComponent(n.closest('[data-view="fsub"]').data("link"))), a.func.notice(a.i(135), "success");
                                        break;
                                    case "open":
                                        window.open(decodeURIComponent(n.closest('[data-view="fsub"]').data("link")));
                                        break;
                                    case "delete":
                                        a.func.confirm({
                                            title: a.i(133),
                                            primary: {
                                                text: "Delete",
                                                callback: function(t) {
                                                    n.closest("span[data-item]").css({
                                                        opacity: .25
                                                    }), a.post({
                                                        action: "delete_link_share",
                                                        aid: n.closest('[data-view="fsub"]').data("aid"),
                                                        id: n.closest('[data-view="fsub"]').data("id")
                                                    }, function(t) {
                                                        0 == (t = JSON.parse(t)).success ? (n.closest("span[data-item]").css({
                                                            opacity: 1
                                                        }), a.func.notice(t.message, "error")) : n.closest("span[data-item]").remove()
                                                    })
                                                }
                                            },
                                            second: {
                                                text: "Cancel"
                                            }
                                        });
                                        break;
                                    case "create-link":
                                        var r = !1;
                                        if (3 == s.length && (new Date).getTime() - parseInt(1e3 * s[0]) < 3e5 && (r = !0), !0 === r) return void a.func.confirm({
                                            title: a.i(128),
                                            primary: {},
                                            second: {
                                                text: "Ok"
                                            },
                                            type: "notice"
                                        });
                                        if ("" === t("#designer-share-link-title").val()) return t("#designer-share-link-title").shake(), void e.preventDefault();
                                        var l = 0;
                                        if (Object.keys(a.data.stages).map(function(t) {
                                                void 0 !== a.data.stages[t] && void 0 !== a.data.stages[t].canvas && a.data.stages[t].canvas.getObjects().map(function(t) {
                                                    1 == t.evented && l++
                                                })
                                            }), 0 === l) return a.func.notice(a.i(96), "error"), !1;
                                        var c = t(e.target).closest("#designer-shares-wrp");
                                        (d = {
                                            data: a.func.export("share"),
                                            product: a.func.url_var("product", ""),
                                            product_cms: a.func.url_var("product_cms", ""),
                                            label: t("#designer-share-link-title").val(),
                                            aid: a.func.get_cookie("lumise-AID"),
                                            action: "upload_share_design"
                                        }).screenshot = btoa(encodeURIComponent(d.data.stages[Object.keys(d.data.stages)[0]].screenshot)), Object.keys(d.data.stages).map(function(t) {
                                            d.data.stages[t].screenshot = ""
                                        }), d.data = btoa(encodeURIComponent(JSON.stringify(d.data))), a.post(d, function(t) {
                                            if (t = JSON.parse(t), c.removeAttr("data-process").find(".designer-notice").remove(), 0 === t.success) c.find('li[data-view="link"]').prepend('<p class="notice error mb1" data-phase="1">' + t.message + "</p>");
                                            else {
                                                c.attr({
                                                    "data-phase": "2"
                                                });
                                                var e = a.data.tool_url;
                                                e.indexOf("?") > -1 ? e += "&" : e += "?", e += "product=" + t.product, null !== t.product_cms && "" !== t.product_cms && (e += "&product_cms=" + t.product_cms), e = (e += "&share=" + t.id).replace("?&", "?"), c.find('p[data-view="link-share"]').html(e), c.find("button[data-network]").off("click").on("click", function(i) {
                                                    var s = this.getAttribute("data-network"),
                                                        n = "";
                                                    "facebook" == s ? n = "https://www.facebook.com/dialog/share?href=" + encodeURIComponent(e) + "&display=popup&app_id=" + a.apply_filters("fbappid", "1430309103691863") : "twitter" == s ? n = "https://twitter.com/intent/tweet?url=" + encodeURIComponent(e) + "&text=" + encodeURIComponent(d.label) + "&via=Lumise&related=Lumise,LumiseCom,LumiseProductDesigner" : "pinterest" == s && (n = "https://www.pinterest.com/pin/create/button/?url=" + encodeURIComponent(e) + "&description=" + encodeURIComponent(d.label) + "&is_video=false&media=" + encodeURIComponent(a.data.upload_url + "shares/" + t.path + "/" + t.id + ".jpg")), "" !== n && window.open(n), i.preventDefault()
                                                }), s.push(t.created), localStorage.setItem("LUMISE_SHARE_HISTORY", JSON.stringify(s))
                                            }
                                        }), c.attr({
                                            "data-process": "Creating..."
                                        });
                                        break;
                                    case "generate-link":
                                        if (l = 0, Object.keys(a.data.stages).map(function(t) {
                                                void 0 !== a.data.stages[t] && void 0 !== a.data.stages[t].canvas && a.data.stages[t].canvas.getObjects().map(function(t) {
                                                    1 == t.evented && l++
                                                })
                                            }), 0 === l) return a.func.notice(a.i(96), "error"), !1;
                                        var d;
                                        c = t(e.target).closest("#designer-shares-wrp"), (d = {
                                            data: a.func.export("share"),
                                            product: a.func.url_var("product", ""),
                                            product_cms: a.func.url_var("product_cms", ""),
                                            label: "temp-" + Math.random().toString(36).substr(2),
                                            aid: a.func.get_cookie("lumise-AID"),
                                            action: "upload_share_design"
                                        }).screenshot = btoa(encodeURIComponent(d.data.stages[Object.keys(d.data.stages)[0]].screenshot)), Object.keys(d.data.stages).map(function(t) {
                                            d.data.stages[t].screenshot = ""
                                        }), d.data = btoa(encodeURIComponent(JSON.stringify(d.data))), a.post(d, function(t) {
                                            if (t = JSON.parse(t), c.removeAttr("data-process").find(".designer-notice").remove(), 0 !== t.success) {
                                                c.attr({
                                                    "data-phase": "2"
                                                });
                                                var e = a.data.tool_url;
                                                return e.indexOf("?") > -1 ? e += "&" : e += "?", e += "product=" + t.product, null !== t.product_cms && "" !== t.product_cms && (e += "&product_cms=" + t.product_cms), e = (e += "&share=" + t.id).replace("?&", "?"), c.find('p[data-view="link-share"]').html(e), e
                                            }
                                            c.find('li[data-view="link"]').prepend('<p class="notice error mb1" data-phase="1">' + t.message + "</p>")
                                        }), c.attr({
                                            "data-process": "Creating..."
                                        });
                                        break;
                                    case "do-again":
                                        a.get.el("shares-wrp").removeAttr("data-phase");
                                        break;
                                    case "copy":
                                        n = e.target, a.func.copy(n.innerHTML.trim()), n.setAttribute("data-copied", "true"), setTimeout(function() {
                                            n.removeAttribute("data-copied")
                                        }, 1500)
                                }
                            }
                        },
                        doGenerate: function(e) {
                            t(e.target);
                            var i = 0;
                            if (Object.keys(a.data.stages).map(function(t) {
                                    void 0 !== a.data.stages[t] && void 0 !== a.data.stages[t].canvas && a.data.stages[t].canvas.getObjects().map(function(t) {
                                        1 == t.evented && i++
                                    })
                                }), 0 === i) return a.func.notice(a.i(96), "error"), !1;
                            var s = t(e.target).closest("#designer-shares-wrp"),
                                n = {
                                    data: a.func.export("share"),
                                    product: a.func.url_var("product", ""),
                                    product_cms: a.func.url_var("product_cms", ""),
                                    label: "temp-" + Math.random().toString(36).substr(2),
                                    aid: a.func.get_cookie("lumise-AID"),
                                    action: "upload_share_design"
                                };
                            n.screenshot = btoa(encodeURIComponent(n.data.stages[Object.keys(n.data.stages)[0]].screenshot)), Object.keys(n.data.stages).map(function(t) {
                                n.data.stages[t].screenshot = ""
                            }), n.data = btoa(encodeURIComponent(JSON.stringify(n.data))), a.post(n, function(t) {
                                if (t = JSON.parse(t), s.removeAttr("data-process").find(".designer-notice").remove(), 0 !== t.success) {
                                    s.attr({
                                        "data-phase": "2"
                                    });
                                    var e = a.data.tool_url;
                                    return e.indexOf("?") > -1 ? e += "&" : e += "?", e += "product=" + t.product, null !== t.product_cms && "" !== t.product_cms && (e += "&product_cms=" + t.product_cms), e = (e += "&share=" + t.id).replace("?&", "?"), s.find('p[data-view="link-share"]').html(e), e
                                }
                                s.find('li[data-view="link"]').prepend('<p class="notice error mb1" data-phase="1">' + t.message + "</p>")
                            }), s.attr({
                                "data-process": "Creating..."
                            })
                        },
                        my_cart: function(t) {
                            var e = t.target.getAttribute("data-func"),
                                i = a.func.url_var("cart", ""),
                                s = t.target.getAttribute("data-id");
                            if (e && "" !== e) {
                                switch (e) {
                                    case "remove":
                                        if (confirm(a.i("sure"))) {
                                            i == s && a.func.set_url("cart", null);
                                            var n = JSON.parse(localStorage.getItem("MYCART-DATA"));
                                            delete n[s], localStorage.setItem("MYCART-DATA", JSON.stringify(n)), setTimeout(a.render.cart_change, 150)
                                        }
                                        break;
                                    case "edit":
                                        a.cart.edit_item(s, t);
                                        break;
                                    case "checkout":
                                        a.cart.do_checkout()
                                }
                                t.preventDefault()
                            }
                        },
                        
                        generateShare: function(e) { //Added for file based share-url
                            var i = [],
                                s = [],
                                n = [],
                                o = null,
                                r = a.func.export("cart"),
                                l = a.func.url_var("cart", (new Date).getTime().toString(36).toUpperCase()),
                                c = {};
                            // void 0 !== t && "function" == typeof t.preventDefault && t.preventDefault();
                            
                            if (d = 0, c[l] = {
                                    id: l,
                                    screenshot: "",
                                    stages: 0,
                                    name: a.ops.product_data.name,
                                    updated: (new Date).getTime(),
                                    product: a.ops.product_data.id,
                                    product_id: a.ops.product_data.id,
                                    product_cms: a.ops.product_data.product,
                                    printing: a.cart.printing.current,
                                    printings_cfg: a.data.printings_cfg,
                                    options: t.extend(!0, {}, a.cart.data.options),
                                    attributes: t.extend(!0, {}, a.ops.product_data.attributes),
                                    price_total: a.cart.get_price(),
                                    extra: t.extend(!0, {}, a.cart.price.extra),
                                    states_data: t.extend(!0, {}, a.cart.printing.states_data),
                                    variation: a.data.variation,
                                    template: {
                                        stages: a.cart.template,
                                        price: a.cart.price.template
                                    },
                                    system_version: a.data.version
                                }, Object.keys(a.cart.data.options).map(function(t) {
                                    i.push(a.cart.data.options[t])
                                }), Object.keys(a.data.stages).map(function(t) {
                                    void 0 !== a.data.stages[t] && void 0 !== a.data.stages[t].canvas && a.data.stages[t].canvas.getObjects().map(function(t) {
                                        1 == t.evented && d++
                                    }), c[l].stages++, "" === c[l].screenshot && (c[l].screenshot = a.data.stages[t].image)
                                }), 0 === d)// return swal("Your design is empty! Please create your design.",{icon: "warning",button: false,timer: 1200}), delete c, delete r, !1;
                            a.data.printings.length > 0 && null === a.cart.printing.current && (void 0 !== (o = t(".designer-prints").find(".designer-cart-field-printing-tmpl").get(0)) && n.push(o), t(".designer-prints").find(".designer-cart-field-printing-tmpl .designer-required-msg").html(a.i(99))), a.cart.qty = parseInt(a.cart.qty), (isNaN(a.cart.qty) || 0 == a.cart.qty) && (a.cart.qty = 1);
                            var g = t(".designer-cart-attributes");
                            if (g.find("em.designer-required-msg").remove(), g.find(".designer-cart-param").each(function(e) {
                                    var i = t(this),
                                        o = i.attr("name");
                                    i.prop("required") && "" === this.value && -1 === s.indexOf(o) && (s.push(o), n.push(i.closest(".designer-cart-field")[0]), i.after('<em class="designer-required-msg">' + a.i(102) + "</em>").closest(".designer_form_group").shake())
                                }), n.length > 0) {
                                var f = t("#designer-cart-wrp"),
                                    m = n[0].offsetTop;
                                return f.closest("#designer-product").length > 0 ? (t('#designer-left>div.row>div.col-md-12 .designer-left-nav li[data-tab="product"]').trigger("click"), t("#designer-product").show().animate({
                                    scrollTop: m - 20
                                }, 400)) : f.animate({
                                    scrollTop: m - 20
                                }, 400), a.func.notice(a.i(179), "error", 3500), delete c, delete r, !1
                            }
                            c = a.apply_filters("cart_data", c),
                            r = a.apply_filters("cart_design", r),
                            localStorage.setItem("MYSHARE-DATA", JSON.stringify(c)),
                            r.id = l,
                            a.indexed.save([r], "cart"),
                            a.cart.do_share(c),
                            // a.render.cart_change(),
                            // a.actions.do("add-cart", l),
                            // a.cart.checkout(c),
                            delete r,
                            delete c;
                        },
                        generateWishlist: function(e) { //Added for file based wishlist-url
                       
                            var i = [],
                                s = [],
                                n = [],
                                o = null,
                                r = a.func.export("cart"),
                                l = a.func.url_var("cart", (new Date).getTime().toString(36).toUpperCase()),
                                c = {};
                            // void 0 !== t && "function" == typeof t.preventDefault && t.preventDefault();
                            
                            if (d = 0, c[l] = {
                                    id: l,
                                    screenshot: "",
                                    stages: 0,
                                    name: a.ops.product_data.name,
                                    updated: (new Date).getTime(),
                                    product: a.ops.product_data.id,
                                    product_id: a.ops.product_data.id,
                                    product_cms: a.ops.product_data.product,
                                    printing: a.cart.printing.current,
                                    printings_cfg: a.data.printings_cfg,
                                    options: t.extend(!0, {}, a.cart.data.options),
                                    attributes: t.extend(!0, {}, a.ops.product_data.attributes),
                                    price_total: a.cart.get_price(),
                                    extra: t.extend(!0, {}, a.cart.price.extra),
                                    states_data: t.extend(!0, {}, a.cart.printing.states_data),
                                    variation: a.data.variation,
                                    template: {
                                        stages: a.cart.template,
                                        price: a.cart.price.template
                                    },
                                    system_version: a.data.version
                                }, Object.keys(a.cart.data.options).map(function(t) {
                                    i.push(a.cart.data.options[t])
                                }), Object.keys(a.data.stages).map(function(t) {
                                    void 0 !== a.data.stages[t] && void 0 !== a.data.stages[t].canvas && a.data.stages[t].canvas.getObjects().map(function(t) {
                                        1 == t.evented && d++
                                    }), c[l].stages++, "" === c[l].screenshot && (c[l].screenshot = a.data.stages[t].image)
                                }), 0 === d) return a.func.notice(a.i(96), "error"),location.reload(), delete c, delete r, !1;
                            a.data.printings.length > 0 && null === a.cart.printing.current && (void 0 !== (o = t(".designer-prints").find(".designer-cart-field-printing-tmpl").get(0)) && n.push(o), t(".designer-prints").find(".designer-cart-field-printing-tmpl .designer-required-msg").html(a.i(99))), a.cart.qty = parseInt(a.cart.qty), (isNaN(a.cart.qty) || 0 == a.cart.qty) && (a.cart.qty = 1);
                            var g = t(".designer-cart-attributes");
                            if (g.find("em.designer-required-msg").remove(), g.find(".designer-cart-param").each(function(e) {
                                    var i = t(this),
                                        o = i.attr("name");
                                    i.prop("required") && "" === this.value && -1 === s.indexOf(o) && (s.push(o), n.push(i.closest(".designer-cart-field")[0]), i.after('<em class="designer-required-msg">' + a.i(102) + "</em>").closest(".designer_form_group").shake())
                                }), n.length > 0) {
                                var f = t("#designer-cart-wrp"),
                                    m = n[0].offsetTop;
                                return f.closest("#designer-product").length > 0 ? (t('#designer-left>div.row>div.col-md-12 .designer-left-nav li[data-tab="product"]').trigger("click"), t("#designer-product").show().animate({
                                    scrollTop: m - 20
                                }, 400)) : f.animate({
                                    scrollTop: m - 20
                                }, 400), a.func.notice(a.i(179), "error", 3500), delete c, delete r, !1
                            }
                            c = a.apply_filters("cart_data", c),
                            r = a.apply_filters("cart_design", r),
                            localStorage.setItem("MYWISHLIST-DATA", JSON.stringify(c)),
                            r.id = l,
                            a.indexed.save([r], "cart"),
                            a.cart.do_wishlist(c),
                            // a.render.cart_change(),
                            // a.actions.do("add-cart", l),
                            // a.cart.checkout(c),
                            delete r,
                            delete c;
                        },
                        publishDesign:function(i){
                            // alert(total_side);alert(a.current_stage); //testing done, start from current_stages
                            if(total_side == 0) return a.func.notice(a.i(96), "error");
                            $('#publish_action').hide();
                            $('#publish_loader').show();
                            
                            var n_data = [], designed_side;
                            Object.keys(a.data.stages).map(function(t) {
                                void 0 !== a.data.stages[t] && void 0 !== a.data.stages[t].canvas && a.data.stages[t].canvas.getObjects().map(function(e) {
                                    if(1 == e.evented)
                                        designed_side = t
                                }),
                                n_data.push(a.func.generate_design_file({ type: "json" }, designed_side))
                            });
                            var s = t("#product_base").val();
                                // ,n = a.func.generate_design_file({
                                //     type: "json"
                                // });
                            // localStorage.setItem("PUBLISHER-DATA", JSON.stringify(n)), a.func.export("cart");
                            // var o = Math.random().toString(36).substr(2);
                            // a.func.doGenerate(o);
                            var r = {
                                    data: n_data,
                                    designed_side: designed_side,
                                    total_side: total_side
                                },
                                l ="/Designer/publish/"+ s;
                            
                            t.post("/publish_cart_ajax", r, function(e, a) {
                                $('#publish_action').show(),
                            $('#publish_loader').hide(),
                                 window.location.href = l
                            }), i.preventDefault()
                        },

                    }), t('#designer-left>div.row>div.col-md-12 #designer-text *[draggable="true"]').each(function() {
                        a.design.event_add_text(this)
                    }), t('#designer-left>div.row>div.col-md-12 #designer-name_number *[draggable="true"]').each(function() { //Added for name_number feature.
                        a.design.event_add_text(this)
                    });
                    var i = localStorage.getItem("LUMISE-AUTO-ALIGNMENT"),
                        s = false,
                        s1 = localStorage.getItem("LUMISE-TEMPLATE-APPEND"),
                        n = localStorage.getItem("LUMISE-REPLACE-IMAGE"),
                        o = t("#designer-auto-alignment"),
                        r = t("#designer-template-append"),
                        l = t("#designer-replace-image");
                    null === i ? localStorage.setItem("LUMISE-AUTO-ALIGNMENT", o.prop("checked")) : o.prop({
                        checked: "true" == i
                    }), null === s ? localStorage.setItem("LUMISE-TEMPLATE-APPEND", r.prop("checked")) : r.prop({
                        checked: "true" == s
                    }), null === n ? localStorage.setItem("LUMISE-REPLACE-IMAGE", l.prop("checked")) : l.prop({
                        checked: "true" == n
                    }), t(document).on("click", function(e) {
                        if (void 0 === e.isTrigger) {
                            var i = a.apply_filters("click_except", "");
                            !t(e.target).is(i) && 0 === t(e.target).closest("#designer-stage-nav").length && a.get.el("stage-nav").hasClass("stages-expand") && a.get.el("stage-nav").removeClass("stages-expand").removeClass("preview-designs");
                            var s = t(e.target);
                            "INPUT" != e.target.tagName && 0 === s.closest("div.lumise_color_picker").length && t("#lumise-color-picker-header i").click(), s.hasClass("close") || 0 === s.closest('div#designer-x-thumbn-preview,[data-prevent-click="true"]').length ? a.get.el("x-thumbn-preview").hide() : a.ops.preventClick || s.hasClass("upper-canvas") || s.hasClass("close") || !0 === a.ops.preventClick || 0 !== s.closest('div.designer-stage.canvas-wrapper,[data-view="sub"],div.lumise_color_picker,div.designer-lightbox,ul.designer-top-nav,[data-prevent-click="true"],#designer-navigations').length || (a.e.main.find("li[data-tool].active").length > 0 ? a.func.navigation("clear") : a.tools.discard()), delete a.ops.preventClick, t("iframe").each(function() {
                                this.contentWindow.postMessage({
                                    action: "parentClick"
                                }, "*")
                            })
                        }
                    }).on("keydown", function(t) {
                        if (["TEXTAREA", "INPUT"].indexOf(t.target.tagName) > -1 || t.target.getAttribute("contenteditable")) return !0;
                        if ([37, 38, 39, 40].indexOf(t.keyCode) > -1) return a.actions.do("key-move", t);
                        if (13 === t.keyCode) return a.actions.do("key-enter", t);
                        if (!0 === t.metaKey || !0 === t.ctrlKey) {
                            if (90 === t.keyCode) return !1 === t.shiftKey ? a.actions.do("ctrl-z") : a.actions.do("ctrl-shift-z");
                            if (83 === t.keyCode) return !0 === t.shiftKey ? a.actions.do("ctrl-shift-s", t) : a.actions.do("ctrl-s", t);
                            if (80 === t.keyCode) return a.actions.do("ctrl-p", t);
                            if (79 === t.keyCode) return a.actions.do("ctrl-o", t);
                            if (69 === t.keyCode) return a.actions.do("ctrl-e", t)
                        }
                        if (27 === t.keyCode) return a.actions.do("key-esc");
                        switch (t.keyCode) {
                            case 8:
                            case 46:
                                return a.actions.do("key-delete", t);
                            case 13:
                                return a.actions.do("key-enter", t);
                            case 27:
                                return a.actions.do("key-esc", t);
                            case 37:
                            case 38:
                            case 39:
                            case 40:
                                return a.actions.do("key-move", t)
                        }
                        if (!0 === t.metaKey || !0 === t.ctrlKey) switch (t.keyCode) {
                            case 48:
                                return a.actions.do("ctrl-0", t);
                            case 65:
                                return a.actions.do("ctrl-a", t);
                            case 68:
                                return a.actions.do("ctrl-d", t);
                            case 69:
                                return a.actions.do("ctrl-e", t);
                            case 79:
                                return a.actions.do("ctrl-o", t);
                            case 80:
                                return a.actions.do("ctrl-p", t);
                            case 83:
                                return !0 === t.shiftKey ? a.actions.do("ctrl-shift-s", t) : a.actions.do("ctrl-s", t);
                            case 90:
                                return !1 === t.shiftKey ? a.actions.do("ctrl-z") : a.actions.do("ctrl-shift-z");
                            case 61:
                                return a.actions.do("ctrl+", t);
                            case 173:
                                return a.actions.do("ctrl-", t);
                            case 107:
                                return a.actions.do("ctrl+", t);
                            case 109:
                                return a.actions.do("ctrl-", t);
                            case 187:
                                return a.actions.do("ctrl+", t);
                            case 189:
                                return a.actions.do("ctrl-", t)
                        }
                    }).on("mouseup", function(t) {
                        a.actions.do("globalMouseUp", t)
                    }), t("#designer-upload-form").on("drag dragstart dragend dragover dragenter dragleave drop", function(t) {
                        t.preventDefault(), t.stopPropagation()
                    }).on("dragover dragenter", function() {
                        t(this).addClass("is-dragover")
                    }).on("dragleave dragend drop", function() {
                        t(this).removeClass("is-dragover")
                    }).on("drop", function(t) {
                        a.func.process_files(t.originalEvent.dataTransfer.files)
                    }).on("click", function() {
                        t(this).find('input[type="file"]').get(0).click()
                    });
                    var c = localStorage.getItem("LUMISE_PRINT_CFG");
                    c && "" !== c && (void 0 !== (c = JSON.parse(c)).format && t('#designer-print-nav input[data-format="' + c.format + '"]').prop({
                        checked: !0
                    }).change(), void 0 !== c.unit && t('#designer-print-nav input[data-unit="' + c.unit + '"]').prop({
                        checked: !0
                    }).change(), void 0 !== c.size && t('#designer-print-nav select[name="select-size"]').val(c.size).change(), void 0 !== c.csize && t('#designer-print-nav input[name="size"]').val(c.csize).change(), void 0 !== c.orien && t('#designer-print-nav select[name="orientation"]').val(c.orien).change(), void 0 !== c.base && t('#designer-print-nav input[data-dp="base"]').prop({
                        checked: c.base
                    }), void 0 !== c.overflow && 1 != c.overflow || t('#designer-print-nav input[data-dp="overflow"]').prop({
                        checked: !0
                    }), void 0 !== c.cropmarks && t('#designer-print-nav input[data-dp="cropmarks"]').prop({
                        checked: c.cropmarks
                    }), void 0 !== c.all_pages && t('#designer-print-nav input[data-dp="all_pages"]').prop({
                        checked: c.all_pages
                    })), a.cliparts.add_events()
                },
                event_add_text: function(e) {
                    [
                        ["dragstart", function(e) {
                            a.ops.drag_start = this;
                            var i = t(this).offset();
                            a.ops.drag_start.distance = {
                                x: e.pageX - i.left - this.offsetWidth / 2,
                                y: e.pageY - i.top - this.offsetHeight / 2,
                                w: this.offsetWidth,
                                h: this.offsetHeight
                            }
                        }],
                        ["dragend", function(t) {
                            a.ops.drag_start = null
                        }],
                        ["click", function(e) {
                            var i = JSON.parse(this.getAttribute("data-ops"));
                            void 0 === window.is_first_text && (window.is_first_text = !0, t('#designer-text-tools li[data-tool="spacing"]').trigger("click")), this.getAttribute("data-act") && a.func.preset_import(i, {}, function() {
                                "text-fx" == i[0].type && a.func.update_text_fx()
                            })
                        }]
                    ].map(function(t) {
                        e.addEventListener(t[0], t[1], !1)
                    })
                },
                layers: {
                    current: null,
                    create: function(t) {
                        switch (t.type) {
                            case "text":
                                var e = a.objects.text(t.ops);
                                a.stage().canvas.add(e).setActiveObject(e).renderAll(), a.tools.set(e), a.design.layers.build();
                                break;
                            case "image":
                                a.stage().canvas.add(t.image).setActiveObject(t.image).renderAll(), a.tools.set(t.image), a.design.layers.build()
                        }
                        a.stack.save()
                    },
                    arrange: function() {
                        var e = a.stage().canvas,
                            i = e.getActiveObject();
                        if (i) {
                            var s = e.getObjects(),
                                n = s.indexOf(i),
                                o = t('#designer-top-tools li[data-tool="arrange"] button[data-arrange]');
                            void 0 !== s[n - 1] && !1 !== s[n - 1].evented ? o.filter('[data-arrange="back"]').removeClass("disabled") : o.filter('[data-arrange="back"]').addClass("disabled"), void 0 !== s[n + 1] && !1 !== s[n + 1].evented ? o.filter('[data-arrange="forward"]').removeClass("disabled") : o.filter('[data-arrange="forward"]').addClass("disabled")
                        }
                        // round_side++; if(round_side==1 && reloaded) $("#back_side").click(); if(round_side==2 && reloaded) $("#front_side").click(); // Manually Added for pricing update in share, wishlist and cart.
                    },
                    sort: function(e) {
                        var i = a.design.layers,
                            s = {
                                dragstart: function(t) {
                                    i.eldrag = this, this.setAttribute("data-holder", "true"), this.parentNode.setAttribute("data-holder", "true")
                                },
                                dragover: function(e) {
                                    if (i.elover = this, this == i.eldrag) return e.preventDefault(), !1;
                                    var a = this.getBoundingClientRect();
                                    return a.bottom - e.clientY < a.height / 2 && t(this).next().get(0) !== i.eldrag ? t(this).after(i.eldrag) : a.bottom - e.clientY > a.height / 2 && t(this).prev().get(0) !== i.eldrag && t(this).before(i.eldrag), e.preventDefault(), !1
                                },
                                dragleave: function(t) {
                                    return t.preventDefault(), !1
                                },
                                dragend: function(e) {
                                    i.eldrag.removeAttribute("data-holder"), i.eldrag.parentNode.removeAttribute("data-holder");
                                    var s = a.e.layers.find("li[data-id]"),
                                        n = a.stage().canvas.getObjects().length - 1;
                                    return s.each(function(e) {
                                        t(this).data("canvas").moveTo(n - e)
                                    }), i.build(), e.preventDefault(), !1
                                }
                            };
                        for (var n in s) e.addEventListener(n, s[n], !1)
                    },
                    item: function(t) {
                        if (!t.id) {
                            var e = new Date;
                            t.set("id", parseInt(e.getTime() / 1e3).toString(36) + ":" + Math.random().toString(36).substr(2))
                        }
                        var i = t.get("thumbn");
                        t.fill = "rgb(0,0,0)" == t.fill ? "#000" : t.fill;
                        var s = {
                                name: "",
                                thumbn: i,
                                color: t.fill ? a.func.invert(t.fill) : "#eee",
                                bgcolor: t.fill ? t.fill : "#333",
                                class: t.active ? "active" : "",
                                visible: void 0 !== t.visible && !1 === t.visible ? 'data-active="true" ' : "",
                                selectable: void 0 !== t.selectable && !1 === t.selectable ? 'data-active="true" ' : "",
                                id: t.id
                            },
                            n = t.name ? t.name : t.text ? t.text : "New layer";
                        return s.name = n.substr(0, 20).replace(/\n/g, " ").replace(/[^a-z0-9A-Z ]/g, ""), "path" == t.type && (s.name = "Drawing"), s
                    },
                    build: function() {
                        if (!a.get.el("left").find('li[data-tab="layers"]').hasClass("active")) return this.arrange();
                        var e = '<li draggable="true" class="%class%" data-id="%id%">\t\t\t\t\t\t\t%thumbn%\t\t\t\t\t\t\t<span class="layer-name" contenteditable="true" title="%name%">%name%</span> \t\t\t\t\t\t\t<span class="layer-func">\t\t\t\t\t\t\t\t<i class="lumise-icon-eye" %visible%title="' + a.i("14") + '" data-act="visible"></i>\t\t\t\t\t\t\t\t<i class="lumise-icon-lock-open" %selectable%title="' + a.i("15") + '" data-act="selectable"></i>\t\t\t\t\t\t\t\t<i class="lumise-icon-close" title="' + a.i("16") + '" data-act="delete"></i>\t\t\t\t\t\t\t</span>\t\t\t\t\t\t</li>',
                            i = a.get.el("layers>ul").html(""),
                            s = 0,
                            n = !0,
                            o = a.stage();
                        void 0 !== o && (o.canvas.getObjects().map(function(o) {
                            if (!1 === o.evented) return s++;
                            n = !1;
                            var r = a.design.layers.item(o),
                                l = e;
                            Object.keys(r).map(function(t) {
                                l = l.replace(new RegExp("%" + t + "%", "g"), r[t])
                            });
                            var c = t(l);
                            i.prepend(c.data({
                                canvas: o
                            }).on("click", function(e) {
                                e.preventDefault(), a.ops.preventClick = !0;
                                var i = e.target.getAttribute("data-act"),
                                    s = a.design.layers.event,
                                    n = a.stage(),
                                    o = t(this).data("canvas");
                                if (i && s[i]) return s[i](this, e.target);
                                if (!1 !== o.selectable) {
                                    if (t(this).hasClass("active")) return;
                                    t(this.parentNode).find("li.active").removeClass("active"), n.limit_zone.set("visible", !0), n.canvas.setActiveObject(o)
                                }
                            })), c.find("span.layer-name").on("keyup", function(e) {
                                if (t(this.parentNode).data("canvas").name = this.innerText, 13 === e.keyCode) return e.preventDefault(), a.design.layers.build(), !1
                            }), a.design.layers.sort(c.get(0))
                        }), n ? a.get.el("layers>ul").html('<h3 class="mt2" style="border:none;text-align:center">' + a.i("06") + "</h3>") : a.design.layers.arrange())
                    },
                    event: {
                        visible: function(e, i) {
                            i.setAttribute("data-active", "true" != i.getAttribute("data-active")), t(e).data("canvas").set("visible", "true" != i.getAttribute("data-active")), a.objects.do.deactiveAll()
                        },
                        selectable: function(e, i) {
                            i.setAttribute("data-active", "true" != i.getAttribute("data-active")), t(e).data("canvas").set("selectable", "true" != i.getAttribute("data-active")), a.objects.do.deactiveAll()
                        },
                        delete: function(e, i) {
                            canvas = a.stage().canvas, canvas.discardActiveGroup(), canvas.discardActiveObject(), a.stack.save(), canvas.remove(t(e).data("canvas")), a.stack.save(), a.design.layers.build()
                        }
                    }
                },
                my_designs: {
                    import: function(t) {
                        if ("object" != typeof t || 0 !== t.type.indexOf("application/json") && ".json" != t.name.substr(t.name.length - 5) && ".mytpl" != t.name.substr(t.name.length - 5)) return alert(a.i(32));
                        if (void 0 === a.cliparts.uploads[t.lastModified]) {
                            var e = new FileReader;
                            e.addEventListener("load", function() {
                                try {
                                    var t = JSON.parse(decodeURIComponent(this.result))
                                } catch (t) {
                                    return a.func.notice(t.message, "error", 3500)
                                }
                                if (void 0 === t.stages) return a.func.notice(a.i(32), "error", 3500);
                                a.tools.imports(t), delete e
                            }, !1), e.readAsText(t)
                        }
                    }
                },
                nav: {
                    callback: {
                        layers: function() {
                            a.design.layers.build()
                        },
                        textFX: function(t, e, a) {
                            e.data.textFX(t, e, a)
                        },
                        replace: function(t, e) {
                            var i = a.stage().canvas.getActiveObject();
                            i && (a.func.select_image(function(t) {
                                a.func.replace_image(t.url, i)
                            }, !1), e.preventDefault())
                        },
                        crop: function(t, e) {
                            var i = a.get.stage(),
                                s = i.active.fxOrigin ? i.active.fxOrigin.src : i.active._element ? i.active._element.src : i.active._cacheCanvas.toDataURL();
                            a.func.crop({
                                src: s,
                                width: Math.round(i.active.width),
                                save: function(t) {
                                    var e = a.get.stage(),
                                        i = t.find(".designer_crop_selArea");
                                    if (e.active) {
                                        var s = i.get(0),
                                            n = t.get(0),
                                            o = document.createElement("canvas"),
                                            r = o.getContext("2d"),
                                            l = a.func.get_type(e.active.src),
                                            c = e.active.width * (s.offsetWidth / n.offsetWidth),
                                            d = e.active.height * (s.offsetHeight / n.offsetHeight);
                                        o.width = s.offsetWidth, o.height = s.offsetHeight, r.drawImage(t.find("img.designer_crop_img").get(0), -s.offsetLeft, -s.offsetTop, n.offsetWidth, n.offsetHeight);
                                        var u = o.toDataURL("image/" + l);
                                        e.active.setSrc(u, function() {
                                            e.active.set({
                                                width: c,
                                                height: d,
                                                origin_src: u,
                                                src: u,
                                                type: "image"
                                            }), e.canvas.renderAll()
                                        })
                                    }
                                }
                            })
                        },
                        select_mask: function(e, i) {
                            var s = t(e),
                                n = a.get.stage(),
                                o = n.canvas.getObjects(),
                                r = s.find('li[data-view="list"]');
                            r.html(""), n.active && (o.map(function(t) {
                                if (!1 !== t.evented && !0 !== t.active) {
                                    var e = a.design.layers.item(t);
                                    r.append('<span data-id="' + t.id + '">' + e.thumbn.replace("%color%", "").replace("%bgcolor%", "") + " " + e.name + "</span>")
                                }
                            }), "" === r.html() ? (r.html("<p><center>" + a.i("07") + "</center></p>"), s.find("li.bttm").hide()) : (n.active && n.active.fx && n.active.fx.mask ? s.find("li.bttm").show() : s.find("li.bttm").hide(), r.find(">span").on("click", function() {
                                var e = this.getAttribute("data-id"),
                                    i = o.filter(function(t) {
                                        return t.id == e
                                    })[0];
                                if (i.left - i.width / 2 > n.active.left + n.active.width / 2 || i.left + i.width / 2 < n.active.left - n.active.width / 2 || i.top - i.height / 2 > n.active.top + n.active.height / 2 || i.top + i.height / 2 < n.active.top - n.active.height / 2) return alert(a.i("08"));
                                a.stack.save(), a.ops.importing = !0, i.setCoords();
                                var r = n.active.getBoundingRect(),
                                    l = i.getBoundingRect(),
                                    c = [];
                                delete i.clipTo, i.set({
                                    scaleX: 5 * i.scaleX,
                                    scaleY: 5 * i.scaleY
                                }), c.push(i);
                                var d = new fabric.Group(c, {}),
                                    u = {
                                        left: (l.left - r.left) / r.width,
                                        top: (l.top - r.top) / r.height,
                                        width: l.width / r.width,
                                        height: l.height / r.height,
                                        dataURL: d.toDataURL()
                                    };
                                s.find("li.bttm").show(), t(this).remove(), n.canvas.remove(i), a.func.update_image_fx("mask", u, function() {
                                    a.ops.importing = !1, a.stack.save()
                                })
                            })))
                        },
                        qrcode: function() {
                            var t = a.get.color("invert");
                            void 0 !== a.data.colors && "" !== a.data.colors && ((t = a.data.colors.split(",")[0]).indexOf(":") > -1 && (t = t.split(":")[1]), t = t.split("@")[0]), a.objects.qrcode(a.i("09"), t, function(t) {
                                a.get.el("top-tools").find('li[data-tool="qrcode-text"]').addClass("active").find("textarea").focus()
                            })
                        },
                        drawing: function(t, e) {
                            var i = a.stage().canvas,
                                s = a.get.color("invert");
                            void 0 !== a.data.colors && "" !== a.data.colors && ((s = a.data.colors.split(",")[0]).indexOf(":") > -1 && (s = s.split(":")[1]), s = s.split("@")[0]), i.isDrawingMode && (i.freeDrawingBrush.width = parseFloat(a.get.el("drawing-width").val()), i.freeDrawingBrush.color = a.get.el("drawing-color").val() ? a.get.el("drawing-color").val() : s)
                        },
                        imageFXReset: function() {
                            var t = a.get.stage();
                            if (!t.active || !t.active.fxOrigin) return a.tools.discard();
                            a.stack.save(), delete t.active.fx, t.active._element.src = t.active.fxOrigin.src, t.active._originalElement.src = t.active.fxOrigin.src, t.canvas.renderAll(), a.tools.discard()
                        },
                        designs: function() {
                            t("#designer-saved-designs p.empty").length > 0 && a.render.refresh_my_designs()
                        },
                        proceed: function(e, i) {
                            var s = a.get.el("cart-wrp").find('input[name="printing"].designer-cart-param'),
                                n = s.filter(function() {
                                    return t(this).prop("checked")
                                });
                            s.length > 0 && 0 === n.length && s.eq(0).prop({
                                checked: !0
                            }).trigger("change")
                        },
                        svg: function(t, e) {
                            if ("INPUT" == e.target.tagName && e.target.getAttribute("data-color")) {
                                var i = a.get.el("svg-fill").get(0),
                                    s = e.target.getAttribute("data-color");
                                return i.setAttribute("data-active-color", e.target.getAttribute("data-color")), i.value = s, i.style.background = s, i.style.color = a.tools.svg.invertColor(s), void a.get.el("svg-colors").addClass("active")
                            }
                            "editor" == e.target.getAttribute("data-func") && a.tools.svg.edit(), a.get.el("svg-colors").removeClass("active")
                        },
                        group: function(e, i) {
                            var s = a.stage().canvas.getActiveGroup(),
                                n = t('#designer-top-tools ul[data-mode="group"]').attr("data-grouped"),
                                o = (new Date).getTime().toString(36);
                            s && s._objects && (s._objects.map(function(t) {
                                "false" == n ? t.set({
                                    group_pos: o
                                }) : t.set({
                                    group_pos: null
                                })
                            }), t('#designer-top-tools ul[data-mode="group"]').attr({
                                "data-grouped": "false" == n ? "true" : "false"
                            })), i.preventDefault()
                        },
                        ungroup: function(t, e) {
                            a.stage().canvas.getActiveObject().set({
                                group_pos: null
                            }), t.style.display = "none"
                        }
                    },
                    load: {
                        cliparts: function() {
                            a.post({
                                action: "cliparts",
                                category: ""
                            })
                        },
                        templates: function() {
                            a.post({
                                action: "templates",
                                base_id: a.func.url_var("product", 2),
                                category: ""
                            })
                        },
                        images: function() {
                            t('#designer-uploads div[data-tab="internal"]').trigger("scroll")
                        },
                        shapes: function() {
                            t("#designer-shapes").trigger("scroll")
                        }
                    }
                }
            },
            xitems: {
                resources: {},
                load: function(t, e) {
                    this.resources[t] = {
                        url: [],
                        ops: e
                    }, a.post({
                        action: "addon",
                        component: t,
                        category: "",
                        rayid: Math.random()
                    }, function(i) {
                        "function" == typeof e.load && (i = e.load(i)), a.xitems.response(i, t)
                    })
                },
                response: function(e, i) {
                    "function" == typeof a.xitems.resources[i].ops.response && (e = a.xitems.resources[i].ops.response(e));
                    var s = "",
                        n = t("#designer-" + i + "-list");
                    if (e.items && e.items.length > 0) {
                        e.items.map(function(t) {
                            a.xitems.resources[i].url[t.id] = a.data.upload_url + t.upload, s += "<li style=\"background-image: url('" + (void 0 !== t.thumbnail_url ? t.thumbnail_url : t.screenshot) + '\')" data-ops=\'[{"type": "' + a.xitems.resources[i].ops.preview + '","component": "' + i + '","name": "' + t.name + '","id": "' + t.id + '","tags": "' + (t.tags ? t.tags : "") + '","cates": "' + (t.cates ? t.cates : "") + '","resource": "backgrounds","price": "' + t.price + '","screenshot": "' + (void 0 !== t.thumbnail_url ? t.thumbnail_url : t.screenshot) + '"}]\' class="designer-xitem"><i data-tag="' + t.id + '">' + (t.price > 0 ? a.func.price(t.price) : a.i(100)) + '</i><i data-info="' + t.id + '"></i></li>'
                        });
                        var o = e.total ? e.total : 0;
                        a.ops[i + "_q"] = e.q, a.ops[i + "_category"] = e.category, a.ops[i + "_index"] = parseInt(e.index) + e.items.length, a.ops[i + "_index"] < o && (a.ops[i + "loading"] = !1)
                    } else s += '<span class="noitems">' + a.i(42) + "</span>";
                    n.find("i.designer-spinner1").remove(), n.find("ul.designer-list-items1").append(s), a.render.categories(i, e), n.find('ul.designer-list-items li.designer-xitem:not([data-event="true"])').off("click").on("click", function(t) {
                        t.preventDefault();
                        var e = JSON.parse(this.getAttribute("data-ops"))[0];
                        e.url = a.xitems.resources[i].url[e.id], void 0 !== a.xitems.resources[i].ops && "function" == typeof a.xitems.resources[i].ops.click && a.xitems.resources[i].ops.click(e, this)
                    })
                },
                scroll_more: function(e) {
                    var i = this.getAttribute("data-component");
                    i && !0 !== a.ops[i + "loading"] && this.scrollTop + this.offsetHeight >= this.scrollHeight && (a.post({
                        action: "addon",
                        component: i,
                        category: a.ops[i + "_category"],
                        q: a.ops[i + "_q"],
                        index: a.ops[i + "_index"]
                    }, function(t) {
                        a.xitems.response(t, i)
                    }), t(this).append('<i class="designer-spinner white x3 mt1 mb1"></i>'), a.ops[i + "loading"] = !0)
                },
                search: function(t) {
                    var e = this.getAttribute("data-component");
                    "click" == t.type && setTimeout(function(t) {
                        a.ops[e + "_q"] != t.value && "" === t.value && (a.ops[e + "_q"] = t.value, a.xitems.do_search(e))
                    }, 100, this), "INPUT" == this.tagName && 13 !== t.keyCode || ("INPUT" == this.tagName && (a.ops[e + "_q"] = this.value), a.xitems.do_search(e))
                },
                do_search: function(t) {
                    a.ops[t + "_index"] = 0, a.ops[t + "loading"] = !1, a.get.el(t + "-list").find("ul").html(""), a.get.el(t + "-list").trigger("scroll")
                }
            },
            templates: {
                storage: [],
                add_events: function() {
                    var t = [
                        ["click", function(t) {
                            var e = JSON.parse(this.getAttribute("data-ops"));
                            a.templates.storage[e[0].id] && (a.templates.load({
                                upload: a.templates.storage[e[0].id],
                                id: e[0].id,
                                price: e[0].price
                            }), void 0 !== a.stage().template && (a.stage().template.loaded = !0))
                        }]
                    ];
                    a.get.el("left").find('ul.designer-list-items li.designer-template:not([data-event="true"])').each(function() {
                        if (!this.getAttribute("data-event")) {
                            this.setAttribute("data-event", !0);
                            var e = this;
                            t.map(function(t) {
                                e.addEventListener(t[0], t[1], !1)
                            })
                        }
                    })
                },
                load: function(e, i) {
                    void 0 !== e.upload && e.upload.indexOf(".mytpl") > -1 ? (0 !== e.upload.toString().trim().indexOf("http") && (e.upload = a.data.upload_url + e.upload), a.f(a.i("")), t.ajax({
                        url: e.upload,
                        method: "GET",
                        statusCode: {
                            403: a.response.statusCode[403],
                            404: function() {
                                a.func.notice(a.i(83), "error", 3500), a.f(!1)
                            },
                            200: function(t) {
                                a.templates.response(t, e, i)
                            }
                        }
                    })) : !0 !== a.ops.first_completed && (a.actions.do("first-completed"), a.ops.first_completed = !0)
                },
                external_load: function(e, i) {
                    void 0 !== e.upload && e.upload.indexOf(".mytpl") > -1 ? (0 !== e.upload.toString().trim().indexOf("http") && (e.upload = a.data.upload_url + e.upload), a.f(a.i("")), t.ajax({
                        url: e.upload,
                        method: "GET",
                        statusCode: {
                            403: a.response.statusCode[403],
                            404: function() {
                                a.func.notice(a.i(83), "error", 3500), a.f(!1)
                            },
                            200: function(t) {
                                $("#"+e.side+"_side").click();
                                a.templates.response(t, e, i)
                            }
                        }
                    })) : !0 !== a.ops.first_completed && (a.actions.do("first-completed"), a.ops.first_completed = !0)
                },
                response: function(t, e, i) {
                    try {
                        " string" != typeof t && void 0 !== t.stages || (t = JSON.parse(decodeURIComponent("string" == typeof t ? t : t.responseText)))
                    } catch (t) {
                        return console.warn(t), console.log(t), void a.f(!1)
                    }
                    if ("object" != typeof t || void 0 === t.stages || 0 === t.stages.length) return !1;
                    void 0 === t.stages.lumise && (t.stages.lumise = t.stages[Object.keys(t.stages)[0]]), "string" == typeof t.stages.lumise.data && (t.stages.lumise.data = JSON.parse(t.stages.lumise.data));
                    var s = t.stages.lumise.data.objects;
                    if (void 0 !== s)
                        for (var n in s) null !== s[n] && void 0 !== s[n].type && (s[n].price = 0, s[n].template = [e.id, isNaN(e.price) ? 0 : parseFloat(e.price)]);
                    a.cart.template[a.current_stage] = [], a.cart.price.template[a.current_stage] = 0, t.clear = e.clear, a.actions.do("template", e, t), a.tools.imports(t, function(t) {
                        if (void 0 !== t.template && void 0 !== t.template.offset && void 0 !== t.template.scale && !0 !== t.template.loaded) {
                            var e = a.stage().limit_zone,
                                s = t.template.scale / (100 / (t.data.devicePixelRatio ? t.data.devicePixelRatio : 1)) * (e.width / t.edit_zone.width),
                                n = (e.width, t.edit_zone.width, (t.edit_zone.width - t.template.offset.width) / 2 - t.template.offset.left),
                                o = (t.edit_zone.height - t.template.offset.height) / 2 - t.template.offset.top;
                            a.func.scale_designs(s, {
                                left: n,
                                top: o
                            }), t.template.loaded = !0
                        }!0 !== a.ops.first_completed && (a.actions.do("first-completed"), a.ops.first_completed = !0), "function" == typeof i && i()
                    })
                }
                
            },
            cliparts: {
                storage: [],
                uploads: [],
                add: function(e, i) {
                    if (e.getAttribute("data-ops")) {
                        a.ops.preventClick = !0, a.f(a.i("") + "..");
                        var s = "image" == (i = t.extend(JSON.parse(e.getAttribute("data-ops")), i || {})).type ? a.cliparts.storage[i.id] : a.cliparts.uploads[i.id] || {},
                            n = a.stage();
                        "shape" == i.type && (s.url = "data:image/svg+xml;base64," + btoa(e.innerHTML.trim())), s.width = s.width ? s.width : .8 * n.limit_zone.width, i.text && !i.name && (i.name = i.text.substr(0, 30)), s.url && (s.url.indexOf("data:image/svg+xml;base64,") > -1 || "svg" == s.url.split(".").pop().trim() ? i.type = "svg" : i.type = "image"), i = t.extend({
                            left: n.limit_zone.left + n.limit_zone.width / 2,
                            top: n.limit_zone.top + n.limit_zone.height / 2,
                            width: s.width,
                            name: s.name ? s.name : s.url && -1 === s.url.indexOf("data:image") ? s.url.split("/").pop() : "svg" == i.type ? "New SVG" : "New Image"
                        }, i);
                        var o = a.get.color("invert");
                        if (void 0 !== a.data.colors && "" !== a.data.colors && ((o = a.data.colors.split(",")[0]).indexOf(":") > -1 && (o = o.split(":")[1]), o = o.split("@")[0]), "i-text" == i.type) return i.fill = o, a.design.layers.create({
                            type: "text",
                            ops: i
                        }), void a.f(!1);
                        "text-fx" == i.type && (i.fill = o), fabric.Image.fromURL(s.url, function(t) {
                            a.f(!1), void 0 === i.height && (i.height = t.height * (s.width / t.width), i.clipTo = function(e) {
                                return a.objects.clipto(e, t)
                            }), t.set(i), a.design.layers.create({
                                type: "image",
                                src: s.url,
                                image: t
                            }), a.get.el("x-thumbn-preview").hide(), n.canvas.setActiveObject(t)
                        })
                    }
                },
                add_events: function() {
                    var e = [
                        ["dragstart", function(e) {
                            a.ops.drag_start = this;
                            var i = t(this).offset();
                            a.ops.drag_start.distance = {
                                x: e.pageX - i.left - this.offsetWidth / 2,
                                y: e.pageY - i.top - this.offsetHeight / 2,
                                w: this.offsetWidth,
                                h: this.offsetHeight
                            }, a.get.el("x-thumbn-preview").hide()
                        }],
                        ["dragend", function(t) {
                            a.ops.drag_start = null
                        }],
                        ["click", function(e) {
                            var i = e.target.getAttribute("data-delete");
                            if (i && confirm(a.i("sure"))) return t(this).remove(), URL.revokeObjectURL(t(e.target).parent().find("img").attr("src")), delete a.cliparts.uploads[i], a.indexed.delete(i, "uploads");
                            var s = JSON.parse(this.getAttribute("data-ops"));
                            "shape" == s[0].type ? s[0].url = "data:image/svg+xml;base64," + btoa(this.innerHTML.trim()) : void 0 === s[0].url && (s[0].url = a.cliparts.storage[s[0].id] || a.cliparts.uploads[s[0].id]), s[0].url && 0 === s[0].url.indexOf("dumb-") ? a.indexed.get(s[0].url.split("dumb-")[1], "dumb", function(t) {
                                null !== t & void 0 !== t ? (a.cliparts.uploads[s[0].id] = t[0], s[0].url = t[0], a.func.preset_import(s, {}), delete t) : a.func.notice(a.i(165))
                            }) : a.func.preset_import(s, {})
                        }]
                    ];
                    a.get.el("left").find('ul.designer-list-items li.designer-clipart:not([draggable="true"])').each(function() {
                        if (!this.getAttribute("draggable")) {
                            this.setAttribute("draggable", !0);
                            var t = this;
                            e.map(function(e) {
                                t.addEventListener(e[0], e[1], !1)
                            })
                        }
                    })
                },
                external: function(t, e) {
                    var a = new Image;
                    a.crossOrigin = "Anonymous", a.onload = function() {
                        var t = document.createElement("canvas");
                        t.width = this.naturalWidth, t.height = this.naturalHeight, t.getContext("2d").drawImage(this, 0, 0), this.callback(t), delete t
                    }, a.callback = e, a.src = t
                },
                import: function(t, e, i) {
                    var s = function() {
                        if (a.cliparts.uploads[t] = e.url, e.thumbn && "string" == typeof e.thumbn && 0 === e.thumbn.indexOf("data:image") && (e.thumbn = a.func.url2blob(e.thumbn)), !1 !== e.save) try {
                            a.indexed.save([{
                                    thumbn: e.thumbn,
                                    name: e.name,
                                    id: t
                                },
                                [e.url]
                            ], "uploads")
                        } catch (t) {}
                        var s = "<li style=\"background-image: url('" + URL.createObjectURL(e.thumbn ? e.thumbn : e.url) + '\')" \t\t\t    \t\t\t\tdata-ops=\'[{"type": "upload", "name": "' + e.name + '", "id": "' + t + '"}]\' class="designer-clipart">\t\t\t\t\t\t\t\t<i data-info="' + t + '"></i>\t\t\t\t\t\t\t\t<i class="lumise-icon-close" data-delete="' + t + '" title="' + a.i(47) + '"></i>\t\t\t\t\t\t\t</li>';
                        "prepend" == i ? a.get.el("upload-list").find("ul.designer-list-items").prepend(s) : a.get.el("upload-list").find("ul.designer-list-items").append(s), a.cliparts.add_events()
                        
                    };
                    void 0 !== e.thumbn ? s() : a.func.createThumbn({
                        source: e.url,
                        width: 300,
                        height: 240,
                        callback: function(t) {
                            e.thumbn = a.func.url2blob(t.toDataURL("image/jpeg", .3)), s()
                        }
                    })
                    var countupload_li=$('#designer-upload-list ul li').length;
                    if(countupload_li >9){
                              $("#upload_append_button").show();
                          }
                    else{
                              $("#upload_append_button").hide();
                          }
                }
            },
            actions: {
                stack: [],
                add: function(t, e, a) {
                    void 0 === a && (a = 10), void 0 === this.stack[a] && (this.stack[a] = {}), void 0 === this.stack[a][t] && (this.stack[a][t] = []), this.stack[a][t].push(e)
                },
                do: function(t, e, i) {
                    a.actions.stack.map(function(s) {
                        var n;
                        if (void 0 !== s[t]) return s[t].map(function(s) {
                            if ("function" == typeof s) try {
                                n = s(e, i)
                            } catch (e) {
                                //console.warn(e.message + " - do action " + t), console.log(e), a.func.notice(e.message + " - do action " + t, "error")
                            }
                        }), n
                    })
                }
            },
            tools: {
                set: function(e) {
                    if (e || (e = a.stage().canvas.getActiveObject()), e) {
                        var i = a.get.el;
                        
                        if (i("transparent").val(void 0 !== e.opacity && null !== e.opacity ? 100 * parseFloat(e.opacity) : 100).trigger("input"), i("rotate").val(void 0 !== e.angle ? e.angle : 0).trigger("input"), i("curved-radius").val(void 0 !== e.radius ? e.radius : 50).trigger("input"), i("curved-spacing").val(void 0 !== e.spacing ? e.spacing : 50).trigger("input"), i("font-size").val(e.fontSize ? e.fontSize : 14).trigger("input"), i("letter-spacing").val(void 0 !== e.charSpacing ? e.charSpacing : 0).trigger("input"), i("line-height").val(void 0 !== e.lineHeight ? 10 * e.lineHeight : 10).trigger("input"), "path" == e.type ? i("stroke-width").attr({
                                "data-ratio": "1"
                            }).val(void 0 !== e.strokeWidth ? e.strokeWidth : 0).trigger("input") : i("stroke-width").attr({
                                "data-ratio": "0.1"
                            }).val(void 0 !== e.strokeWidth ? 10 * e.strokeWidth : 0).trigger("input"), i("skew-x").val(void 0 !== e.skewX ? e.skewX : 0).trigger("input"), i("skew-y").val(void 0 !== e.skewY ? e.skewY : 0).trigger("input"), "path" != e.type && ("image" != e.type || "image" == e.type && "rgb(0,0,0)" != e.fill && "#000" !== e.fill && "" !== e.fill) && ("svg" != e.type || "svg" == e.type && "rgb(0,0,0)" != e.fill && "#000" !== e.fill && "" !== e.fill)) {
                            var s = a.get.color("invert");
                            void 0 !== a.data.colors && "" !== a.data.colors && ((s = a.data.colors.split(",")[0]).indexOf(":") > -1 && (s = s.split(":")[1]), s = s.split("@")[0]);
                            var n = e.fill ? e.fill : s;
                            i("fill").get(0).color && "function" == typeof i("fill").get(0).color.fromString && i("fill").get(0).color.fromString(n), i("fill").closest('li[data-tool="fill"]').css({
                                "border-bottom": ""
                            })
                        } else i("fill").val("").attr({
                            style: ""
                        }), i("fill").closest('li[data-tool="fill"]').css({
                            "border-bottom": ""
                        });
                        var o = e.stroke ? e.stroke : "";
                        i("stroke").get(0).color && "function" == typeof i("stroke").get(0).color.fromString && i("stroke").val(o).css({
                            background: ""
                        }).get(0).color.fromString(o), i("text-tools .text-format").removeClass("selected"), i("text-tools .text-format.fa fa-align-" + e.textAlign).addClass("selected"), i("text-align").attr({
                            class: "fa fa-align-" + (e.textAlign ? e.textAlign : "center")
                        }), i("curved").get(0).checked = "curvedText" === e.type, i("flip-x").get(0).checked = e.flipX, i("flip-y").get(0).checked = e.flipY, i("lock-position").get(0).checked = e.lockPosition, i("position-wrp").attr({
                            "data-lock": !0 === e.lockPosition ? "true" : "false"
                        }), i("qrcode-text").val(e.text ? e.text.trim() : "");
                        var r = i("text-tools .text-format");
                        if ([
                                ["bold", "fontWeight"],
                                ["italic", "fontStyle"],
                                ["underline", "textDecoration"]
                            ].map(function(t) {
                                e[t[1]] == t[0] && r.filter('[data-format="' + t[0] + '"]').addClass("selected")
                            }), e.fontFamily) {
                            var l = e.fontFamily.replace(/\"/g, "");
                            i("fonts").find('font[data-family="' + l + '"]').length > 0 && (i("fonts").find(".selected").removeClass("selected"), i("fonts").find('font[data-family="' + l + '"]').addClass("selected")), i("text-tools").find("button.dropdown").html("<font style=\"font-family:'" + l + "'\">" + l + "</font>")
                        }
                        switch (i("text-effect").find("img[data-effect]").attr({
                            "data-selected": null
                        }), "text-fx" == e.type ? (void 0 === e.bridge && (e.bridge = {}), i("text-fx-offsety").val(void 0 !== e.bridge.offsetY ? 100 * e.bridge.offsetY : 50).trigger("input"), i("text-fx-bottom").val(void 0 !== e.bridge.bottom ? 10 * e.bridge.bottom : 25).trigger("input"), i("text-fx-curve").val(void 0 !== e.bridge.curve ? 10 * e.bridge.curve : -25).trigger("input"), i("text-fx-trident").prop({
                            checked: e.bridge.trident
                        }), !0 === e.bridge.oblique ? i("text-effect").find('img[data-effect="oblique"]').attr({
                            "data-selected": "true"
                        }) : i("text-effect").find('img[data-effect="bridge"]').attr({
                            "data-selected": "true"
                        })) : "curvedText" == e.type ? i("text-effect").find('img[data-effect="curved"]').attr({
                            "data-selected": "true"
                        }) : "text-fx" == e.type ? i("text-effect").find('img[data-effect="normal"]').attr({
                            "data-selected": "true"
                        }) : "image" == e.type ? (i("image-fx-brightness").val(e.fx && e.fx.brightness ? e.fx.brightness : 0).trigger("input"), i("image-fx-saturation").val(e.fx && e.fx.saturation ? e.fx.saturation : 100).trigger("input"), i("image-fx-contrast").val(e.fx && e.fx.contrast ? e.fx.contrast : 0).trigger("input"), i("image-fx-deep").val(e.fx && e.fx.deep ? e.fx.deep : 0).trigger("input"), i("image-fx-mode").val(e.fx && e.fx.mode ? e.fx.mode : "light"), i("image-fx-fx").find("[data-selected]").removeAttr("data-selected"), i("image-fx-fx").find('li[data-fx="' + (e.fx && e.fx.fx ? e.fx.fx : "") + '"]').attr({
                            "data-selected": "true"
                        })) : "svg" == e.type && void 0 !== e.src && 0 === e.src.indexOf("data:image/svg+xml;base64,") && a.func.set_svg_colors(e), a.design.layers.arrange(), "image" == e.type && e._element && e._element.src.indexOf("data:image/svg+xml;base64,") > -1 && e.set("type", "svg"), a.e.tools.attr({
                            "data-view": e.type
                        }), i("top-tools").find('li[data-tool="un-group"]').css({
                            display: e.group_pos ? "inline-block" : "none"
                        }), i("text-effect").find('img[data-effect][data-selected="true"]').attr("data-effect")) {
                            case "bridge":
                            case "oblique":
                                t('[data-tool="text-effect"] li[data-func]').removeAttr("data-active"), t('[data-tool="text-effect"] li[data-func="text-fx"]').attr({
                                    "data-active": "true"
                                });
                                break;
                            case "curved":
                                t('[data-tool="text-effect"] li[data-func]').removeAttr("data-active"), t('[data-tool="text-effect"] li[data-func="curved"]').attr({
                                    "data-active": "true"
                                });
                                break;
                            default:
                                t('[data-tool="text-effect"] li[data-func]').removeAttr("data-active")
                        }
                    }
                },
                export: function(t) {
                    if (!t || !t.canvas) return null;
                    var e = t.canvas.toJSON(a.ops.export_list);
                    return e.objects.map(function(t, i) {
                        !1 === t.evented && "imagebox" != t.type ? delete e.objects[i] : delete e.objects[i].clipTo, Object.keys(t).map(function(e) {
                            void 0 !== t[e] && null !== t[e] || delete t[e]
                        }), void 0 !== t.fontFamily && void 0 === t.font && (fonts = JSON.parse(localStorage.getItem("LUMISE_FONTS")), fonts[encodeURIComponent(t.fontFamily)] && (t.font = fonts[encodeURIComponent(t.fontFamily)])), void 0 !== t.fontFamily && "string" == typeof t.font && t.font.indexOf(".woff") > -1 && -1 === t.font.indexOf("http") && (t.font = a.data.upload_url + t.font), t.fontFamily && t.fontFamily.indexOf('"') > -1 && (t.fontFamily = t.fontFamily.replace(/\"/g, "")), t.origin_src && (t.src = t.origin_src, delete t.origin_src), "text-fx" != t.type && "i-text" != t.type && "curvedText" != t.type || delete t.src, "path-group" == t.type && (t.type = "svg", delete t.paths)
                    }), e.devicePixelRatio = window.devicePixelRatio, e.product_color = a.get.color(), e.limit_zone = {}, e.product_width = t.product.width, e.product_height = t.product.height, e.screenshot = t.screenshot, ["width", "height", "top", "left"].map(function(a) {
                        e.limit_zone[a] = t.limit_zone ? t.limit_zone[a] : 0
                    }), e = a.apply_filters("export", e, t)
                },
                toImage: function(e) {
                    var a = e.stage,
                        i = 0.5; // Manual set for high quality screenshots. //void 0 !== window.devicePixelRatio ? window.devicePixelRatio : 1;
                    if (!a || !a.limit_zone) return null;
                    if ((e = t.extend({
                            is_bg: !1,
                            format: !0 !== e.is_bg ? "png" : "jpeg",
                            multiplier: i / 2,
                            top: a.limit_zone.top,
                            left: a.limit_zone.left,
                            width: a.limit_zone.width,
                            height: a.limit_zone.height
                        }, e)).multiplier = e.multiplier / i, "full" == e.is_bg ? (e.left = a.product.left - a.product.width / 2, e.top = a.product.top - a.product.height / 2, e.width = a.product.width, e.height = a.product.height) : (e.left += 1, e.top += 1, e.width -= 1, e.height -= 1), !1 === e.is_bg || a.productColor && "#dedede" == a.productColor.fill) {
                        var s = a.canvas.backgroundColor;
                        a.canvas.backgroundColor = "transparent", a.productColor && (a.productColor.visible = !1)
                    }!1 === e.is_bg && (a.product && (a.product.visible = !1), a.canvas.overlayImage && (a.canvas.overlayImage.visible = !1));
                    var n = a.limit_zone.visible;
                    a.limit_zone.visible = !1;
                    var o = a.canvas.toDataURL(e);
                    return (!1 === e.is_bg || a.productColor && "#dedede" == a.productColor.fill) && (a.canvas.backgroundColor = s, a.productColor && (a.productColor.visible = !0)), !1 === e.is_bg && (a.product && (a.product.visible = !0), a.canvas.overlayImage && (a.canvas.overlayImage.visible = !0)), a.limit_zone.visible = n, a.canvas.renderAll(), o
                },
                qrcode: function(e) {
                    "string" == typeof e && (e = {
                        text: e
                    }), e = t.extend({}, {
                        render: "canvas",
                        width: 500,
                        height: 500,
                        typeNumber: -1,
                        correctLevel: QRErrorCorrectLevel.H,
                        background: "rgba(255,255,255,0)",
                        foreground: a.get.color("invert")
                    }, e);
                    var i = new QRCode(e.typeNumber, e.correctLevel);
                    i.addData(e.text), i.make();
                    var s = document.createElement("canvas");
                    s.width = e.width + 50, s.height = e.height + 50;
                    for (var n = s.getContext("2d"), o = e.width / i.getModuleCount(), r = e.height / i.getModuleCount(), l = 0; l < i.getModuleCount(); l++)
                        for (var c = 0; c < i.getModuleCount(); c++) {
                            n.fillStyle = i.isDark(l, c) ? e.foreground : e.background;
                            var d = Math.ceil((c + 1) * o) - Math.floor(c * o),
                                u = Math.ceil((l + 1) * o) - Math.floor(l * o);
                            n.fillRect(Math.round(c * o) + 25, Math.round(l * r) + 25, d, u)
                        }
                    return s
                },
                clear: function() {
                    this.discard();
                    for (var t = a.stage().canvas, e = t.getObjects(); e.filter(function(t) {
                            return t.evented
                        }).length > 0;) e.map(function(e) {
                        !0 === e.evented && t.remove(e)
                    })
                },
                clearAll: function() {
                    var t, e;
                    Object.keys(a.data.stages).map(function(i) {
                        if (void 0 !== (t = a.data.stages[i].canvas))
                            for (e = t.getObjects(); e.filter(function(t) {
                                    return t.evented
                                }).length > 0;) e.map(function(e) {
                                !0 === e.evented && t.remove(e)
                            })
                    })
                },
                import: function(e, i) {
                    if (!e || !e.objects) return a.ops.importing = !1, i();
                    "function" != typeof i && (i = function() {}), (e = a.apply_filters("import", e)).objects = e.objects.filter(function(t) {
                        return t
                    });
                    var s = a.stage(),
                        n = s.canvas,
                        o = function(l) {
                            if (-1 === l) {
                                var c, d, u = [],
                                    p = [],
                                    g = [];
                                if (0 === t("#designer-fonts-preload").length && t("body").append('<div id="fonts-preload" style="position: fixed;opacity: 0;"></div>'), e.objects.map(function(e) {
                                        null !== e && void 0 !== e.fontFamily && "" !== e.fontFamily && "arial" != e.fontFamily.toLowerCase() && (c = decodeURIComponent(e.fontFamily.replace(/\"/g, "")), -1 === g.indexOf(c) && "arial" != c.toLowerCase() && (g.push(c), t("#fonts-preload").append("<font style=\"font-family:'" + c + "'\">abcdefghijkl<b>mnopqrx</b><u>tywxz098</u><i>7654321</i></font>"), void 0 !== e.font && -1 === e.font.indexOf("fonts.gstatic.com") && (e.font.indexOf(".woff") > -1 || 0 === e.font.indexOf("data:")) ? (p.push(c), d = e.font, e.font.indexOf(".woff") > -1 && -1 === e.font.indexOf("http") && (d = a.data.upload_url + e.font), t("head").append('<style type="text/css">@font-face {font-family:"' + c + '";src: url("' + d + '") format("woff");}</style>')) : ((void 0 === e.font || e.font.indexOf("fonts.gstatic.com") > -1) && (e.font = ["latin", "regular"]), u.push(c.replace(/ /g, "+") + ":" + e.font[1]))))
                                    }), u.length > 0 || p.length > 0) {
                                    var f = {
                                        inactive: function() {
                                            this.active()
                                        },
                                        active: function() {
                                            a.f(a.i("importing"));
                                            var t = 0,
                                                e = function() {
                                                    var a = !0;
                                                    t++, g.map(function(t) {
                                                        document.fonts.check('12px "' + t + '"') || (a = !1)
                                                    }), !1 === a && t < 20 ? setTimeout(e, 350) : setTimeout(o, 100, 0)
                                                };
                                            e()
                                        },
                                        text: "abcdefghijklmnopqrxtywxz0987654321"
                                    };
                                    return u.length > 0 && (f.google = {
                                        families: u
                                    }), p.length > 0 && (f.custom = {
                                        families: p
                                    }), WebFont.load(f)
                                }
                                l = 0
                            }
                            void 0 !== e.objects[l] ? (a.f(a.i("importing")), a.ops.importing = !0, null !== e.objects[l] ? (delete e.objects[l].clipTo, delete e.objects[l].active, e.objects[l] = t.extend({
                                stroke: "",
                                strokeWidth: 0,
                                scaleX: 1,
                                scaleY: 1,
                                angle: 0,
                                skewX: 0,
                                skewY: 0,
                                left: s.limit_zone.left + s.limit_zone.width / 2,
                                top: s.limit_zone.top + s.limit_zone.height / 2
                            }, e.objects[l]), a.objects.lumise[e.objects[l].type] ? (e.objects[l].top += yCenter, e.objects[l].left += xCenter, void 0 !== e.objects[l].src && 0 !== e.objects[l].src.indexOf("http") && 0 !== e.objects[l].src.indexOf("blob:") && 0 !== e.objects[l].src.indexOf("data:image/") && (e.objects[l].src = a.data.upload_url + e.objects[l].src), a.objects.lumise[e.objects[l].type](e.objects[l], function(t) {
                                if (null === t) return r = !0, o(l + 1);
                                n.add(t), "curvedText" == t.type && t.set("radius", t.radius), "image" == t.type && void 0 !== t.fx ? (t.fxOrigin = t._originalElement.cloneNode(!0), setTimeout(function() {
                                    a.func.image_fx(t.fxOrigin, t.fx, function(e, i) {
                                        t._element.src = e, t._originalElement.src = e, t.colors = i, t._element.onload = function() {
                                            a.f(!1), o(l + 1)
                                        }
                                    })
                                }, 1)) : o(l + 1)
                            })) : o(l + 1)) : o(l + 1)) : (n.renderAll(), a.design.layers.build(), a.ops.importing = !1, a.f(!1), "function" == typeof i && (void 0 !== e.template && (a.cart.template = e.template.stages, a.cart.price.template = e.template.price), void 0 !== e.extra && (a.cart.price.extra = e.extra), i(r)), "" !== a.func.url_var("print_download", "") && (t('li[data-tool="print"]').trigger("click"), t("#designer-print-full").prop({
                                checked: !0
                            }), t("#designer-print-base").prop({
                                checked: !1
                            }), t("#print-format-" + a.func.url_var("print_download")).prop({
                                checked: !0
                            }).change(), t('#designer-print-nav button[data-func="download"]').trigger("click"), a.func.set_url("print_download", null)))
                        },
                        r = !1;
                    if (void 0 === s.limit_zone) return i();
                    xCenter = void 0 !== e.limit_zone ? e.limit_zone.left + e.limit_zone.width / 2 : 0, yCenter = void 0 !== e.limit_zone ? e.limit_zone.top + e.limit_zone.height / 2 : 0, xCenter = 0 !== xCenter ? s.limit_zone.left + s.limit_zone.width / 2 - xCenter : 0, yCenter = 0 !== yCenter ? s.limit_zone.top + s.limit_zone.height / 2 - yCenter : 0, a.f(a.i(88)), setTimeout(o, 1, -1)
                },
                imports: function(t, e) {
                    if (!t || !t.stages) return a.func.notice(a.i(25), "error");
                    if (this.discard(), 1 === Object.keys(t.stages).length && "lumise" == Object.keys(t.stages)[0]) {
                        !1 !== t.clear && "true" != localStorage.getItem("LUMISE-TEMPLATE-APPEND") && this.clear();
                        var i = a.current_stage;
                        a.data.stages[i] && t.stages.lumise.data && ("string" == typeof t.stages.lumise.data ? a.data.stages[i].data = JSON.parse(t.stages.lumise.data) : a.data.stages[i].data = t.stages.lumise.data, a.data.stages[i].screenshot = t.stages.lumise.screenshot, a.data.stages[i].updated = t.stages.lumise.updated)
                    } else {
                        this.clearAll();
                        var s = {};
                        Object.keys(t.stages).map(function(e) {
                            "" !== t.stages[e].data && "string" == typeof t.stages[e].data && (t.stages[e].data = JSON.parse(t.stages[e].data)), e == a.current_stage ? (s[e] = a.data.stages[e], s[e].data = t.stages[e].data, s[e].screenshot = t.stages[e].screenshot, s[e].updated = t.stages[e].updated) : (s[e] = t.stages[e], s[e].stack = {
                                data: [],
                                state: !0,
                                index: 0
                            }, void 0 !== a.data.stages[e] && (s[e].src = a.data.stages[e].src, s[e].thumbnail = a.data.stages[e].thumbnail, s[e].source = a.data.stages[e].source)), void 0 !== a.data.stages[e] && void 0 === s[e].product_width && void 0 !== a.data.stages[e].product_width && (s[e].product_width = a.data.stages[e].product_width), void 0 !== a.data.stages[e] && void 0 === s[e].product_height && void 0 !== a.data.stages[e].product_height && (s[e].product_height = a.data.stages[e].product_height)
                        }), void 0 === t.system_version && Object.keys(a.data.stages).map(function(t) {
                            void 0 === s[t] && (s[t] = a.data.stages[t])
                        }), a.data.stages = s, a.render.stage_nav()
                    }
                    void 0 !== a.data.stages[a.current_stage] ? (scale = a.data.stages[a.current_stage].data.product_height ? a.data.stages[a.current_stage].product.height / a.data.stages[a.current_stage].data.product_height : 1, this.import(a.data.stages[a.current_stage].data, function() {
                        1 !== scale && a.func.scale_designs(scale), a.stack.save(), a.func.update_state(), "function" == typeof e && e(a.data.stages[a.current_stage]), delete a.data.color, delete a.data.stages[a.current_stage].data
                    })) : a.active_stage(a.render.stage_nav(), e), a.func.navigation("clear")
                },
                discard: function() {
                    if (a.stage()) {
                        var t = a.stage().canvas;
                        t.discardActiveObject(), t.discardActiveGroup(), t.renderAll()
                    }
                },
                save: function(t, e, i) {
                    !0 !== a.ops.importing && 0 !== a.get.el("main").find(".designer-stage").length && (a.func.export("designs" != t || "designs", e, i), a.actions.do("save"), t && "function" == typeof t.preventDefault && t.preventDefault())
                },
                load_font: function(e, i, s) {
                    if (document.fonts) {
                        var n = -1 === e.indexOf('"') ? '"' + e + '"' : e;
                        if (-1 === navigator.userAgent.indexOf("Firefox") && document.fonts.check("1px " + n)) document.fonts.load("1px " + n, "a").then(function() {
                            document.fonts.load("italic bold 1px " + n, "a").then(function() {
                                s(e)
                            })
                        });
                        else {
                            if ("string" == typeof i) return -1 === i.trim().indexOf("http") && 0 !== i.trim().indexOf("data:") ? i = a.data.upload_url + i : i.trim().indexOf("data:text/plain;") > -1 && (i = i.trim().replace("data:text/plain;", "data:font/truetype;charset=utf-8;")), 0 !== i.trim().indexOf("url(") && (i = "url(" + i + ")"), t("head").append('<style type="text/css">@font-face {font-family:' + n + ";src: " + i + ' format("woff2");}</style>'), void WebFont.load({
                                custom: {
                                    families: [n]
                                },
                                active: function() {
                                    s(e)
                                }
                            });
                            var o = decodeURIComponent(e).replace(/ /g, "+").replace(/\"/g, "") + ":" + i[1] + ":" + i[0];
                            WebFont.load({
                                google: {
                                    families: [o]
                                },
                                active: function() {
                                    s(e)
                                }
                            })
                        }
                    }
                },
                lightbox: function(e) {
                    var load_image='https://www.arteno.in/theme/core/assets/images/2.gif';
                    if ("close" == e) return t("#designer-lightbox").remove();
                    var a = t.extend({
                            width: 1e3,
                            footer: "",
                            content: "",
                            onload: function() {},
                            onclose: function() {}
                        }, e),
                        i = '<div id="designer-lightbox" class="designer-lightbox">\t\t\t\t\t\t\t\t<div id="designer-lightbox-body">\t\t\t\t\t\t\t\t\t<div id="designer-lightbox-content" style="min-width:' + a.width + 'px"><img src="'+load_image+'" height="100%"  alt="..." class="font_share" id="font_loader" style="display:none;"/>\t\t\t\t\t\t\t\t\t\t' + a.content + '\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t' + a.footer + '\t\t\t\t\t\t\t\t\t<a class="kalb-close" href="#close" title="Close">\t\t\t\t\t\t\t\t\t\t<i class="fa fa-times"></i>\t\t\t\t\t\t\t\t\t</a>\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t<div class="kalb-overlay"></div>\t\t\t\t\t\t\t</div>';
                    "" !== a.footer && (a.footer = '<div id="designer-lightbox-footer">' + a.footer + "</div>"), i = i.replace(/\%width\%/g, a.width).replace(/\%content\%/g, a.content).replace(/\%footer\%/g, a.footer), i = t(i), t(".designer-lightbox").remove(), t("body").append(i), a.onload(i), i.find("a.kalb-close,div.kalb-overlay").on("click", function(e) {
                        a.onclose(i), t(".designer-lightbox").remove(), e.preventDefault()
                    })
                },
                svg: {
                    rgb2hex: function(t) {
                        return null == t || "" === t || 0 === t.indexOf("#") ? t : (t = t.match(/^rgba?[\s+]?\([\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?,[\s+]?(\d+)[\s+]?/i)) && 4 === t.length ? "#" + ("0" + parseInt(t[1], 10).toString(16)).slice(-2) + ("0" + parseInt(t[2], 10).toString(16)).slice(-2) + ("0" + parseInt(t[3], 10).toString(16)).slice(-2) : ""
                    },
                    invertColor: function(t) {
                        var e = t;
                        return e = e.substring(1), e = parseInt(e, 16), "#" + ("000000" + (e = (e ^= 16777215).toString(16))).slice(-6)
                    },
                    getColors: function(t) {
                        var e = [],
                            i = [],
                            s = [];
                        t.find("[fill]").map(function() {
                            this.getAttribute("fill").indexOf("rgb") > -1 && this.setAttribute("fill", a.tools.svg.rgb2hex(this.getAttribute("fill"))), this.setAttribute("data-fill-attr-color", this.getAttribute("fill")), e.push(this.getAttribute("fill"))
                        }), t.find("[stroke]").each(function() {
                            this.setAttribute("data-stroke-attr-color", this.getAttribute("stroke")), i.push(this.getAttribute("stroke"))
                        }), t.find("[stop-color]").map(function() {
                            this.setAttribute("data-stop-attr-color", this.getAttribute("stop-color")), s.push(this.getAttribute("stop-color"))
                        }), t.find("[style]").each(function() {
                            this.style.fill && "" !== this.style.fill && (e.push(this.style.fill), this.setAttribute("data-fill-style-color", this.style.fill)), this.style.stroke && "" !== this.style.stroke && (i.push(this.style.stroke), this.setAttribute("data-stroke-style-color", this.style.stroke)), this.style.stopColor && "" !== this.style.stopColor && (s.push(this.style.stopColor), this.setAttribute("data-stop-style-color", this.style.stopColor))
                        });
                        for (var n = {}, o = 0; o < e.length; o++) - 1 === e[o].indexOf("url") && "none" != e[o] && (void 0 === n[e[o]] ? n[e[o]] = 1 : n[e[o]]++);
                        for (o = 0; o < i.length; o++) - 1 === i[o].indexOf("url") && "none" != i[o] && (void 0 === n[i[o]] ? n[i[o]] = 1 : n[i[o]]++);
                        for (o = 0; o < s.length; o++) - 1 === s[o].indexOf("url") && "none" != s[o] && (void 0 === n[s[o]] ? n[s[o]] = 1 : n[s[o]]++);
                        return Object.keys(n).sort(function(t, e) {
                            return n[t] < n[e] ? 1 : n[t] > n[e] ? -1 : 0
                        })
                    },
                    renderColors: function(e) {
                        var a = this,
                            i = this.getColors(t("#designer-svg-edit>svg")),
                            s = t('#designer-svg-tool div[data-view="current-colors"]');
                        s.html(""), i.map(function(t) {
                            s.append('<span><input type="color" data-color="' + t + '" value="' + a.rgb2hex(t) + '" style="background-color:' + t + ";color: " + t + '" /></span>')
                        }), s.find('input[type="color"]').on("input", function(e) {
                            var a = this.getAttribute("data-color"),
                                i = this.value,
                                s = t("#designer-svg-edit svg");
                            s.find('[fill][data-fill-attr-color="' + a + '"]').attr({
                                fill: i
                            }), s.find('[fill][data-stroke-attr-color="' + a + '"]').attr({
                                stroke: i
                            }), s.find('[fill][data-stop-attr-color="' + a + '"]').attr({
                                "stop-color": i
                            }), s.find('[data-fill-style-color="' + a + '"]').css({
                                fill: i
                            }), s.find('[data-stroke-style-color="' + a + '"]').css({
                                stroke: i
                            }), s.find('[data-stop-style-color="' + a + '"]').css({
                                stopColor: i
                            })
                        }), void 0 !== e && this.render_fills(e)
                    },
                    render_fills: function(e) {
                        var a = this,
                            i = e.getAttribute("fill") ? e.getAttribute("fill") : e.style.fill.replace(/\ /g, "").replace(/\"/g, ""),
                            s = e.getAttribute("stroke") ? e.getAttribute("stroke") : e.style.stroke.replace(/\ /g, "").replace(/\"/g, ""),
                            n = e.getAttribute("stroke-width") ? e.getAttribute("stroke-width") : e.style.strokeWidth.replace(/\ /g, "").replace(/\"/g, ""),
                            o = t("#designer-svg-fills-custom"),
                            r = t("#designer-svg-strokes-custom"),
                            l = t(e);
                        if (o.html(""), i.indexOf("url") > -1) {
                            var c = t(i.replace("url(", "").replace(")", ""));
                            c.find("stop").each(function(t) {
                                o.append('<span><input type="color" value="' + a.rgb2hex(this.style.stopColor) + '" data-i="' + t + '" /><small data-i="' + t + '" title="Delete">x</small></span>')
                            }), o.find("input").on("input", function(t) {
                                c.find("stop").eq(this.getAttribute("data-i")).css({
                                    stopColor: this.value
                                }), a.renderColors()
                            }), o.find("small[data-i]").on("click", function(i) {
                                c.find("stop").eq(this.getAttribute("data-i")).remove(), t(this).parent().remove(), a.renderColors(e)
                            })
                        } else if ("" !== i) o.append('<span><input type="color" value="' + (i.indexOf("rgb") > -1 ? a.rgb2hex(i) : i) + '" /><small data-i="0" title="Delete">x</small></span>'), o.find("input").on("input", function(t) {
                            l.css({
                                fill: this.value
                            }), l.removeAttr("fill"), a.renderColors()
                        }), o.find("small[data-i]").on("click", function(i) {
                            l.css({
                                fill: ""
                            }), l.removeAttr("fill"), t(this).parent().remove(), a.renderColors(e)
                        });
                        else {
                            var d = t('<a href="#">Add fill color</a>');
                            o.html("").append(d), d.on("click", function(t) {
                                l.css({
                                    fill: "#4ca722"
                                }), a.renderColors(e), t.preventDefault()
                            })
                        }
                        "" !== s ? (r.html('<input type="color" value="' + (s.indexOf("rgb") > -1 ? a.rgb2hex(s) : s) + '" /><input placeholder="Stroke width" type="range" min="0" max="50" value="' + parseFloat(n) + '" /><p><a href="#">Remove stroke</a></p>'), r.find("input").on("input", function(t) {
                            "color" === this.type ? l.css({
                                stroke: this.value
                            }) : l.css({
                                "stroke-width": this.value
                            }), a.renderColors()
                        }), r.find("a").on("click", function(t) {
                            l.css({
                                stroke: "",
                                "stroke-width": ""
                            }), a.renderColors(e), t.preventDefault()
                        })) : (d = t('<a href="#">Add stroke</a>'), r.html("").append(d), d.on("click", function(t) {
                            l.css({
                                stroke: "#4ca722",
                                "stroke-width": "1px"
                            }), a.renderColors(e), t.preventDefault()
                        }))
                    },
                    replace: function(e, a, i) {
                        void 0 !== e ? (e.find('[fill][data-fill-attr-color="' + i + '"]').attr({
                            fill: a
                        }), e.find('[fill][data-stroke-attr-color="' + i + '"]').attr({
                            stroke: a
                        }), e.find('[fill][data-stop-attr-color="' + i + '"]').attr({
                            "stop-color": a
                        }), e.find('[data-fill-style-color="' + i + '"]').css({
                            fill: a
                        }), e.find('[data-stroke-style-color="' + i + '"]').css({
                            stroke: a
                        }), e.find('[data-stop-style-color="' + i + '"]').css({
                            stopColor: a
                        })) : t("#lumise-color-picker-header i").click()
                    },
                    edit: function() {
                        var e = this,
                            i = a.stage().canvas.getActiveObject(),
                            s = atob(i.src.split("base64,")[1]);
                        t("#designer").append('<div id="designer-svg-workspace">\t\t\t\t\t\t\t<div id="designer-svg-edit">' + s.substr(s.indexOf("<svg")) + '\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t<div data-view="zoom">\t\t\t\t\t\t\t\t<i class="fa fa-search"></i> zoom <input type="range" min="100" max="300" value="100" />\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t<div id="designer-svg-tool">\t\t\t\t\t\t\t\t<ul data-view="nav">\t\t\t\t\t\t\t\t\t<li data-func="save" title="' + a.i("save") + '"><i class="fa fa-check"></i></li>\t\t\t\t\t\t\t\t\t<li data-func="reset" title="' + a.i("reset") + '"><i class="fa fa-refresh"></i></li>\t\t\t\t\t\t\t\t\t<li data-func="cancel" title="' + a.i("cancel") + '"><i class="fa fa-times"></i></li>\t\t\t\t\t\t\t\t</ul>\t\t\t\t\t\t\t\t<h3>All colors</h3>\t\t\t\t\t\t\t\t<div data-view="current-colors"></div>\t\t\t\t\t\t\t</div>\t\t\t\t\t\t</div>'), (s = t("#designer-svg-edit>svg")).attr("width") && (s.attr("data-width", s.attr("width")), s.removeAttr("width")), s.attr("height") && (s.attr("data-height", s.attr("height")), s.removeAttr("height"));
                        var n = s.width(),
                            o = s.height();
                        s.on("click", function(a) {
                            ["a", "audio", "canvas", "circle", "ellipse", "foreignObject", "g", "iframe", "image", "line", "mesh", "path", "polygon", "polyline", "rect", "svg", "switch", "symbol", "text", "textPath", "tspan", "unknown", "use", "video"].indexOf(a.target.tagName.toLowerCase()) > -1 && (0 === t('#designer-svg-tool div[data-view="customize"]').length && t('#designer-svg-tool>ul[data-view="nav"]').after('<h3>Selection</h3>\t\t\t\t\t\t\t\t\t\t<div data-view="customize">\t\t\t\t\t\t\t\t\t\t\t<label>Fill:</label>\t\t\t\t\t\t\t\t\t\t\t<div class="lumst" id="designer-svg-fills">\t\t\t\t\t\t\t\t\t\t\t\t<div id="designer-svg-fills-custom"></div>\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t<div data-view="customize">\t\t\t\t\t\t\t\t\t\t\t<label>Stroke:</label>\t\t\t\t\t\t\t\t\t\t\t<div class="lumst" id="designer-svg-strokes">\t\t\t\t\t\t\t\t\t\t\t\t<div id="designer-svg-strokes-custom"></div>\t\t\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t\t</div>'), e.render_fills(a.target))
                        }), t('#designer-svg-workspace input[type="range"]').on("input", function() {
                            s.css({
                                width: n * (this.value / 100) + "px",
                                "max-width": n * (this.value / 100) + "px",
                                height: o * (this.value / 100) + "px",
                                "max-height": o * (this.value / 100) + "px"
                            })
                        }), t("#designer-svg-tool ul li").on("click", function(i) {
                            switch (this.getAttribute("data-func")) {
                                case "save":
                                    s.removeAttr("style"), s.attr({
                                        width: s.data("width"),
                                        height: s.data("height")
                                    }), s.removeAttr("data-width"), s.removeAttr("data-height");
                                    var n = a.stage().canvas,
                                        o = n.getActiveObject(),
                                        r = e.getColors(s),
                                        l = s.parent().html(),
                                        c = "data:image/svg+xml;base64," + btoa(l);
                                    if (t("#designer-svg-workspace").remove(), null == o) return;
                                    o.set("fill", ""), o.set("src", c), o.set("origin_src", c), delete o.j_object, o.colors = r, o._element.src = c, o._originalElement.src = c, o._element.onload = function() {
                                        n.renderAll(), a.func.set_svg_colors(o)
                                    };
                                    break;
                                case "reset":
                                    t("#designer-svg-workspace").remove(), a.tools.svg.edit();
                                    break;
                                case "cancel":
                                    t("#designer-svg-workspace").remove()
                            }
                        }), this.renderColors()
                    }
                }
            },
            stack: {
                save: function() {
                    if (!0 !== a.ops.importing) {
                        var t = a.stage().stack,
                            e = a.stage().canvas,
                            i = !1;
                        e.getObjects().map(function(t) {
                            !0 === t.evented && "function" != typeof t.clipTo && (t.set("clipTo", function(e) {
                                return a.objects.clipto(e, t)
                            }), i = !0)
                        }), i && (e.renderAll(), a.design.layers.build()), t.data.length > 50 && (t.data = t.data.splice(t.data.length - 50));
                        var s = a.tools.export(a.stage());
                        s.template = {
                            stages: a.cart.template,
                            price: a.cart.price.template
                        }, (s = JSON.stringify(s)) != t.data[t.index] && (t.data.splice(t.index + 1), t.data.push(s), t.index = t.data.length - 1, a.get.el("design-redo").addClass("disabled"), t.data.length > 1 && a.get.el("design-undo").removeClass("disabled"), a.actions.do("stack:save:complete"), t.data.length > 1 ? a.tools.save() : a.ops.before_unload = null)
                    }
                },
                back: function(t) {
                    var e = a.stage().stack;
                    if (a.stage().canvas, e.index > 0) {
                        e.state = !1;
                        var i = JSON.parse(e.data[e.index - 1]);
                        a.tools.clear(), a.tools.import(i, function() {
                            a.func.update_state()
                        }), e.index--, a.get.el("design-redo").removeClass("disabled")
                    }
                    0 === e.index && a.get.el("design-undo").addClass("disabled"), t && t.preventDefault()
                },
                forward: function(t) {
                    var e = a.stage().stack;
                    if (a.stage().canvas, e.data[e.index + 1]) {
                        e.state = !1;
                        var i = JSON.parse(e.data[e.index + 1]);
                        a.tools.clear(), a.tools.import(i, function() {
                            a.func.update_state()
                        }), e.index++, a.get.el("design-undo").removeClass("disabled")
                    }
                    e.data[e.index + 1] || a.get.el("design-redo").addClass("disabled"), t && t.preventDefault()
                }
            },
            get: {
                els: {},
                color: function(e) {
                    var i = t('.designer-cart-field[data-type="product_color"]').find("li[data-color].choosed").attr("data-color");
                    return i = i ? decodeURIComponent(i) : "#dedede", "invert" != e ? i : a.func.invert(i)
                },
                color_name: function(t) {
                    var e = a.get.el("product-color").find("li[data-color].choosed");
                    return e.get(0) ? e.attr("title") : ""
                },
                scroll: function() {
                    return {
                        top: a.body.scrollTop ? a.body.scrollTop : a.html.scrollTop,
                        left: a.body.scrollLeft ? a.body.scrollLeft : a.html.scrollLeft
                    }
                },
                active: function() {
                    return a.stage().canvas.getActiveObject() || a.stage().canvas.getActiveGroup()
                },
                stage: function() {
                    return {
                        stage: a.stage(),
                        canvas: a.stage().canvas,
                        active: a.stage().canvas.getActiveObject(),
                        limit: a.stage().limit_zone
                    }
                },
                size: function() {
                    // console.log(a.stage());
                    var e = a.stage(),
                        i = a.get.el("print-nav").find('input[name="size"]').val().split("x"),
                        s = t('#designer-print-nav input[name="print-unit"]:checked').data("unit"),
                        n = a.get.el("print-nav").find('select[name="orientation"]').val(),
                        o = parseFloat(i[0].trim()),
                        r = parseFloat(i[1] ? i[1].trim() : 0);
                    if (void 0 === e.size || "" === e.size) {
                        if ("inch" == s ? (o *= 299.96190452, r *= 299.96190452) : "cm" == s && (o *= 118.095238, r *= 118.095238), "" === i[0] || void 0 === i[1] || "" === i[1]) return a.get.el("print-nav").find('input[name="size"]').focus(), alert(a.i(35))
                    } else "string" == typeof e.size ? (Object.keys(a.data.size_default).map(function(t) {
                        a.data.size_default[t].cm == e.size && (i = a.data.size_default[t].px.split("x"))
                    }), o = parseFloat(i[0].trim()), r = parseFloat(i[1] ? i[1].trim() : 0)) : "object" == typeof e.size && (o = parseFloat(e.size.width), r = parseFloat(e.size.height), "inch" == e.size.unit ? (o *= 299.96190452, r *= 299.96190452) : "cm" == e.size.unit && (o *= 118.095238, r *= 118.095238));
                    return {
                        o: n,
                        w: o,
                        h: r
                    }
                },
                el: function(e) {
                    var d_key = "#designer-"; 
                    // if(e == "saved-designs" || e == "print-nav" || e == "shares-wrp" || e == "cart-attributes" || e=="templates-list" || e =="left" || e =="x-thumbn-preview" || e =="cliparts-list" || e =="cliparts" || e =="upload-list" || e == "drawing-width" || e =="drawing-color" || e == "bug" || e == "general-status"  || e == "svg-colors" || e == "top-tools" || e == "svg-fill" || e == "fill" || e=="image-fx-contrast" || e =="image-fx-saturation" || e =="image-fx-brightness" || e == "discard-drawing"  || e == "stroke-width" || e =="stroke" || e =="position-wrp" || e == "fonts" || e == "text-effect" || e == "text-align" || e == "zoom" || e == "notices" || e == "stage-nav" || e == "product"  || e == "cart-options" || e == "addToCart" || e == "cart-items" || e =="cart-wrp" || e == "proceed" || e == "cart-action" || e == "main" || e == "stage-" || e == "no-product" || e == "change-product" || e == "product-color")
                        // d_key = "#designer-";
                    // if(e == "fonts")
                    //     d_key = "#lumise-";
                    if (!a.get.els[e]) {
                        if (!(t(d_key + e).length > 0)) return t(d_key + e);
                        a.get.els[e] = t(d_key + e)
                    }
                    return a.get.els[e]
                }
            },
            func: {
                doGenerate: function(e) {
                    var i = 0;
                    if (Object.keys(a.data.stages).map(function(t) {
                            void 0 !== a.data.stages[t] && void 0 !== a.data.stages[t].canvas && a.data.stages[t].canvas.getObjects().map(function(t) {
                                1 == t.evented && i++
                            })
                        }), 0 === i) return a.func.notice(a.i(96), "error"), !1;
                    var s = t("#designer-shares-wrp"),
                        n = {
                            data: a.func.export("share"),
                            product: a.func.url_var("product", ""),
                            product_cms: a.func.url_var("product_cms", ""),
                            label: "temp-" + Math.random().toString(36).substr(2),
                            aid: a.func.get_cookie("lumise-AID"),
                            share_id: e,
                            action: "upload_share_design"
                        };
                    n.screenshot = btoa(encodeURIComponent(n.data.stages[Object.keys(n.data.stages)[0]].screenshot)), Object.keys(n.data.stages).map(function(t) {
                        n.data.stages[t].screenshot = ""
                    }), n.data = btoa(encodeURIComponent(JSON.stringify(n.data))), a.post(n, function(t) {
                        if (t = JSON.parse(t), s.removeAttr("data-process").find(".designer-notice").remove(), 0 !== t.success) {
                            s.attr({
                                "data-phase": "2"
                            });
                            var e = "";
                            return e.indexOf("?") > -1 ? e += "&" : e += "?", e += "product=" + t.product, null !== t.product_cms && "" !== t.product_cms && (e += "&product_cms=" + t.product_cms), (e += "&share=" + t.id).replace("?&", "")
                        }
                        s.find('li[data-view="link"]').prepend('<p class="notice error mb1" data-phase="1">' + t.message + "</p>")
                    })
                },
                version_compare: function(t, e) {
                    if (void 0 === t || void 0 === e) return 0;
                    for (var a = t.split("."), i = e.split("."), s = 0; s < 3; s++) {
                        var n = Number(a[s]),
                            o = Number(i[s]);
                        if (n > o) return 1;
                        if (o > n) return -1;
                        if (!isNaN(n) && isNaN(o)) return 1;
                        if (isNaN(n) && !isNaN(o)) return -1
                    }
                    return 0
                },
                invert: function(t) {
                    var e, a, i;
                    if (t.indexOf("rgb") > -1) t = t.split(","), e = parseInt(t[0].trim()), a = parseInt(t[1].trim()), i = parseInt(t[2].trim());
                    else {
                        t.length < 6 && (t += t.replace("#", ""));
                        var s = "#" == t.charAt(0) ? t.substring(1, 7) : t.substring(0, 6);
                        e = parseInt(s.substring(0, 2), 16) / 255 * .213, a = parseInt(s.substring(2, 4), 16) / 255 * .715, i = parseInt(s.substring(4, 6), 16) / 255 * .072
                    }
                    return e + a + i < .5 ? "#DDD" : "#333"
                },
                reversePortView: function(t) {
                    var e = a.get.el("stage-" + a.current_stage).get(0);
                    if (void 0 !== e) {
                        var i = a.stage(),
                            s = i.canvas,
                            n = s.viewportTransform,
                            o = a.get.el("zoom").val() / 100,
                            r = (e.offsetWidth, e.offsetHeight, i.product.width * o),
                            l = i.product.height * o,
                            c = (i.product.left - i.product.width / 2) * o,
                            d = (i.product.top - i.product.height / 2) * o,
                            u = e.offsetWidth,
                            p = e.offsetHeight,
                            g = {
                                x: n[4] > 0 ? 0 : n[4] > -c && r > u ? 0 : n[4] < -(s.width * n[0] - s.width) ? -(s.width * n[0] - s.width) : n[4],
                                y: n[5] > 0 ? 0 : n[5] > -d && l > p ? 0 : n[5] < -(s.height * n[0] - s.height) ? -(s.height * n[0] - s.height) : n[5]
                            };
                        return g.x == n[4] && g.y == n[5] || (!1 === t && (n[5] = g.y, s.set("viewportTransform", n), s.renderAll()), !1)
                    }
                },
                onZoomThumnMove: function(t) {
                    var e = a.get.el("zoom").val() / 100,
                        i = a.get.el("main").get(0),
                        s = new fabric.Point(-t.movementX * (i.offsetWidth * e / 100), -t.movementY * (i.offsetHeight * e / 100));
                    a.stage().canvas.relativePan(s), a.func.reversePortView(!1)
                },
                notice: function(t, e, i) {
                    var s = "bulb";
                    switch (e) {
                        case "success":
                            s = "done";
                            break;
                        case "error":
                            s = "close"
                    }
                    var n = a.get.el("notices");
                    clearTimeout(a.ops.notice_timer), n.data("working") ? n.stop().append('<span data-type="' + e + '" style="background:#111;color:#dbb258;border:1px solid #111;"><i class="fa fa-' + s + '"></i> ' + t + "</span>").animate({
                        opacity: 1,
                        top: 55
                    }, 250) : n.data({
                        working: !0
                    }).stop().html('<span data-type="' + e + '" style="background:#111;color:#dbb258;border:1px solid #111;"><i class="fa fa-' + s + '"></i> ' + t + "</span>").css({
                        opacity: 0,
                        top: 0,
                        display: "block"
                    }).animate({
                        opacity: 1,
                        top: 55
                    }, 250), a.ops.notice_timer = setTimeout(function() {
                        n.animate({
                            top: 0,
                            opacity: 0
                        }, 250, function() {
                            this.style.display = "none", n.data({
                                working: !1
                            })
                        })
                    }, i || 1500, n)
                },
                bridgeText: function(t, e) {
                    e || (e = {
                        curve: -2.5,
                        offsetY: .4,
                        bottom: 2.5,
                        trident: !1,
                        oblique: !1
                    }), a.get.stage();
                    var i, s = t.width,
                        n = 2.5 * t.height,
                        o = void 0 !== e.curve ? e.curve / 2 * t.height : -.3 * t.height,
                        r = void 0 !== e.offsetY ? e.offsetY * t.height : .5 * t.height,
                        l = void 0 !== e.bottom ? e.bottom * t.height : .2 * t.height,
                        c = void 0 !== e.trident && e.trident,
                        d = s,
                        u = 0,
                        p = (!0 === e.oblique ? 45 : 180) / s;
                    for (!0 === e.oblique && (c = !1), void 0 === a.ops.brid && (a.ops.brid = document.createElement("canvas"), a.ops.bctx = a.ops.brid.getContext("2d")), a.ops.brid.width = s, a.ops.brid.height = n, a.ops.bctx.clearRect(0, 0, s, n), c ? (u = l, (i = o / (.25 * n)) * s * .5 > l && (i = l / (.5 * s))) : e.oblique ? o > l + .25 * n && (o = l + .25 * n) : o > l && (o = l); d-- > 0;) c ? d > .5 * s ? u -= i : u += i : u = l - o * Math.sin(d * p * Math.PI / 180), a.ops.bctx.drawImage(t, d, 0, 1, n, d, .5 * n - r / n * u, 1, u);
                    return a.ops.brid.toDataURL()
                },
                update_text_fx: function() {
                    var t = a.get.stage();
                    if (t.active) {
                        a.f("");
                        var e = t.active.toObject(a.ops.export_list);
                        delete e.type;
                        var i = a.objects.text(e);
                        e.width = i.width, e.height = i.height, a.objects.lumise["text-fx"](e, a.func.switch_type)
                    }
                },
                image_fx: function(e, i, s) {
                    if (i && i.mask && i.mask.dataURL && (void 0 === i.mask.image || void 0 === i.mask.image.src)) return i.mask.image = new Image, i.mask.image.onload = function() {
                        a.func.image_fx(e, i, s)
                    }, 0 !== i.mask.dataURL.indexOf("http") && 0 !== i.mask.dataURL.indexOf("data:image/") && (i.mask.dataURL = a.data.upload_url + i.mask.dataURL), i.mask.image.src = i.mask.dataURL;
                    var n = t.extend({
                        fx: "",
                        brightness: 0,
                        saturation: 100,
                        contrast: 0,
                        deep: 0,
                        mode: "light",
                        mask: null
                    }, i);
                    0 !== n.brightness && (n.brightness /= 2), a.ops.imageFXcanvas || (a.ops.imageFXcanvas = document.createElement("canvas"), a.ops.fxctx = a.ops.imageFXcanvas.getContext("2d"));
                    var o = a.ops.imageFXcanvas,
                        r = a.ops.fxctx,
                        l = e.width,
                        c = e.height;
                    o.width = l, o.height = c, r.clearRect(0, 0, l, c), null !== n.mask && n.mask.image && (r.drawImage(n.mask.image, n.mask.left * l, n.mask.top * c, n.mask.width * l, n.mask.height * c), r.globalCompositeOperation = "source-in"), r.drawImage(e, 0, 0, l, c), i && i.crop && (r.clearRect(0, 0, l, c * i.crop.top), r.clearRect(0, 0, l * i.crop.left, c), r.clearRect(l * i.crop.left + l * i.crop.width, 0, l, c), r.clearRect(0, c * i.crop.top + c * i.crop.height, l, c));
                    var d, u, p, g, f, m = r.getImageData(0, 0, l, c),
                        h = m.data;
                    "" !== n.fx && lumise_fx_map[n.fx] && (n.fx = lumise_fx_map[n.fx]());
                    for (var v = 0; v < h.length; v += 4) "object" == typeof n.fx && (h[v] = n.fx.r[h[v]], h[v + 1] = n.fx.g[h[v + 1]], h[v + 2] = n.fx.b[h[v + 2]]), f = .4 * (h[v] + n.brightness) + .4 * (h[v + 1] + n.brightness) + .2 * (h[v + 2] + n.brightness), d = (f *= 1 - n.saturation / 100) + h[v] * (n.saturation / 100) + n.brightness, u = f + h[v + 1] * (n.saturation / 100) + n.brightness, p = f + h[v + 2] * (n.saturation / 100) + n.brightness, 0 != n.contrast && (d = (d = (d = 255 * (((d /= 255) - .5) * (g = 1 + .01 * n.contrast) + .5)) > 255 ? 255 : d) < 0 ? 0 : d, u = (u = (u = 255 * (((u /= 255) - .5) * g + .5)) > 255 ? 255 : u) < 0 ? 0 : u, p = (p = (p = 255 * (((p /= 255) - .5) * g + .5)) > 255 ? 255 : p) < 0 ? 0 : p), h[v] = d, h[v + 1] = u, h[v + 2] = p, n.deep > 0 && ("dark" != n.mode ? 255 - d < n.deep && 255 - u < n.deep && 255 - p < n.deep && (h[v + 3] = ((255 - d) / n.deep + (255 - u) / n.deep + (255 - p) / n.deep) / 3, h[v + 3] = h[v + 3] > 0 ? 100 * h[v + 3] : 0) : d < n.deep && u < n.deep && p < n.deep && (h[v + 3] = (d / n.deep + u / n.deep + p / n.deep) / 3, h[v + 3] = h[v + 3] > 0 ? 100 * h[v + 3] : 0));
                    return r.putImageData(m, 0, 0), s(o.toDataURL(), a.func.count_colors(o, !0))
                },
                update_image_fx: function(t, e, i) {
                    var s = a.get.stage();
                    s.active && (a.f(""), clearTimeout(a.ops.update_image_fx_timer), a.ops.update_image_fx_timer = setTimeout(function() {
                        s.active.fxOrigin && s.active.fxOrigin.tagName || (s.active.fxOrigin = s.active._originalElement.cloneNode(!0)), void 0 !== s.active.fx && null !== s.active.fx || (s.active.fx = {}), void 0 !== t && (s.active.fx[t] = e), a.func.image_fx(s.active.fxOrigin, s.active.fx, function(t, e) {
                            s.active._element.src = t, s.active._originalElement.src = t, s.active.colors = e, s.active._element.onload = function() {
                                s.canvas.renderAll(), a.f(!1), "function" == typeof i && i()
                            }
                        })
                    }, 1))
                },
                fill_svg: function(e, a) {
                    if (-1 === e.toString().indexOf("data:image/svg+xml;base64,")) return e;
                    var i = atob(e.split(",")[1]),
                        s = t("<span>" + i.substr(i.indexOf("<svg")) + "</span>");
                    return a && "" !== a && s.find("svg,path").attr({
                        fill: a
                    }), i = "data:image/svg+xml;base64," + btoa(s.html()), delete s, i
                },
                product_color: function(t) {
                    void 0 !== t && "" !== t || (t = "#dedede");
                    var e = a.stage();
                    if (e.limit_zone) {
                        var i = a.func.invert(t);
                        e.limit_zone.set("stroke", i), e.productColor.set("fill", t), e.canvas.renderAll(), Object.keys(a.data.stages).map(function(e) {
                            e != a.current_stage && void 0 !== a.data.stages[e].canvas && (a.data.stages[e].productColor.set("fill", t), a.data.stages[e].canvas.renderAll())
                        }), a.tools.save()
                    }
                    a.actions.do("product-color", t)
                },
                set_svg_colors: function(e) {
                    if (void 0 === e.j_object) {
                        var i = e.src.split("base64,")[1];
                        i = (i = atob(i)).substr(i.indexOf("<svg")), e.j_object = t("<div>" + i + "</div>")
                    }
                    var s = (a.get.el("svg-colors").parent().width() - 180) / 33,
                        n = a.tools.svg.getColors(e.j_object),
                        o = n.length;
                    s < 6 ? s = 6 : s > 15 && (s = 15), 0 === o && (e.j_object.find("svg>*").css({
                        fill: "#000000"
                    }), n = a.tools.svg.getColors(e.j_object)), e.colors = n.slice(), n.splice(s), a.get.el("svg-colors").find(">span").remove(), n.map(function(t) {
                        a.get.el("svg-colors").append('<span data-view="noicon" data-color="' + t + '"><input type="text" data-color="' + t + '" readonly value="" style="background:' + t + '" /></span>')
                    }), o > n.length && a.get.el("svg-colors").append('<span data-view="more">+' + (o - n.length) + "</span>"), a.get.el("svg-colors").append('<span data-view="btn" data-tip="true"><i class="fa fa-magic" data-func="editor"></i><span>' + a.i(138) + "</span></span>")
                },
                switch_type: function(t) {
                    var e = a.get.stage();
                    if (null !== t) {
                        a.ops.importing = !0;
                        var i = e.canvas.getObjects().indexOf(e.active);
                        e.canvas.remove(e.active), e.canvas.add(t), t.moveTo(i), e.canvas.setActiveObject(t).renderAll(), a.get.el("top-tools").attr({
                            "data-view": t.type
                        }), a.design.layers.build(), a.ops.importing = !1
                    } else alert(a.i(19));
                    a.f(!1)
                },
                generate_design_file: function(e, designing_stage="front") {
                    var i = a.stage();
                    i.canvas, i.product.width, i.product.height, i.product.top, i.product.height, i.product.left, i.product.width, a.data.prefix_file, a.func.slugify(t("#designer-product header name t").text()), a.current_stage, a.get.el("zoom").val(100).trigger("input");
                    var s = {
                            stages: {},
                            type: a.data.type,
                            updated: (new Date).getTime() / 1e3,
                            name: a.data.name
                        },
                        n = [];
                    return a.get.el("stage-nav").find("li[data-stage]").each(function() {
                        var t = this.getAttribute("data-stage"),
                            e = a.data.stages[t];
                        if(t==designing_stage) {
                            e.canvas ? (s.stages.lumise = {
                                data: a.tools.export(e),
                                screenshot: a.tools.toImage({
                                    stage: e
                                }),
                                edit_zone: e.edit_zone,
                                image: e.image,
                                overlay: e.overlay,
                                updated: s.updated
                            }, n.push(t)) : e.data && (s.stages.lumise = {
                                data: e.data,
                                screenshot: "",
                                edit_zone: "",
                                image: "",
                                overlay: e.overlay,
                                updated: e.data.updated
                            }, n.push(t))
                        }
                    }), atob(a.func.enjson(s))
                },
                blob1: function(t) {
                    return t
                },
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
                                t != u && (i = i / t * u, t = u), i > d && (t = t / i * d, i = d), b.drawImage(this, (u - t) / 2, (d - i) / 2, t, i), a.f(""), e.callback(v.toDataURL())
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
                                i > u && (t *= u / i, i = u), t > d && (i *= d / t, t = d), b.drawImage(this, -i / 2, -t / 2, i, t), b.rotate(-Math.PI / 2), b.translate(-v.width / 2, -v.height / 2), a.f(""), e.callback(v.toDataURL())
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
                            a.f(""), A(0);
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
                export_svg: function(e, i) {
                    var s = (r = a.stage()).canvas,
                        n = [];
                    if (void 0 === i && (i = !1), void 0 !== e && !1 === e) {
                        r.productColor.set("visible", !1), r.product.set("visible", !1);
                        var o = s.backgroundColor;
                        s.backgroundColor = "rgba(0,0,0,0)"
                    }
                    var r, l = t("<div>" + s.toSVG() + "</div>"),
                        c = s.getObjects(),
                        d = [],
                        u = l.find("svg"),
                        p = r.limit_zone,
                        g = t("#designer-print-overflow").prop("checked"),
                        f = c.filter(function(t) {
                            return "imagebox" == t.type
                        }).length > 0,
                        m = a.stage().edit_zone.radius,
                        h = function(t) {
                            for (var e = "", a = 0; a < t.length; a++) e += "&#x" + ("000" + t[a].charCodeAt(0).toString(16)).substr(-4) + ";";
                            return e
                        };
                    if (void 0 !== e && !1 === e && (r.productColor.set("visible", !0), r.product.set("visible", !0), s.backgroundColor = o), l.find("tspan").each(function() {
                            this.innerHTML = "\x3c!--lmstart--\x3e" + h(this.innerHTML) + "\x3c!--lmend--\x3e"
                        }), l.find("text").each(function() {
                            var t = this.parentNode.getAttribute("id"),
                                e = c.filter(function(e) {
                                    return e.id == t
                                });
                            e.length > 0 && e[0].charSpacing > 0 && this.setAttribute("letter-spacing", .001 * e[0].charSpacing + "em"), this.setAttribute("font-family", this.getAttribute("font-family").replace(/\'/g, ""));
                            var a = this.getAttribute("style") + "paint-order: stroke;";
                            this.setAttribute("style", a)
                        }), 0 === l.find("defs").length && l.find("svg").append("<defs></defs>"), !0 !== f) {
                        var v = t("<g" + (!0 === g ? ' clip-path="url(#limit-zone-path)"' : "") + "></g>");
                        u.append(v), u.find("defs").append('<clipPath id="limit-zone-path">\t\t\t\t\t\t\t<rect x="' + p.left + '" y="' + p.top + '" rx="' + m + '" ry="' + m + '" width="' + p.width + '" height="' + p.height + '" />\t\t\t\t\t\t</clipPath>')
                    }
                    c.map(function(t) {
                        var e = "";
                        if (t && t.evented && void 0 !== t.fontFamily && "" !== t.fontFamily && "object" == typeof t.font && 2 === t.font.length && -1 === d.indexOf(t.fontFamily.replace(/\"/g, "")) && (e = t.fontFamily.replace(/\"/g, ""), d.push(e)), void 0 !== t.fontFamily && "" !== t.fontFamily && "string" == typeof t.font && 0 === t.font.indexOf("data:text/plain;base64")) {
                            var a = t.font.replace("data:text/plain;base64,", "data:font/truetype;charset=utf-8;base64,");
                            e = t.fontFamily.replace(/\"/g, ""), l.find("defs").append('<style type="text/css">@font-face {font-family: \'' + e + "';src: url(" + a + ") format('woff2');}</style>")
                        }
                        if ("imagebox" == t.type) {
                            var i = l.find("#" + t.id),
                                s = c.filter(function(e) {
                                    return void 0 !== e.imagebox && e.imagebox == t.id
                                });
                            if (s.length > 0) {
                                var o = i.parent().attr("transform").split("(")[1].split(")")[0].split(" "),
                                    r = l.find("#" + s[0].id).parent().attr("transform").split("(")[1].split(")")[0].split(" ");
                                l.find("defs").append('<clipPath id="imagebox-' + t.id + '">\t\t\t\t\t\t\t\t\t<rect transform="translate(' + (parseFloat(o[0]) - parseFloat(r[0])) + " " + (parseFloat(o[1]) - parseFloat(r[1])) + ')" x="' + i.attr("x") + '" y="' + i.attr("y") + '" rx="0" ry="0" width="' + t.width + '" height="' + t.height + '" />\t\t\t\t\t\t\t\t</clipPath>'), l.find("#" + s[0].id).parent().get(0).setAttribute("clip-path", "url(#imagebox-" + t.id + ")")
                            }
                            "g" == i.parent().get(0).tagName ? i.parent().remove() : i.remove()
                        }
                        t && t.evented && !f && v.append("g" == l.find("#" + t.id).parent().get(0).tagName ? l.find("#" + t.id).parent() : l.find("#" + t.id)), "" !== e && -1 === n.indexOf(e) && n.push(e)
                    }), d.length > 0 && l.find("defs").append('<style type="text/css">@import url(\'http://fonts.googleapis.com/css?family=' + d.join("|") + "');</style>"), l.find("desc").html("Created with Product Designer Tool (https://www.arteno.in)"), l.find("image").each(function() {
                        var t = this.getAttribute("xlink:href");
                        if (0 === t.indexOf("http")) {
                            var e = this.getAttribute("id"),
                                i = document.createElement("canvas"),
                                s = i.getContext("2d"),
                                n = a.stage().canvas.getObjects().filter(function(t) {
                                    return t.id == e
                                });
                            if (0 === n.length && t == a.stage().product._element.src && (n = [a.stage().product]), 0 === n.length) return;
                            var o = n[0]._element;
                            i.width = o.width, i.height = o.height, s.drawImage(o, 0, 0, o.width, o.height), this.setAttribute("xlink:href", i.toDataURL("image/" + (t.indexOf(".png") ? "png" : "jpeg")))
                        }
                    }), (r = a.stage()).canvas.getObjects().filter(function(t) {
                        return "svg" == t.type
                    }).map(function(e, a) {
                        var i = l.find('image[id="' + e.id + '"]'),
                            s = t("<div>" + atob(e.src.split(",")[1]) + "</div>").find("svg").get(0),
                            n = s.getAttribute("viewBox") ? s.getAttribute("viewBox") : s.getAttribute("viewbox");
                        n = n.replace(/\,/g, " ").replace(/  /g, " ").split(" "), s.getAttribute("width") || s.setAttribute("width", n[2]), s.getAttribute("height") || s.setAttribute("height", n[3]);
                        var o = parseFloat(n[0]),
                            r = parseFloat(n[1]),
                            c = (parseFloat(s.getAttribute("width").toString().replace(/[^0-9.\-]/g, "")), parseFloat(s.getAttribute("height").toString().replace(/[^0-9.\-]/g, "")), e.width / parseFloat(n[2])),
                            d = e.height / parseFloat(n[3]),
                            u = '<g transform="translate(-' + (e.width / 2 + o * c) + " -" + (e.height / 2 + r * d) + ") scale(" + c + " " + d + ')">';
                        t.each(s.attributes, function() {
                            0 !== this.name.indexOf("xmlns:") || l.find("svg").attr(this.name) || l.find("svg").attr(this.name, this.value)
                        }), t(s).find("[stroke-width]").each(function() {
                            this.setAttribute("stroke-width", parseFloat(this.getAttribute("stroke-width") * c))
                        }), u += s.innerHTML + "</g>", i.after(u), i.remove()
                    }), void 0 !== e && !1 === e ? (u.attr({
                        width: 800,
                        height: p.height * (800 / p.width)
                    }), u.get(0).setAttribute("viewBox", p.left + " " + p.top + " " + p.width + " " + p.height)) : void 0 !== e && !0 === e && (u.attr({
                        width: r.product.width,
                        height: r.product.height
                    }), u.get(0).setAttribute("viewBox", r.product.left - r.product.width / 2 + " " + (r.product.top - r.product.height / 2) + " " + r.product.width + " " + r.product.height)), i && (u.removeAttr("width"), u.removeAttr("height"));
                    var b = l.html();
                    return (b = b.split("\x3c!--lmstart--\x3e")).map(function(t, e) {
                        e > 0 && t.indexOf("\x3c!--lmend--\x3e") > -1 && ((t = t.split("\x3c!--lmend--\x3e"))[0] = h(t[0]), b[e] = t.join(""))
                    }), b = b.join("").replace(/gradienttransform/g, "gradientTransform").replace(/gradientunits/g, "gradientUnits").replace(/lineargradient/g, "linearGradient").replace(/radialgradient/g, "radialGradient").replace(/\<\/clippath\>/g, "</clipPath>").replace(/\<clippath\ /g, "<clipPath ").replace(/\>\<\/stop\>/g, "/>"), !1 === i ? b : [b, n]
                },
                dataURL2Blob: function(t, e) {
                    e(this.url2blob(t))
                },
                process_files: function(e, i, s) {
                    var n, o = {};
                    for (f in e) {
                        if ("object" != typeof e[f]) return;
                        if (0 !== e[f].type.indexOf("image/")) return a.func.notice(a.i("148"), "error", 5e3);
                        n = e[f], o[f] = new FileReader, o[f].f = f, o[f].file = n, o[f].addEventListener("load", function() {
                            if (a.func.check_upload_size(o[this.f].file)) {
                                var e = parseInt(o[this.f].file.lastModified / 1e3).toString(36);
                                e = parseInt((new Date).getTime() / 1e3).toString(36) + "-" + e;
                                var n = this.result,
                                    r = {
                                        url: n,
                                        type: o[this.f].file.type,
                                        size: o[this.f].file.size,
                                        name: o[this.f].file.name.replace(/[^0-9a-zA-Z\.\-\_]/g, "").trim().replace(/\ /g, "+")
                                    };
                                if (0 === n.indexOf("data:image/svg+xml;base64,")) {
                                    var l = t("<div>" + atob(n.split("base64,")[1]).replace("viewbox=", "viewBox=") + "</div>"),
                                        c = l.find("svg").get(0),
                                        d = c.getAttribute("viewBox") ? c.getAttribute("viewBox") : c.getAttribute("viewbox");
                                    d = d.replace(/\,/g, " ").replace(/  /g, " ").split(" "), c.getAttribute("width") || c.setAttribute("width", d[2]), c.getAttribute("height") || c.setAttribute("height", d[3]), l.find("[id]").each(function() {
                                        this.id = this.id.replace(/[\u{0080}-\u{FFFF}]/gu, "")
                                    }), r.url = "data:image/svg+xml;base64," + btoa(l.html()), !1 !== s && new a.cliparts.import(e, r, "prepend")
                                } else !1 !== s && new a.cliparts.import(e, r, "prepend");
                                "function" == typeof i && i(r), delete o[this.f]
                            } else delete o[this.f]
                        }, !1), o[f].readAsDataURL(n)
                    }
                },
                select_image: function(t, e) {
                    var i = a.ops;
                    void 0 === i.image_inp && (i.image_inp = document.createElement("input"), i.image_inp.type = "file", i.image_inp.accept = ".jpg,.png,.jpeg,.svg", i.image_inp.onchange = function() {
                        a.func.process_files(this.files, this.callback, this.saveas)
                    }), i.image_inp.type = "text", i.image_inp.value = "", i.image_inp.type = "file", i.image_inp.callback = t, i.image_inp.saveas = e, i.image_inp.click()
                },
                replace_image: function(t, e) {
                    a.f(!1), a.func.crop({
                        src: t,
                        width: e.width,
                        dimension: e.width / e.height,
                        square: !1,
                        load: function(t, a) {
                            var i = a.find("div.designer_crop_selArea"),
                                s = i.parent().width(),
                                n = i.parent().height(),
                                o = .9 * s,
                                r = o * (e.height / e.width);
                            r < n ? i.css({
                                width: o + "px",
                                height: r + "px",
                                top: (n - r) / 2 + "px",
                                left: (s - o) / 2 + "px"
                            }) : (o = (r = .9 * n) * (e.width / e.height), i.css({
                                width: o + "px",
                                height: r + "px",
                                top: (n - r) / 2 + "px",
                                left: (s - o) / 2 + "px"
                            })), a.trigger("mousedown").off("mousemove touchmove")
                        },
                        save: function(t) {
                            var i = a.stage().canvas,
                                s = e,
                                n = t.find("img.designer_crop_img").get(0),
                                o = n.src.indexOf("data:image/jpeg") ? "jpeg" : "png",
                                r = document.createElement("canvas"),
                                l = r.getContext("2d"),
                                c = t.find("div.designer_crop_selArea"),
                                d = c.width(),
                                u = c.height(),
                                p = c.get(0).offsetTop,
                                g = c.get(0).offsetLeft;
                            r.width = d, r.height = u, l.drawImage(n, -g, -p, c.parent().width(), c.parent().height());
                            var f = s.width,
                                m = (s.height, r.toDataURL("image/" + o));
                            s.setSrc(m, function() {
                                s.set({
                                    width: f,
                                    height: f * (u / d),
                                    origin_src: m,
                                    src: m,
                                    type: "image"
                                }), i.renderAll()
                            }), delete r
                        }
                    })
                },
                imagebox_select_file: function(t) {
                    this.select_image(function(e) {
                        a.tools.import({
                            objects: [{
                                type: "image",
                                src: e.url,
                                width: t.width,
                                left: t.left,
                                top: t.top,
                                imagebox: t.id,
                                evented: !0
                            }]
                        }, function() {})
                    })
                },
                imagebox_arrange: function() {
                    var t = a.stage().canvas;
                    t.getObjects().map(function(t) {
                        "imagebox" == t.type && t.moveTo(2)
                    }), t.renderAll()
                },
                preset_import: function(e, i, s) {
                    var n = a.stage();
                    a.f(""), i = t.extend({
                        width: .8 * n.limit_zone.width,
                        left: n.limit_zone.left + n.limit_zone.width / 2,
                        top: n.limit_zone.top + n.limit_zone.height / 2
                    }, i), e.map(function(t, s) {
                        "upload" == t.type && (t.type = "image"), t.id && (a.cliparts.uploads[t.id] ? t.url = a.cliparts.uploads[t.id] : a.cliparts.storage[t.id] && (t.url = a.cliparts.storage[t.id])), t.text && !t.name && (t.name = t.text.substr(0, 30)), t.url && (t.url.indexOf("data:image/svg+xml;base64,") > -1 || "svg" == t.url.split(".").pop().trim() ? t.type = "svg" : t.type = "image", t.src = t.url, delete t.url), void 0 !== t.font && decodeURIComponent(t.font) != t.font && (t.font = JSON.parse(decodeURIComponent(t.font))), Object.keys(i).map(function(e) {
                            ["left", "top"].indexOf(e) > -1 && void 0 !== t[e] ? t[e] += i[e] : void 0 === t[e] && (t[e] = i[e])
                        }), t.name || ((t.name = t.url && -1 === t.url.indexOf("data:image")) ? t.url.split("/").pop() : t.type);
                        var n = a.get.color("invert");
                        void 0 !== a.data.colors && "" !== a.data.colors && ((n = a.data.colors.split(",")[0]).indexOf(":") > -1 && (n = n.split(":")[1]), n = n.split("@")[0]), "i-text" != t.type && "text-fx" != t.type || (t.fill = n), delete t.save, e[s] = t
                    }), a.tools.import({
                        objects: e
                    }, function() {
                        a.get.el("x-thumbn-preview").hide(), setTimeout(function() {
                            a.ops.set_active ? (n.canvas.setActiveObject(a.ops.set_active), delete a.ops.set_active) : n.canvas.setActiveObject(n.canvas._objects[n.canvas._objects.length - 1]), a.tools.save(), "function" == typeof s && s()
                        }, 10)
                    })
                },
                update_edit_zone: function(t, e) {
                    var a = e.product.height / t.naturalHeight;
                    1 !== a && e.limit_zone.set({
                        height: e.edit_zone.height * a,
                        width: e.edit_zone.width * a,
                        left: e.edit_zone.left * a + e.canvas.width / 2,
                        top: e.edit_zone.top * a + e.canvas.height / 2
                    }), t.naturalWidth > 600 ? e.product.set({
                        width: 600,
                        height: t.naturalHeight * (600 / t.naturalWidth)
                    }) : e.product.set({
                        width: t.naturalWidth,
                        height: t.naturalHeight * (600 / t.naturalWidth)
                    }), e.canvas.renderAll()
                },
                ctrl_btns: function(t) {
                    if (!t.e) return !1;
                    var e = t.target,
                        i = e._objects,
                        s = (r = a.stage().canvas).getActiveObject(),
                        n = r.getActiveGroup(),
                        o = e._findTargetCorner(r.getPointer(t.e, !0));
                    if (!0 !== r.isDrawingMode) {
                        if ("tl" == o) return a.tools.discard(), a.stack.save(), i && i.length > 0 ? i.map(function(t) {
                            r.remove(t)
                        }) : r.remove(e), a.stack.save(), a.design.layers.build(), a.actions.do("object:remove"), !0;
                        if ("bl" == o) {
                            var r;
                            if (s = (r = a.stage().canvas).getActiveObject(), n = r.getActiveGroup(), s) {
                                if (void 0 !== s.imagebox && "" !== s.imagebox && r.getObjects().filter(function(t) {
                                        return t.id == s.imagebox
                                    }).length > 0) return;
                                a.tools.discard(), clearTimeout(a.ops.preventDbl), a.ops.preventDbl = setTimeout(function(t) {
                                    var e = [];
                                    r.getObjects().map(function(i) {
                                        if (i.id && -1 !== t.indexOf(i.id)) {
                                            var s = i.toJSON();
                                            delete s.toClip, a.ops.export_list.map(function(t) {
                                                s[t] = i[t]
                                            }), s.left = 1.1 * ((n ? n.left : 1) + i.left), s.top = 1.1 * ((n ? n.top : 1) + i.top), s.thumbn = i.thumbn, s.replace = !1, s.id = parseInt((new Date).getTime() / 1e3).toString(36) + "-" + Math.random().toString(36).substr(2), e.push(s)
                                        }
                                    }), a.tools.import({
                                        objects: e
                                    }, function() {})
                                }, 100, [s.id])
                            } else if (n) return;
                            return !0
                        }
                    }
                },
                navigation: function(e, i) {
                    if (!0 === a.ops.preventClick) return delete a.ops.preventClick;
                    if ("clear" === e || t(e).hasClass("active")) {
                        if ("clear" !== e && void 0 !== i && "cart" === e.getAttribute("data-tool") && "remove" === i.target.getAttribute("data-func")) return;
                        t('[data-navigation="active"]').attr({
                            "data-navigation": ""
                        }), a.e.main.find("li[data-tool].active").removeClass("active")
                    } else {
                        if (t('[data-navigation="active"]').attr({
                                "data-navigation": ""
                            }), "languages" === e.getAttribute("data-tool") && !a.data.switch_lang) return;
                        a.e.main.find("li[data-tool].active").removeClass("active"), t(e).addClass("active"), t(e).closest("[data-navigation]").attr({
                            "data-navigation": "active"
                        })
                    }
                },
                set_cookie: function(t, e, a) {
                    var i = new Date;
                    a || (a = 365), i.setTime(i.getTime() + 24 * a * 60 * 60 * 1e3);
                    var s = "expires=" + i.toUTCString();
                    document.cookie = t + "=" + e + ";" + s + ";path=/"
                },
                get_cookie: function(t) {
                    for (var e = t + "=", a = decodeURIComponent(document.cookie).split(";"), i = 0; i < a.length; i++) {
                        for (var s = a[i];
                            " " == s.charAt(0);) s = s.substring(1);
                        if (0 == s.indexOf(e)) return s.substring(e.length, s.length)
                    }
                    return ""
                },
                getTextWidth: function(t, e) {
                    if ("function" == typeof e) return document.fonts ? void document.fonts.load(t.size + 'px "' + t.family + '"', t.text).then(function() {
                        var i = (a.ops.getTextWidthCanvas || (a.ops.getTextWidthCanvas = document.createElement("canvas"))).getContext("2d");
                        i.font = t.size + "px " + t.family;
                        var s = i.measureText(t.text);
                        e(s)
                    }) : e({
                        width: 0,
                        height: 0
                    })
                },
                buildText: function(e) {
                    void 0 === a.ops.texttmpl && (a.ops.texttmpl = t('<div style="display: inline-block;visibility:hidden;white-space: nowrap;position:fixed;top: -10000px;left: -1000px;"></div>'), t("body").append(a.ops.texttmpl)), void 0 !== e.curved && 0 !== e.curved || (e.curved = 1), e.curved > 1 && (e.text = e.text.trim().replace(/\n/g, " ")), a.ops.texttmpl.html(e.text.trim().replace(/\n/g, "<br>")).css({
                        "line-height": e.lineHeight + "px",
                        "letter-spacing": e.charSpacing + "px",
                        "font-size": e.fontSize + "px",
                        "font-family": e.fontFamily
                    });
                    var i = (s = a.ops.texttmpl[0].getBoundingClientRect()).width - e.charSpacing,
                        s = s.height,
                        n = 0,
                        o = 0,
                        r = 0,
                        l = 0,
                        c = 0,
                        d = 0,
                        u = e.curved,
                        p = e.rtl,
                        g = void 0 !== e.charSpacing ? e.charSpacing : 0,
                        f = e.text,
                        m = void 0 !== e.lineHeight && 0 !== e.lineHeight ? e.lineHeight : e.fontSize;
                    if (u > 1) {
                        u >= 360 && (u = 359.999), -360 >= u && (u = -359.999), u >= 0 && 180 >= u ? (r = 0, l = 1) : u > 180 && 360 >= u ? (r = 1, l = 1) : 0 > u && u > -180 ? (r = 0, l = 0) : -180 >= u && u >= -360 && (r = 1, l = 0);
                        var h = 180 * i / (Math.abs(u) * Math.PI),
                            v = 90 - Math.abs(u) / 2,
                            b = 90 + Math.abs(u) / 2,
                            _ = v * Math.PI / 180,
                            x = b * Math.PI / 180,
                            w = h * Math.cos(_),
                            y = h * Math.sin(_),
                            k = h * Math.cos(x),
                            A = h * Math.sin(x),
                            O = (new Date).getTime();
                        u > 0 ? (w *= -1, y *= -1, k *= -1, A *= -1) : (w *= -1, k *= -1), Math.abs(u), Math.abs(y), u > 0 ? (n = w + h, o = y + h, c = k + h, d = A + h) : (n = w, o = y, c = k, d = A)
                    }
                    var j = "";
                    f.trim().split("\n").map(function(t, a) {
                        j += '<text fill="' + e.fill + '" stroke="' + e.stroke + '" stroke-width="' + 10 * e.strokeWidth + '" stroke-linecap="butt" stroke-linejoin="miter" font-size="' + e.fontSize + '" font-family="' + e.fontFamily + '" letter-spacing="' + g + '" ' + (p ? 'text-anchor="end" direction="rtl"' : 'text-anchor="start" direction="ltr"') + ">" + (1 == u ? "" : '<textPath xlink:href="#tp-' + O + '">'), j += '<tspan dy="' + a * m + '" x="' + (1 == u ? g / 2 : 0) + '">' + t + "</tspan>" + (1 == u ? "" : "</textPath>") + "</text>"
                    });
                    var C = t('<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g>' + j + (1 == u ? "" : '</g><path id="tp-' + O + '" d="M ' + n + " " + o + " A " + h + " " + h + " 0 " + r + " " + l + " " + c + " " + d + '" fill="transparent"></path>') + "</svg>");
                    a.ops.texttmpl.html("").append(C);
                    var z = C.find("g").get(0).getBoundingClientRect();
                    return ("center" == e.textAlign || "right" == e.textAlign) && C.find("text tspan").length > 1 && C.find("text tspan").each(function() {
                        var t = this.getBoundingClientRect().width;
                        "center" == e.textAlign && t < z.width && this.setAttribute("x", (z.width - t) / 2), "right" == e.textAlign && t < z.width && this.setAttribute("x", z.width - t)
                    }), C.attr({
                        height: z.height,
                        width: z.width + g,
                        viewBox: (1 == u ? 0 : n - w - z.width / 2) + " -" + .9 * e.fontSize + " " + (z.width + g) + " " + z.height
                    }), a.ops.texttmpl.html()
                },
                url2blob: function(t) {
                    if ("string" != typeof t) throw new Error("Invalid argument: dataURI must be a string");
                    t = t.split(",");
                    for (var e = atob(t[1]), a = e.length, i = new Uint8Array(a), s = 0; s < a; s++) i[s] = e.charCodeAt(s);
                    return new Blob([i], {
                        type: t[0].substring(t[0].indexOf("image/"), t[0].indexOf(";") - 1)
                    })
                },
                createThumbn: function(t) {
                    var e = new Image;
                    e.onload = function() {
                        var e = a.ops.creatThumbnCanvas ? a.ops.creatThumbnCanvas : a.ops.creatThumbnCanvas = document.createElement("canvas");
                        e.width = t.width, e.height = t.height;
                        var i = e.getContext("2d"),
                            s = this.naturalHeight * (e.width / this.naturalWidth) >= e.height ? e.width : this.naturalWidth * (e.height / this.naturalHeight),
                            n = s == e.width ? this.naturalHeight * (e.width / this.naturalWidth) : e.height,
                            o = s == e.width ? 0 : -(s - e.width) / 2,
                            r = n == e.height ? 0 : -(n - e.height) / 2;
                        i.fillStyle = t.background ? t.background : "#eee", i.fillRect(0, 0, e.width, e.height), i.drawImage(this, o, r, s, n), t.callback(e)
                    }, e.src = t.source
                },
                check_upload_size: function(t) {
                    var e = a.apply_filters("upload_notice", !0);
                    return !isNaN(a.data.min_upload) && a.data.min_upload > 0 && t.size / 1024 < a.data.min_upload ? (e && a.func.notice(a.i("147") + " " + (t.size / 1024).toFixed(2) + "KB (Minimum " + a.data.min_upload + "KB)", "error", 8e3), a.do_action("upload_minimum_limit"), !1) : !(!isNaN(a.data.max_upload) && a.data.max_upload > 0 && t.size / 1024 > a.data.max_upload && (e && a.func.notice(a.i("147") + " " + (t.size / 1024).toFixed(2) + "KB (Maximum " + a.data.max_upload + "KB)", "error", 8e3), a.do_action("upload_maximum_limit"), 1))
                },
                check_upload_dimensions: function(t) {
                    var e = 0 === t.src.indexOf("data:image/png") ? "png" : "jpeg";
                    if (0 === t.src.indexOf("data:image/svg+xml")) return t.src;
                    if ("" !== a.data.min_dimensions && "object" == typeof a.data.min_dimensions && (parseFloat(a.data.min_dimensions[0]) > t.width || parseFloat(a.data.min_dimensions[1]) > t.height)) return a.func.notice(a.i(160) + " " + a.data.min_dimensions.join("x"), "notice", 3500), null;
                    if ("" !== a.data.max_dimensions && "object" == typeof a.data.max_dimensions && (parseFloat(a.data.max_dimensions[0]) < t.width || parseFloat(a.data.max_dimensions[1]) < t.height)) {
                        var i = document.createElement("canvas");
                        return parseFloat(a.data.max_dimensions[0]) < t.width ? (i.width = parseFloat(a.data.max_dimensions[0]), i.height = i.width * (t.height / t.width), i.height > a.data.max_dimensions[1] && (i.width = a.data.max_dimensions[1] * (i.width / i.height), i.height = a.data.max_dimensions[1])) : parseFloat(a.data.max_dimensions[1]) < t.height && (i.height = parseFloat(a.data.max_dimensions[1]), i.width = i.height * (t.width / t.height), i.width > a.data.max_dimensions[0] && (i.height = a.data.max_dimensions[0] * (i.height / i.width), i.width = a.data.max_dimensions[0])), i.getContext("2d").drawImage(t, 0, 0, i.width, i.height), i.toDataURL("image/" + e)
                    }
                    var s = a.get.size();
                    if ("" !== a.data.min_ppi) {
                        var n = parseFloat(a.data.min_ppi) / 300;
                        if (t.width * n < s.w || t.height * n < s.h) return a.func.notice(a.i(194) + " " + a.data.min_ppi, "notice", 3500), null
                    }
                    return "" !== a.data.max_ppi && (n = parseFloat(a.data.max_ppi) / 300, t.width * n > s.w || t.height * n > s.h) ? (a.func.notice(a.i(195) + " " + a.data.max_ppi, "notice", 3500), null) : t.src
                },
                get_blob: function(t, e) {
                    var a = new XMLHttpRequest;
                    a.open("GET", t, !0), a.responseType = "blob", a.overrideMimeType("text/plain;charset=utf-8"), a.onload = function() {
                        var t = new FileReader;
                        t.onload = e, t.readAsDataURL(this.response)
                    }, a.onreadystatechange = function(t) {
                        4 === a.readyState && 200 !== a.status && e(1)
                    }, a.send(null)
                },
                count_colors: function(t, e) {
                    a.ops.count_colors_canvas || (a.ops.count_colors_canvas = document.createElement("canvas"));
                    var i = function(t) {
                            var e = t.toString(16);
                            return 1 == e.length ? "0" + e : e
                        },
                        s = function(t, e) {
                            return Math.floor(t / (255 / e)) * (255 / e)
                        },
                        n = function(t, e, n) {
                            a.ops.count_colors_canvas.width = e, a.ops.count_colors_canvas.height = n;
                            var o = [],
                                r = a.ops.count_colors_canvas.getContext("2d");
                            r.drawImage(t, 0, 0, e, n);
                            for (var l = r.getImageData(0, 0, e, n).data, d = 0; d < l.length; d += 4) l[d] = s(l[d], 8), l[d + 1] = s(l[d + 1], 8), l[d + 2] = s(l[d + 2], 4), c = "#" + i(l[d]) + i(l[d + 1]) + i(l[d + 2]), -1 === o.indexOf(c) && o.push(c);
                            return o
                        };
                    if (!0 === e) return n(t, t.width / 10, t.height / 10);
                    var o = new Image;
                    o.cb = e, o.onload = function() {
                        var t = this.naturalWidth / 5,
                            e = this.naturalHeight / 5;
                        "function" == typeof this.cb && this.cb(n(this, t, e))
                    }, o.src = t
                },
                update_state: function() {
                    clearTimeout(a.ops.preventDbl), a.ops.preventDbl = setTimeout(function() {
                        var e, i = {},
                            s = [],
                            n = [],
                            o = [];
                        Object.keys(a.data.stages).map(function(t) {
                            var r = [],
                                l = 0,
                                c = 0,
                                d = 0,
                                u = 0;
                            s = [], a.data.stages[t].canvas ? s = a.data.stages[t].canvas.getObjects() : a.data.stages[t].data && a.data.stages[t].data.objects && (s = a.data.stages[t].data.objects), s.length > 0 && s.map(function(t) {
                                if (t && t.evented)
                                    if (t.colors && t.colors.length > 0 && t.colors.map(function(t) {
                                            t = a.tools.svg.rgb2hex(t), -1 === o.indexOf(t) && (o.push(t), n.push(t)), -1 === r.indexOf(t) && r.push(t)
                                        }), "" !== t.stroke && "svg" != t.type && (e = a.tools.svg.rgb2hex(t.stroke), -1 === o.indexOf(t.stroke) && (o.push(t.stroke), n.push(e)), -1 === r.indexOf(e) && r.push(e)), "" !== t.fill && "svg" != t.type && (e = a.tools.svg.rgb2hex(t.fill), -1 === o.indexOf(e) && (o.push(e), n.push(e)), -1 === r.indexOf(e) && r.push(e)), void 0 !== t.template && 0 != t.template.length && (t.price = 0), void 0 !== t.resource) switch (t.resource) {
                                        case "cliparts":
                                            d++;
                                            break;
                                        case "shape":
                                        case "svg":
                                            u++
                                    } else switch (t.type) {
                                        case "image":
                                        case "image-fx":
                                        case "qrcode":
                                            l++;
                                            break;
                                        case "path":
                                        case "svg":
                                            u++;
                                            break;
                                        case "i-text":
                                        case "text-fx":
                                        case "curvedText":
                                            c++
                                    }
                            }), i[t] = {
                                colors: r,
                                images: l,
                                vector: u,
                                clipart: d,
                                text: c
                            }
                        }), n.length > 6 ? (mo = o.length - 6 + "+", n = n.splice(n.length - 6)) : mo = "", t("#designer-count-colors i").html(mo).css({
                            background: "linear-gradient(to right, " + n.join(", ") + ")"
                        }).attr({
                            title: "Used " + n.length + " colors"
                        }), a.actions.do("updated", i), a.get.el("status").hide(), a.ops.before_unload = null, a.render.stage_nav()
                    }, 250);
                },
                create_canvas: function(e, i) {
                    var s = a.get.el("main"),
                        extra_gap = 587-550,
                        n = e.name,
                        top = 0,
                        o = s.width() - (a.ops.window_width < 1023 ? 0 : 20),
                        r = s.height() - (a.ops.window_width < 1023 ? -40+extra_gap : 10+extra_gap);
                        var $iphone6_min_media_query = "(min-width: 375px)";
                        var $iphone6_max_media_query = "(max-width: 380px)"; //667px
                        
                        var $iphone6_device_height_media_query = "(device-height: 667px)";
                        
                        var $iphone12mini_device_height_media_query = "(device-height: 780px)";
                        var $iphone12mini_device_width_media_query = "(device-width: 780px)";
                        var $iphone12mini_min_media_query = "(min-width: 360px)";
                        var $iphone12mini_max_media_query = "(max-width: 360px)";
                        
                        
                        var $iphone6_plus_min_media_query = "(min-width: 414px)";

                        var $iphone12_min_media_query = "(min-width: 390px)";
                        var $iphone12_max_media_query = "(max-width: 395px)"; //667px
                        console.log('OLD O='+o+' OLD R='+r+' OPS WIDTH: '+s.height());
                        if(window.matchMedia($iphone6_min_media_query).matches && window.matchMedia($iphone6_max_media_query).matches && window.matchMedia($iphone6_device_height_media_query).matches) {
                            top = 90, r = 300, o = 250; //iPhone 6
                            // top = 0, r = 500, o = 250; //iPhone 6
                        }
                        if(window.matchMedia($iphone12mini_min_media_query).matches && window.matchMedia($iphone12mini_max_media_query).matches && window.matchMedia($iphone12mini_device_height_media_query).matches && window.matchMedia($iphone12mini_device_width_media_query).matches) {
                            top = 100; //iPhone 12 mini
                        }
                        
                        // 360
                        // $iphone6_plus_min_media_query - 441
                        if(window.matchMedia($iphone12_min_media_query).matches && window.matchMedia($iphone12_max_media_query).matches) {
                            top = -15; //iPhone 12
                        }
                        // if(is_tab_device)
                        //     o = 541;
                        //772*661 - new for tablet
                        //541*661 - new for tablet
                        // r = s.height() - (a.ops.window_width < 1025 ? -40+extra_gap : 10+extra_gap);
                        console.log('O='+o+'R='+r);
                        // console.log('S.W:'+s.width()+' S.H:'.s.height());
                    s.append('<div id="designer-stage-' + n + '" class="designer-stage canvas-wrapper" style="height: ' + r + 'px; top: ' + top + 'px;">\t\t\t\t\t\t<canvas id="designer-stage-' + n + '-canvas" width="' + o + '" height="' + r + '"></canvas>\t\t\t\t\t\t<div class="designer-snap-line-x"></div>\t\t\t\t\t\t<div class="designer-snap-line-y"></div>\t\t\t\t\t</div>'), e.canvas = new fabric.Canvas("designer-stage-" + n + "-canvas", {
                        preserveObjectStacking: !0,
                        controlsAboveOverlay: !0,
                        selection: !1
                    }), e.product = {}, e.stack = {
                        data: [],
                        state: !0,
                        index: 0
                    };
                    var l = a.func.q("#designer-stage-" + n);
                    e.lineX = t("#designer-stage-" + n + " .designer-snap-line-x"), e.lineY = t("#designer-stage-" + n + " .designer-snap-line-y"), [
                        ["dragover", function(t) {
                            if (t.preventDefault(), a.ops.drag_start && a.ops.drag_start.getAttribute("data-ops")) {
                                var i = e.limit_zone.visible,
                                    s = a.stage().canvas.getZoom(),
                                    n = a.ops.drag_start.distance,
                                    o = a.stage().canvas.viewportTransform,
                                    r = e.limit_zone.left * s + o[4],
                                    l = e.limit_zone.top * s + o[5],
                                    c = e.limit_zone.width * s,
                                    d = e.limit_zone.height * s;
                                t.layerX - n.x + n.w / 2 > r && t.layerX - n.x - n.w / 2 < r + c && t.layerY - n.y + n.h / 2 > l && t.layerY - n.y - n.h / 2 < l + d ? e.limit_zone.set("visible", !0) : e.limit_zone.set("visible", !1), i != e.limit_zone.visible && e.canvas.renderAll()
                            }
                        }],
                        ["dragleave", function(t) {
                            t.preventDefault(), !0 === e.limit_zone.visible && (e.limit_zone.set("visible", !1), e.canvas.renderAll())
                        }],
                        ["drop", function(t) {
                            if (t.preventDefault(), a.ops.drag_start && a.ops.drag_start.getAttribute("data-ops") && !0 === e.limit_zone.visible) {
                                var i = this.getBoundingClientRect(),
                                    s = JSON.parse(a.ops.drag_start.getAttribute("data-ops")),
                                    n = a.ops.drag_start.distance,
                                    o = a.stage().canvas.getZoom(),
                                    r = a.stage().canvas.viewportTransform;
                                "shape" == s[0].type ? s[0].url = "data:image/svg+xml;base64," + btoa(a.ops.drag_start.innerHTML.trim()) : void 0 === s[0].url && (s[0].url = a.cliparts.storage[s[0].id] || a.cliparts.uploads[s[0].id]), s[0].url && 0 === s[0].url.indexOf("dumb-") ? a.indexed.get(s[0].url.split("dumb-")[1], "dumb", function(e) {
                                    null !== e && (a.cliparts.uploads[s[0].id] = e[0], s[0].url = e[0], a.func.preset_import(s, {
                                        left: (t.clientX - i.left) / o - n.x - r[4] / o,
                                        top: (t.clientY - i.top) / o - n.y - r[5] / o
                                    }), delete e)
                                }) : a.func.preset_import(s, {
                                    left: (t.clientX - i.left) / o - n.x - r[4] / o,
                                    top: (t.clientY - i.top) / o - n.y - r[5] / o
                                })
                            }
                        }],
                        ["mousewheel", function(t) {
                            t.preventDefault();
                            // var e = parseFloat(a.get.el("zoom").val());
                            // if (t.shiftKey)(e += .15 * t.wheelDelta) < 100 ? e = 100 : e > 250 && (e = 250), a.get.el("zoom").val(e).trigger("input");
                            // else {
                            //     if (!0 !== a.stage().canvas.isDrawingMode) {
                            //         var i = {
                            //                 x: 0,
                            //                 y: void 0 !== t.wheelDeltaY ? .25 * t.wheelDeltaY : .25 * t.wheelDelta
                            //             },
                            //             s = a.stage().canvas,
                            //             n = s.viewportTransform;
                            //         return (n[5] > 0 && i.y > 0 || n[5] < -(s.height * n[0] - s.height) && i.y < 0 || 100 === e) && (i.y = 0), s.relativePan(i), !0
                            //     }
                            //     var o = a.get.el("drawing-width"),
                            //         r = parseFloat(o.val()) + .1 * t.wheelDelta;
                            //     o.val(r).trigger("input"), t.preventDefault()
                            // }
                        }],
                        ["dblclick", function(t) {
                            t.preventDefault();
                            // var i = e.canvas.getActiveObject();
                            // i && "i-text" == i.type && a.get.el('text-tools li[data-tool="spacing"]').trigger("click").find("textarea.designer-edit-text").focus()
                        }]
                    ].map(function(t) {
                        l.addEventListener(t[0], t[1], !1)
                    }), e.canvas.backgroundColor = "#ebeced", e.canvas.on(a.objects.events);
                    var c = new fabric.Image(i);
                    e.product = c, a.f(!1), c.width > o && (c.height = c.height * (o / c.width), c.width = o), c.height > r && (c.width = c.width * (r / c.height), c.height = r);
                    var d = .9 * e.canvas.height,
                        u = c.width * (e.canvas.height / c.height) * .9;
                    c.height <= .9 * e.canvas.height && (d = c.height, u = c.width), c.set({
                        left: e.canvas.width / 2,
                        top: (e.canvas.height - 40) / 2,
                        width: u,
                        height: d,
                        selectable: !1,
                        evented: !1
                    });
                    var p = a.get.color();
                    e.productColor = new fabric.Rect({
                        width: u - 2,
                        height: d - 2,
                        left: e.canvas.width / 2,
                        top: (e.canvas.height - 40) / 2,
                        fill: p,
                        selectable: !1,
                        evented: !1,
                        stroke: "transparent"
                    });
                    var g = e.product_width ? u / e.product_width : 1,
                        f = {
                            width: e.edit_zone.width * g,
                            height: e.edit_zone.height * g,
                            top: e.edit_zone.top * g + ((e.canvas.height - 40) / 2 - d / 2),
                            left: e.edit_zone.left * g
                        },
                        m = void 0 !== e.edit_zone.radius && "" !== e.edit_zone.radius ? e.edit_zone.radius : 0;
                    if (e.limit_zone = new fabric.Rect({
                            fill: "transparent",
                            left: e.canvas.width / 2 + f.left - f.width / 2,
                            top: d / 2 + f.top - f.height / 2,
                            height: f.height,
                            width: f.width,
                            originX: "left",
                            originY: "top",
                            stroke: a.func.invert(p),
                            strokeDashArray: [5, 5],
                            selectable: !1,
                            evented: !1,
                            visible: !1,
                            radius: m,
                            rx: m,
                            ry: m
                        }), e.overlay ? (e.canvas.setOverlayImage(c), e.canvas.add(e.productColor, e.limit_zone)) : e.canvas.add(e.productColor, c, e.limit_zone), t(window).width() > 1024) {
                        var h = 1;
                        d < r && (h = r / d) * u > o && (h = o / u), u < o && h < o / u && (h = o / u) * d > r && (h = r / d), 98 * h > 100 && (t("#designer-zoom").val(98 * h).attr({
                            "data-value": parseInt(98 * h) + "%"
                        }).parent().attr({
                            "data-value": parseInt(98 * h) + "%"
                        }), e.canvas.zoomToPoint(new fabric.Point(o / 2, (r - 40) / 2), .98 * h))
                    }
                    a.mobile(!0)
                },
                stage_nav: function(t, e) {
                    var i = a.get.el("stage-nav");
                    a.ops.window_width, void 0 !== t ? (i.attr({
                        "data-name": t
                    }), void 0 !== e && i.attr({
                        "data-pos": "right",
                        "data-ty": e
                    })) : t = i.attr("data-name"), i.find("li.active").removeClass("active"), i.find('li[data-stage="' + t + '"]').addClass("active");
                    var s = i.find("li.active").nextAll("li[data-stage]"),
                        n = i.find("li.active").prevAll("li[data-stage]");
                    s.length > 0 ? i.find('li[data-nav="next"]').removeClass("disbl").find("span").html(s.first().find("p, span").text()) : i.find('li[data-nav="next"]').addClass("disbl"), n.length > 0 ? i.find('li[data-nav="prev"]').removeClass("disbl").find("span").html(n.first().find("p, span").text()) : i.find('li[data-nav="prev"]').addClass("disbl")
                },
                process_variations: function(e, i) {
                    var s = a.ops.product_data.stages,
                        n = {
                            name: a.ops.product_data.name,
                            description: a.ops.product_data.description,
                            measurement: a.ops.product_data.measurement,
                            price: a.ops.product_data.price,
                            printings: t.extend(!0, [], a.ops.product_data.printings),
                            attributes: t.extend(!0, {}, a.ops.product_data.attributes),
                            stages: t.extend(!0, {}, s.stages ? s.stages : s),
                            printing: null,
                            variation: null
                        };
                    if (null !== e && "object" == typeof e && Object.keys(e).map(function(t) {
                            void 0 !== e[t] && "function" == typeof e[t].trim && (e[t] = e[t].trim()), void 0 !== n.attributes[t] ? n.attributes[t].value = e[t] : "printing" == t && (n.printing = e[t])
                        }), "object" != typeof a.data.variations || void 0 === a.data.variations.variations || 0 === Object.keys(a.data.variations.variations).length) return n;
                    var o = null,
                        r = a.data.variations;
                    return r.attrs.map(function(t) {
                        n.attributes[t].allows = [], null != i && t == i.name && (n.attributes[t].allows = a.ops.product_data.attributes[t].allows, n.attributes[t].value = e[i.name])
                    }), Object.keys(r.variations).map(function(t) {
                        var a = !0;
                        Object.keys(r.variations[t].conditions).map(function(s) {
                            void 0 === n.attributes[s].allows && (n.attributes[s].allows = [""]), null == i || s == i.name || "" != r.variations[t].conditions[i.name] && "" != e[i.name] && r.variations[t].conditions[i.name] != e[i.name] || -1 !== n.attributes[s].allows.indexOf(r.variations[t].conditions[s]) ? null == i && ("" == r.variations[t].conditions[s] ? (n.attributes[s].allows = [""], n.attributes[s].values.split("\n").map(function(t) {
                                n.attributes[s].allows.push(t.split("|")[0].trim())
                            })) : -1 === n.attributes[s].allows.indexOf(r.variations[t].conditions[s]) && n.attributes[s].allows.push(r.variations[t].conditions[s])) : ("" !== r.variations[t].conditions[s] ? n.attributes[s].allows.push(r.variations[t].conditions[s]) : n.attributes[s].values.split("\n").map(function(t) {
                                t = t.split("|"), -1 === n.attributes[s].allows.indexOf(t[0].trim()) && n.attributes[s].allows.push(t[0].trim())
                            }), e[s] == r.variations[t].conditions[s] && (n.attributes[s].value = e[s])), "" === r.variations[t].conditions[s] || void 0 !== e[s] && r.variations[t].conditions[s] == e[s] || (a = !1)
                        }), a && null === o && ((o = r.variations[t]).id = t)
                    }), null !== o && (["price", "sku", "description", "minqty", "maxqty"].map(function(t) {
                        void 0 !== o[t] && null !== o[t] && "" !== o[t] && (n[t] = o[t])
                    }), !0 === o.cfgprinting && void 0 !== o.printings && null !== o.printings && "" !== o.printings && (o.printings.map(function(t) {
                        t.calculate && "string" == typeof t.calculate && (t.calculate = a.func.dejson(t.calculate))
                    }), n.printings = t.extend(!0, [], o.printings), n.printings_cfg = o.printings_cfg, n.cfgprinting = !0), !0 === o.cfgstages && void 0 !== o.stages && null !== o.stages && "" !== o.stages && (n.stages = t.extend(!0, {}, o.stages), n.cfgstages = !0), n.variation = o.id), n
                },
                keep_current_designs: function(t) {
                    if (!1 === a.ops.first_completed) return t;
                    var e = a.func.export().stages;
                    return Object.keys(e).map(function(t, i) {
                        "string" == typeof e[t].data && (e[t].data = JSON.parse(e[t].data)), a.ops.session_designs[i] = e[t].data
                    }), Object.keys(t).map(function(e, i) {
                        void 0 !== a.ops.session_designs[i] && (t[e].data = a.ops.session_designs[i])
                    }), t
                },
                preview_designs: function() {
                    a.get.el("stage-nav").addClass("stages-expand preview-designs")
                },
                print_detail: function(e) {
                    var i, s = qkey = "",
                        n = [],
                        o = a.data.printings.filter(function(t) {
                            if (t.id == e) return t
                        })[0];
                    a.tools.lightbox({
                        content: '<div class="designer_content designer_wrapper_table">\t\t\t\t\t\t\t\t<h3 class="title">' + a.i(67) + " (" + o.title + ')</h3>\t\t\t\t\t\t\t\t<div id="designer-print-detail">\t\t\t\t\t\t\t\t\t<i class="designer-spinner x3 margin-2"></i>\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t</div>'
                    }), t("#designer-print-detail").html("" !== o.description ? "<div>" + o.description + "</div><br>" : ""), "string" == typeof o.calculate && (o.calculate = a.func.dejson(o.calculate));
                    var r = '<ul class="designer_tab_nav ' + (o.calculate.multi ? "" : "hidden") + '">';
                    if (void 0 !== o.calculate && "1" == o.calculate.show_detail) {
                        var l = 1,
                            c = Object.keys(o.calculate.values)[0];
                        for (var d in o.calculate.values) {
                            for (var u in o.calculate.multi && (r += '<li class=><a href="#" data-side="' + d + '">' + a.i("stage") + " " + l++ + "</a></li>", s += '<div class="designer_tab_content" data-designer-tab="' + d + '">'), s += "<table>\t\t\t\t\t\t\t\t<thead>\t\t\t\t\t\t\t\t\t<tr>\t\t\t\t\t\t\t\t\t\t<th>" + a.i(66) + "</th>", o.calculate.values[c][Object.keys(o.calculate.values[c])[0]]) s += "<th>" + decodeURIComponent(u) + "</th>";
                            for (var u in s += "</tr></thead><tbody>", n = Object.keys(o.calculate.values[d]), o.calculate.values[d]) {
                                for (var p in i = n.indexOf(u), qkey = void 0 !== n[i - 1] ? u.indexOf(">") > -1 ? u : parseInt(n[i - 1]) + 1 + " - " + u : "0 - " + u, s += "<tr><td>" + qkey + "</td>", o.calculate.values[d][u]) s += "<td>" + (1 * o.calculate.values[d][u][p] > 0 ? a.func.price(o.calculate.values[d][u][p]) : a.i(100)) + "</td>";
                                s += "</tr>"
                            }
                            s += "\t\t\t\t\t\t\t</tbody>\t\t\t\t\t\t\t</table>", o.calculate.multi && (s += "</div>")
                        }
                        r += "</ul>";
                        var g = t("#designer-print-detail");
                        g.append(r + s), a.trigger({
                            el: g,
                            events: {
                                ".designer_tab_nav a:click": "active_tab"
                            },
                            active_tab: function(e) {
                                e.preventDefault(), g.find("li").removeClass("active"), g.find("[data-designer-tab]").removeClass("active"), t(this).closest("li").addClass("active"), g.find("[data-designer-tab=" + t(this).addClass("active").data("side") + "]").addClass("active")
                            }
                        }), g.find(".designer_tab_nav a:first").trigger("click")
                    }
                },
                edit_design: function(t) {
                    a.tools.save(), a.func.set_url("my_design", t.id), a.func.load_product({
                        id: t.product,
                        cms: t.product_cms,
                        printing: t.printing,
                        options: t.options,
                        template: t.template,
                        stages: t.stages,
                        callback: function(e) {
                            if (void 0 === e.id) return a.f(!1), void a.func.notice("ERROR_LOAD_PRODUCT", "error", 3500);
                            a.get.el("general-status").html('<span>\t\t\t\t\t\t\t\t\t<text>\t\t\t\t\t\t\t\t\t\t<i class="fa fa-exclamation-triangle"></i> ' + a.i(186) + " <strong>#" + t.id + '</strong></text>\t\t\t\t\t\t\t\t\t<a href="#cancel-design" data-btn="cancel" data-func="cancel-design">\t\t\t\t\t\t\t\t\t\t' + a.i(187) + "\t\t\t\t\t\t\t\t\t</a>\t\t\t\t\t\t\t\t</span>")
                        }
                    }), a.func.clear_url(["my_design"]), a.get.el("saved-designs").find(">li.editing").removeClass("editing"), a.get.el("saved-designs").find('>li[data-id="' + t.id + '"]').addClass("editing")
                },
                load_product: function(t) {
                    // alert("Loading");
                    a.f(a.i("Loading..."));
                    var e = null;
                    if (donow = function(e) {
                            if (null == e) return a.f(!1), void a.actions.do("noproduct");
                            "string" == typeof e.variations && "" !== e.variations ? e.variations = a.func.dejson(e.variations) : e.variations = {}, "string" == typeof e.attributes && "" !== e.attributes ? e.attributes = a.func.dejson(e.attributes) : e.attributes = {}, "string" == typeof e.stages && (e.stages = a.func.dejson(e.stages)), e.variations.default = t.options, t.printing && (e.variations.default.printing = t.printing), e.variations.variations && Object.keys(e.variations.variations).map(function(t) {
                                e.variations.variations[t].printings.map(function(t) {
                                    "string" == typeof t.calculate && (t.calculate = a.func.dejson(t.calculate))
                                })
                            }), "object" == typeof t.template && (a.cart.template = t.template.stages, a.cart.price.template =t.template.price,
                            e.template = t.template), e.saved_stages = t.stages, a.render.product(e, function() {
                                !0 !== a.ops.first_completed && (a.actions.do("first-completed"), a.ops.first_completed = !0), a.func.update_state(), a.actions.do("side-click"), a.actions.do("front-side-click");
                            }), "function" == typeof t.callback && t.callback(e)
                        }, void 0 !== a.ops.products && "object" == typeof a.ops.products.products && (e = a.ops.products.products.filter(function(e) {
                            return e.id == t.id
                        })), null !== e && e.length > 0) return donow(e[0]);
                    a.post({
                        action: "load_product",
                        id: t.id
                    }, donow)
                },
                export: function(e, i, s) {
                    var n = {
                            stages: {},
                            type: a.data.type,
                            extra: a.cart.price.extra,
                            updated: (new Date).getTime() / 1e3,
                            name: a.get.el("product header name t").text().trim(),
                            id: a.ops.product_data.id,
                            system_version: a.data.version
                        },
                        o = {
                            screenshot: "",
                            stages: 0,
                            name: n.name,
                            updated: n.updated,
                            id: n.id,
                            system_version: a.data.version
                        };
                    if (void 0 !== s && (n.created = s, o.created = s), a.get.el("stage-nav").find("li[data-stage]").each(function(t) {
                            var e = this.getAttribute("data-stage"),
                                i = a.data.stages[e];
                            if (i) {
                                if (i.canvas) {
                                    var s = i.canvas.viewportTransform;
                                    i.canvas.set("viewportTransform", [1, 0, 0, 1, 0, 0]), n.stages[e] = {
                                        data: a.tools.export(i),
                                        screenshot: a.tools.toImage({
                                            stage: i,
                                            is_bg: "full",
                                            multiplier: 1 / window.devicePixelRatio
                                        }),
                                        edit_zone: i.edit_zone,
                                        image: i.image,
                                        overlay: i.overlay,
                                        updated: n.updated,
                                        product_width: void 0 !== i.product_width ? i.product_width : i.product.width,
                                        product_height: void 0 !== i.product_height ? i.product_height : i.product.height,
                                        devicePixelRatio: window.devicePixelRatio
                                    }, a.data.stages[e].screenshot = n.stages[e].screenshot, i.canvas.set("viewportTransform", s), i.canvas.renderAll()
                                } else n.stages[e] = {
                                    data: i.data,
                                    screenshot: i.screenshot,
                                    edit_zone: i.edit_zone,
                                    image: i.image,
                                    overlay: i.overlay,
                                    updated: n.updated
                                };
                                o.stages++, "" === o.screenshot && (o.screenshot = i.screenshot)
                            }
                        }), !0 === a.ops.first_completed && "" === a.func.url_var("order_print", "") && (!0 === e || "designs" == e || "share" == e || "function" == typeof e)) {
                        if (n.template = {
                                stages: a.cart.template,
                                price: a.cart.price.template
                            }, "" !== a.func.url_var("cart", "")) a.actions.do("cart-changed", n);
                        else {
                            if ("share" == e) return n;
                            "function" == typeof e && e(n, o)
                        }
                        if ("designs" == e || !0 !== a.ops.importing && "" !== a.func.url_var("my_design", "")) {
                            var r = a.func.url_var("my_design", ""),
                                l = a.func.url_var("product", "");
                                alert(r+"Design 4446");
                            product_cms = a.func.url_var("product_cms", ""), "" === r && (r = (new Date).getTime().toString(36).toUpperCase()), n.id = r, o = t.extend(!0, o, {
                                id: r,
                                product: l,
                                product_cms: product_cms,
                                product_cms: product_cms,
                                printing: a.cart.printing.current,
                                options: a.cart.data.options,
                                template: {
                                    stages: a.cart.template,
                                    price: a.cart.price.template
                                }
                            });
                            try {
                                a.indexed.save([o, n], "designs", function() {
                                    delete n, delete o, a.actions.do("save-design", r)
                                })
                            } catch (t) {
                                console.log(t)
                            }
                            delete a.ops.designs_loading, delete a.ops.designs_cursor
                        }
                        delete n, delete o
                    }
                    return n
                },
                set_url: function(t, e) {
                    var a = window.location.href;
                    if ((a = a.split("#")[0].replace(/\,/g, "").split("?"))[1]) {
                        var i = {};
                        a[1].split("&").map(function(t) {
                            t = t.split("="), i[t[0]] = t[1]
                        }), a[1] = [], null === e ? delete i[t] : i[t] = e, Object.keys(i).map(function(t) {
                            a[1].push(t + "=" + i[t])
                        }), a = a[0] + "?" + a[1].join("&")
                    } else null !== e && (a = a[0] + "?" + t + "=" + e);
                    window.history.pushState({}, "", a)
                },
                url_var: function(t, e) {
                    var a = window.location.href.split("#")[0].split("?"),
                        i = e;
                    return a[1] ? (a[1].split("&").map(function(e) {
                        (e = e.split("="))[0] == t && (i = e[1])
                    }), i) : e
                },
                date: function(t, e) {
                    if (void 0 === e || "" === e) return "";
                    var a = {
                        t: ((e = "string" == typeof e && (e.indexOf("-") > -1 || e.indexOf(":") > -1) ? new Date(e) : 10 === e.toString().split(".")[0].length ? new Date(1e3 * parseFloat(e)) : new Date(parseFloat(e))).getMonth() < 9 ? "0" : "") + (e.getMonth() + 1),
                        h: e.getHours(),
                        m: e.getMinutes(),
                        d: e.getDate(),
                        D: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"][e.getDay()],
                        M: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"][e.getMonth()],
                        y: e.getYear(),
                        Y: e.getFullYear()
                    };
                    return str = "", t.split("").map(function(t) {
                        str += a[t] ? a[t] : t
                    }), str
                },
                cart_thumbn: function(e) {
                    a.indexed.get(e, "cart", function(a) {
                        if (null != a) {
                            var i = a.stages[Object.keys(a.stages)[0]];
                            s = 180 / i.product_height, console.table(i), img = '<img data-view="layer" style="height: 180px;width: ' + i.product_width * s + 'px;" src="' + i.screenshot + '" />', t('div[data-design-layer="' + e + '"]').html(img)
                        }
                    })
                },
                get_type: function(t) {
                    return t.indexOf("data:image/jpeg") > -1 ? "jpeg" : t.indexOf("data:image/png") > -1 ? "png" : t.indexOf("data:image/svg") > -1 ? "svg" : "jpg" == t.split(".").pop() ? "jpeg" : "png" == t.split(".").pop() ? "png" : "svg" == t.split(".").pop() ? "svg" : "jpeg"
                },
                scale_designs: function(t, e) {
                    var i = a.stage(),
                        s = i.canvas,
                        n = s.getObjects().filter(function(t) {
                            return !0 === t.evented && (t.set("active", !0), !0)
                        });
                    if (0 === n.length) return !1;
                    var o = new fabric.Group(n, {
                        scaleX: t,
                        scaleY: t,
                        originX: "center",
                        originY: "center"
                    });
                    if (void 0 !== e) o.set({
                        left: o.left - (void 0 !== e.left ? e.left : 0),
                        top: o.top - (void 0 !== e.top ? e.top : 0)
                    });
                    else {
                        var r = i.limit_zone.width / 2 + i.limit_zone.left,
                            l = i.limit_zone.height / 2 + i.limit_zone.top;
                        o.set({
                            left: r - (r - o.left) * t,
                            top: l - (l - o.top) * t
                        })
                    }
                    s._activeObject = null, s.setActiveGroup(o.setCoords()).renderAll(), a.tools.discard()
                },
                font_blob: function(t) {
                    "string" == typeof t.font && -1 === t.font.trim().indexOf("data:") && (-1 === t.font.indexOf("http") && (t.font = a.data.upload_url + t.font), a.func.get_blob(t.font, function() {
                        t.set("font", this.result), a.tools.save()
                    }))
                },
                clear_url: function(t) {
                    ["car", "design_print", "order_print", "design", "share", "my_design"].map(function(e) {
                        "object" == typeof t && -1 !== t.indexOf(e) || a.func.set_url(e, null)
                    })
                },
                enjson: function(t) {
                    return btoa(encodeURIComponent(JSON.stringify(t)))
                },
                dejson: function(t) {
                    return JSON.parse(decodeURIComponent(atob(t)))
                },
                slugify: function(t) {
                    var e = "ร รกแบกรครขรฃแบฅแบงแบซแบญแบกฤแบฏแบฑแบตแบทรจรฉรซรชแบฟแปแป…แบนแปรฌรญฤฉรฏรฎแปรฒรณรถรดแป‘แป“แป—แปแปรนรบรผรปลฉแปฅรนรบลฉฤ‘รฑรงรรฟล“รฆล•ลลแน•แบวตวนแธฟวแบลบแธงยท/_,:;",
                        a = new RegExp(e.split("").join("|"), "g");
                    return t.toString().toLowerCase().replace(/\s+/g, "-").replace(a, function(t) {
                        return "aaaaaaaaaaaaaaaaeeeeeeeeeiiiiiiooooooooouuuuuuuuudncsyoarsnpwgnmuxzh------".charAt(e.indexOf(t))
                    }).replace(/&/g, "-and-").replace(/[^\w\-]+/g, "").replace(/\-\-+/g, "-").replace(/^-+/, "").replace(/-+$/, "")
                },
                pimage: function(t) {
                    for (var e in t) t[e].image || (t[e].image = ("raws" == t[e].source ? a.data.assets + "raws/" : a.data.upload_url) + t[e].url);
                    return t
                },
                price: function(t) {
                    let e = this.number_format(parseFloat(1 * t), parseInt(a.data.number_decimals), a.data.decimal_separator, a.data.thousand_separator);
                    return "0" === a.data.currency_position ? e + a.data.currency : a.data.currency + e
                },
                number_format: function(t, e, a, i) {
                    t = (t + "").replace(/[^0-9+\-Ee.]/g, "");
                    var s = isFinite(+t) ? +t : 0,
                        n = isFinite(+e) ? Math.abs(e) : 0,
                        o = void 0 === i ? "," : i,
                        r = void 0 === a ? "." : a,
                        l = "";
                    return (l = (n ? function(t, e) {
                        var a = Math.pow(10, e);
                        return "" + Math.round(t * a) / a
                    }(s, n) : "" + Math.round(s)).split("."))[0].length > 3 && (l[0] = l[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, o)), (l[1] || "").length < n && (l[1] = l[1] || "", l[1] += new Array(n - l[1].length + 1).join("0")), l.join(r)
                },
                distance: function(t, e) {
                    var a = t.x,
                        i = t.y,
                        s = e.x,
                        n = e.y,
                        o = function(t) {
                            return t * (Math.PI / 180)
                        },
                        r = o(s - a),
                        l = o(n - i),
                        c = Math.sin(r / 2) * Math.sin(r / 2) + Math.cos(o(a)) * Math.cos(o(s)) * Math.sin(l / 2) * Math.sin(l / 2);
                    return 2 * Math.atan2(Math.sqrt(c), Math.sqrt(1 - c))
                },
                confirm: function(e) {
                    console.log(e), e.title = "You  can not change product during cart updation";
                    var i = '<div id="designer-confirm"' + (void 0 !== e.type ? ' data-type="' + e.type + '"' : "") + '>\t\t\t\t\t\t<conf data-label="' + (e.label ? e.label : "Confirmation") + '">\t\t\t\t\t\t\t<p>' + e.title + '</p>\t\t\t\t\t\t\t<i class="fa fa-times" data-btn="close"></i>\t\t\t\t\t\t</conf>\t\t\t\t\t</div>';
                    t("#designer-confirm").remove(), t("#designer").append(i), a.trigger({
                        el: t("#designer-confirm"),
                        events: {
                            '[data-btn="primary"]': function(a) {
                                "function" == typeof e.primary.callback && !1 === e.primary.callback(a) || t("#designer-confirm").remove(), a.preventDefault()
                            },
                            '[data-btn="second"]': function(a) {
                                "function" == typeof e.second.callback && e.second.callback(a), t("#designer-confirm").remove(), a.preventDefault()
                            },
                            '[data-btn="close"]': function(e) {
                                t("#designer-confirm").remove(), e.preventDefault()
                            }
                        }
                    })
                },
                copy: function(t) {
                    var e = document.createElement("input");
                    e.setAttribute("value", t.replace(/\&amp\;/g, "&")), document.body.appendChild(e), e.select(), document.execCommand("copy"), document.body.removeChild(e)
                },
                crop: function(e) {
                    a.tools.lightbox({
                        width: void 0 !== e.width ? e.width : 500,
                        content: '<div class="designer_crop_dragArea">\t\t\t\t\t\t\t\t<img src="' + e.src + '" class="designer_crop_img" style="max-height: 520px;" />\t\t\t\t\t\t\t\t<div class="designer_crop_selArea">\t\t\t\t\t\t\t\t\t<div class="designer_crop_marqueeHoriz designer_crop_marqueeNorth"><span></span></div>\t\t\t\t\t\t\t\t\t<div class="designer_crop_marqueeVert designer_crop_marqueeEast"><span></span></div>\t\t\t\t\t\t\t\t\t<div class="designer_crop_marqueeHoriz designer_crop_marqueeSouth"><span></span></div>\t\t\t\t\t\t\t\t\t<div class="designer_crop_marqueeVert designer_crop_marqueeWest"><span></span></div>\t\t\t\t\t\t\t\t\t<div class="designer_crop_handle designer_crop_handleN" data-target="n"></div>\t\t\t\t\t\t\t\t\t<div class="designer_crop_handle designer_crop_handleNE" data-target="ne"></div>\t\t\t\t\t\t\t\t\t<div class="designer_crop_handle designer_crop_handleE" data-target="e"></div>\t\t\t\t\t\t\t\t\t<div class="designer_crop_handle designer_crop_handleSE" data-target="se"></div>\t\t\t\t\t\t\t\t\t<div class="designer_crop_handle designer_crop_handleS" data-target="s"></div>\t\t\t\t\t\t\t\t\t<div class="designer_crop_handle designer_crop_handleSW" data-target="sw"></div>\t\t\t\t\t\t\t\t\t<div class="designer_crop_handle designer_crop_handleW" data-target="w"></div>\t\t\t\t\t\t\t\t\t<div class="designer_crop_handle designer_crop_handleNW" data-target="nw"></div>\t\t\t\t\t\t\t\t\t<div class="designer_crop_clickArea" style="background-image: url(\'' + e.src + '\');" data-target="visible" title="Enter to apply">\t\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t\t<div class="designer_crop_info">0 x 0</div>\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t\t<div class="designer_crop_clickArea_scan" data-target="darken"></div>\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t<ul class="designer-crop-btns">\t\t\t\t\t\t\t\t<li data-func="center">\t\t\t\t\t\t\t\t\t<i class="fa fa-expand"></i>\t\t\t\t\t\t\t\t\t<span>' + a.i("01") + '</span>\t\t\t\t\t\t\t\t</li>\t\t\t\t\t\t\t\t<li data-func="horizontal">\t\t\t\t\t\t\t\t\t<i class="fa fa-arrows-h"></i>\t\t\t\t\t\t\t\t\t<span>' + a.i("02") + '</span>\t\t\t\t\t\t\t\t</li>\t\t\t\t\t\t\t\t<li data-func="vertical">\t\t\t\t\t\t\t\t\t<i class="fa fa-arrows-v"></i>\t\t\t\t\t\t\t\t\t<span>' + a.i("03") + "</span>\t\t\t\t\t\t\t\t</li>\t\t\t\t\t\t\t\t" + (!1 !== e.square ? '<li data-func="square">\t\t\t\t\t\t\t\t\t<i class="fa fa-check-square-o"></i>\t\t\t\t\t\t\t\t\t<span>' + a.i("04") + "</span>\t\t\t\t\t\t\t\t</li>\t\t\t\t\t\t\t\t" : "") + (void 0 !== e.dimension ? '<li data-func="dimension" class="active">\t\t\t\t\t\t\t\t\t<i class="fa fa-link"></i>\t\t\t\t\t\t\t\t\t<span>' + a.i("168") + "</span>\t\t\t\t\t\t\t\t</li>\t\t\t\t\t\t\t\t" : "") + '<li data-func="save">\t\t\t\t\t\t\t\t\t' + a.i("save") + '\t\t\t\t\t\t\t\t</li>\t\t\t\t\t\t\t\t<li data-func="cancel">\t\t\t\t\t\t\t\t\t' + a.i("cancel") + "\t\t\t\t\t\t\t\t</li>\t\t\t\t\t\t\t</ul>"
                    });
                    var i = t("#designer-lightbox-content div.designer_crop_dragArea");
                    return i.on("mousedown touchstart", function(a) {
                        "touchstart" == a.type && (a.clientX = a.originalEvent.pageX, a.clientY = a.originalEvent.pageY);
                        var s = t(this),
                            n = t("#designer-lightbox-content"),
                            o = s.find(">img").get(0),
                            r = s.find(".designer_crop_selArea"),
                            l = s.find(".designer_crop_info"),
                            c = s.find(".designer_crop_clickArea"),
                            d = o.width / o.naturalWidth,
                            u = a.target.getAttribute("data-target"),
                            p = n.find('li[data-func="square"]').hasClass("active"),
                            g = n.find('li[data-func="dimension"]').hasClass("active"),
                            f = void 0 !== e.dimension ? e.dimension : 0;
                        p && 0 === f && (f = 1), n.find('li[data-func="dimension"]').length > 0 && !g && (f = 0), i.attr({
                            "data-dimension": f
                        });
                        var m = r.get(0),
                            h = {
                                t: m.offsetTop,
                                l: m.offsetLeft,
                                h: m.offsetHeight,
                                w: m.offsetWidth,
                                ph: s.get(0).offsetHeight,
                                pw: s.get(0).offsetWidth,
                                pl: s.get(0).offsetLeft,
                                pt: s.get(0).offsetTop,
                                clientX: a.clientX,
                                clientY: a.clientY
                            },
                            v = function() {
                                var t = m.offsetTop,
                                    e = m.offsetLeft,
                                    a = m.offsetHeight,
                                    i = m.offsetWidth;
                                c.css({
                                    backgroundPosition: -e + "px " + -t + "px"
                                }), l.html(Math.round(i / d) + " x " + Math.round(a / d))
                            };
                        "darken" == u && (h.l = a.clientX - t("#designer-lightbox-body").get(0).offsetLeft + h.pw / 2, h.t = a.clientY - t("#designer-lightbox-body").get(0).offsetTop + h.ph / 2 + 23, r.css({
                            left: h.l + "px",
                            top: h.t + "px",
                            width: "0px",
                            height: "0px"
                        })), v(), t(this).on("mousemove touchmove", function(t) {
                            if (!u) return !0;
                            "touchmove" == t.type && (t.clientX = t.originalEvent.pageX, t.clientY = t.originalEvent.pageY);
                            var e = h.l + (t.clientX - h.clientX),
                                a = h.t + (t.clientY - h.clientY),
                                i = h.w + (t.clientX - h.clientX),
                                s = h.h + (t.clientY - h.clientY);
                            "visible" == u ? (e < 0 && (e = 0, h.clientX = t.clientX, h.l = e), a < 0 && (a = 0, h.clientY = t.clientY, h.t = a), e + h.w > h.pw && (e = h.pw - h.w, h.clientX = t.clientX, h.l = e), a + h.h > h.ph && (a = h.ph - h.h, h.clientY = t.clientY, h.t = a), r.css({
                                left: e + "px",
                                top: a + "px"
                            }), v()) : "darken" == u ? (i -= h.w, s -= h.h, i < 0 && (i = -i, r.css({
                                left: e + "px"
                            })), s < 0 && (s = -s, r.css({
                                top: a + "px"
                            })), 0 !== f && (s = i / f), r.css({
                                width: i + "px",
                                height: s + "px"
                            }), v()) : (["nw", "ne", "n"].indexOf(u) > -1 && (r.css({
                                top: a + "px"
                            }), s = h.h - (t.clientY - h.clientY)), ["nw", "sw", "w"].indexOf(u) > -1 && (r.css({
                                left: e + "px"
                            }), i = h.w - (t.clientX - h.clientX)), ["w", "e", "nw", "ne", "se", "sw"].indexOf(u) > -1 && (r.css({
                                width: i + "px"
                            }), 0 !== f && r.css({
                                height: i / f + "px"
                            })), ["n", "s", "nw", "ne", "se", "sw"].indexOf(u) > -1 && (r.css({
                                height: s + "px"
                            }), 0 !== f && r.css({
                                width: s * f + "px"
                            })), v()), t.preventDefault()
                        })
                    }), i.find("img.designer_crop_img").on("load", function() {
                        var s, n = a.get.stage(),
                            o = t("#designer-lightbox-content");
                        n.active && (s = n.active.fx && n.active.fx.crop ? {
                            width: this.offsetWidth * n.active.fx.crop.width + "px",
                            height: this.offsetHeight * n.active.fx.crop.height + "px",
                            left: this.offsetWidth * n.active.fx.crop.left + "px",
                            top: this.offsetHeight * n.active.fx.crop.top + "px"
                        } : {
                            width: Math.round(.8 * this.offsetWidth) + "px",
                            height: Math.round(.8 * this.offsetHeight) + "px",
                            left: Math.round(.1 * this.offsetWidth) + "px",
                            top: Math.round(.1 * this.offsetHeight) + "px"
                        }, void 0 === e.width && this.offsetWidth < 500 && o.css({
                            "min-width": this.offsetWidth
                        }), o.find("div.designer_crop_selArea").css(s), o.find("div.designer_crop_dragArea").trigger("mousedown touchstart").off("mousemove"), o.find("div.designer_crop_clickArea").css({
                            backgroundSize: this.offsetWidth + "px " + this.offsetHeight + "px",
                            backgroundPosition: "-" + s.left + " -" + s.top,
                            opacity: 1
                        }), i.trigger("mousedown").off("mousemove touchmove"), "function" == typeof e.load && e.load(this, i))
                    }), t("#designer-lightbox-content .designer-crop-btns li[data-func]").on("click", function(a) {
                        var s = this.getAttribute("data-func"),
                            n = i.find(".designer_crop_selArea");
                        switch (s) {
                            case "square":
                                if (t(this).hasClass("active")) return t(this).removeClass("active");
                                t(this).addClass("active"), i.width() > n.height() ? n.css({
                                    width: n.height() + "px"
                                }) : i.height() > n.width() && n.css({
                                    height: n.width() + "px"
                                });
                                break;
                            case "dimension":
                                if (t(this).hasClass("active")) return t(this).removeClass("active");
                                t(this).addClass("active");
                                break;
                            case "center":
                                n.css({
                                    top: i.height() / 2 - n.height() / 2 + "px",
                                    left: i.width() / 2 - n.width() / 2 + "px"
                                });
                                break;
                            case "horizontal":
                                n.css({
                                    left: i.width() / 2 - n.width() / 2 + "px"
                                });
                                break;
                            case "vertical":
                                n.css({
                                    top: i.height() / 2 - n.height() / 2 + "px"
                                });
                                break;
                            case "save":
                                return "function" == typeof e.save && e.save(i), t("#designer-lightbox").remove();
                            case "cancel":
                                return t("#designer-lightbox").remove()
                        }
                        t("#designer-lightbox-content div.designer_crop_dragArea").trigger("mousedown").off("mousemove").off("touchmove")
                    }), a.actions.globalMouseUp || a.actions.add("globalMouseUp", function(e) {
                        if (document.querySelectorAll("#designer-lightbox-content .designer_crop_dragArea").length > 0) {
                            var a = t("#designer-lightbox-content div.designer_crop_dragArea"),
                                i = a.find("div.designer_crop_selArea"),
                                s = i.width(),
                                n = i.height(),
                                o = i.get(0).offsetLeft,
                                r = i.get(0).offsetTop,
                                l = i.parent().width(),
                                c = i.parent().height();
                            s > l || s + o > l ? i.css({
                                width: l - o + "px",
                                height: n * ((l - o) / s) + "px"
                            }) : (n > c || n + r > c) && i.css({
                                height: c - r + "px",
                                width: s * ((c - r) / n) + "px"
                            }), a.trigger("mousedown").off("mousemove").off("touchmove")
                        }
                    }), i
                },
                q: function(t, e) {
                    return e ? document.querySelectorAll(t) : document.querySelector(t)
                }
            },
            render: {
                colorPresets: function() {
                    var e, i = a.data.colors,
                        s = t(".designer-color-presets");
                    void 0 !== i && i.indexOf(":") > -1 && (i = i.split(":")[1].replace(/\|/g, ",")), "0" != a.data.enable_colors && localStorage.getItem("lumise_color_presets") && (i = localStorage.getItem("lumise_color_presets").replace(/\|/g, ",")), s.html(""), i.split(",").map(function(t) {
                        t = t.split("@"), e = t[0], void 0 !== t[1] && "" !== t[1] ? e = decodeURIComponent(t[1]).replace(/\"/g, "") : void 0 !== a.ops.color_maps[t[0]] && (e = a.ops.color_maps[t[0]]), s.append('<li data-color="' + t[0] + '" title="' + e + '" style="background:' + t[0] + '"></li>')
                    }), s.find("li").on("click", function() {
                        var e = a.get.el(t(this).closest("ul.designer-color-presets").data("target"));
                        e.val(this.getAttribute("data-color")), e.get(0).color && "function" == typeof e.get(0).color.fromString && e.get(0).color.fromString(this.getAttribute("data-color"))
                    })
                },
                refresh_my_designs: function() {
                    var t = a.get.el("saved-designs").find(">li"),
                        e = a.get.el("designs-search").find("input").val(),
                        i = null;
                    if (0 === t.length) return a.get.el("saved-designs").trigger("scroll");
                    t.last().data("id"), t.remove(), delete a.ops.designs_cursor, delete a.ops.myDesignThumbns, a.indexed.list(function(t) {
                        if (a.ops.designs_cursor = t.id, a.render.my_designs(t), "" !== e) {
                            if (null === i) return a.get.el("designs-search").find("input").trigger("input");
                            clearTimeout(i), i = setTimeout(function() {
                                a.get.el("designs-search").find("input").trigger("input")
                            }, 500)
                        }
                    }, "designs")
                },
                my_designs: function(t) {
                    if (a.func.version_compare("1.7.1", t.system_version) > 0) return a.indexed.delete(t.id, "designs"), void a.indexed.delete(t.id, "dumb");
                    t.screenshot = "string" == typeof t.screenshot ? URL.createObjectURL(a.func.url2blob(t.screenshot)) : a.data.assets + "assets/images/default_category.jpg", a.ops.my_designs[t.id] = t;
                    var e = a.get.el("saved-designs"),
                        i = a.func.url_var("my_design"),
                        s = "";
                        alert(i+"Design 4816");
                    e.find("p.empty").remove(), 0 === e.find('>li[data-view="add"]').length && (s = '<li data-view="add" data-func="edit" data-id="new">\t\t\t\t\t\t\t<b data-func="edit">+</b>\t\t\t\t\t\t\t<span data-func="edit">' + a.i(107) + "</span>\t\t\t\t\t\t</li>"), s += '<li data-id="' + t.id + '" class="bgcolorafter' + (i == t.id ? " editing" : "") + '">\t\t\t\t\t\t\t<div data-func="edit" data-view="stages" title="' + a.i(48) + '">\t\t\t\t\t\t\t\t<span data-func="edit">\t\t\t\t\t\t\t\t  <img data-func="edit" src="' + t.screenshot + '" height="150" />\t\t\t\t\t\t\t\t</span>\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t<span data-view="name" data-id="' + t.id + '" data-func="name" title="' + a.i(52) + '" data-enter="blur" contenteditable>' + (t.name ? t.name : "Untitled") + '</span>\t\t\t\t\t\t\t<em data-view="date">' + a.func.date("h:m D d M, Y", 1e3 * t.updated) + '</em>\t\t\t\t\t\t\t<i class="fa fa-times" data-func="delete" title="' + a.i(51) + '"></i>\t\t\t\t\t\t</li>', e.append(s)
                },
                shapes: function(t) {
                    if (0 === a.get.el("shapes").find("ul.designer-list-items").length && a.get.el("shapes").html('<p class="gray" style="display:none;">' + a.i(158) + '</p>\t\t\t\t\t\t<div class="designer-tab-body">\t\t\t\t\t\t\t<ul class="designer-list-items"></ul>\t\t\t\t\t\t</div>'), t.length > 0) {
                        var e = a.get.el("shapes").find("ul.designer-list-items");
                        t.map(function(t) {
                            e.append('<li class="designer-clipart" \t\t\t\t\t\t\tdata-ops="[{\t\t\t\t\t\t\t\t&quot;type&quot;: &quot;shape&quot;,\t\t\t\t\t\t\t\t&quot;resource&quot;: &quot;shape&quot;,\t\t\t\t\t\t\t\t&quot;width&quot;: 60,\t\t\t\t\t\t\t\t &quot;height&quot;: 60 ,\t\t\t\t\t\t\t\t &quot;name&quot;: &quot;' + t.name + '&quot;\t\t\t\t\t\t\t}]">' + t.content + "</li>")
                        }), a.cliparts.add_events()
                    } else html += "<h3>No item found</h3>"
                },
                fonts: function(e) {
                    var i = "",
                        s = "",
                        n = "";
                    e ? localStorage.setItem("LUMISE_FONTS", JSON.stringify(e)) : (localStorage.getItem("LUMISE_FONTS") || localStorage.setItem("LUMISE_FONTS", "string" == typeof a.data.default_fonts ? a.data.default_fonts : JSON.stringify(a.data.default_fonts)), e = JSON.parse(localStorage.getItem("LUMISE_FONTS"))), a.get.el("text-ext").html("");
                    try {
                        s = a.stage().canvas.getActiveObject().fontFamily
                    } catch (t) {
                        s = ""
                    }
                    window.lumise_render_text = function(e, i) {
                        if (!(t('#designer-text-ext li[data-family="' + e + '"]').length > 0)) {
                            var s = t('<span data-family="' + e + '" draggable="true" data-act="add" data-ops=\'[{"type":"i-text", "top": -75, "fontSize": "30", "fontFamily": "' + e + '", ' + (void 0 !== i ? '"font": "' + i.replace("\\", "/") + '",' : "") + '"textAlign": "center", "text": "' + e + '"}]\'>\t\t\t\t\t\t\t<svg width="10" height="35" xmlns="http://www.w3.org/2000/svg" \t\t\t\t\t\t\t\txmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none">\t\t\t\t\t\t\t\t<g>\t\t\t\t\t\t\t\t\t<text fill="#111111" stroke="none" stroke-width="0" stroke-linecap="round" \t\t\t\t\t\t\t\t\t\tstroke-linejoin="round" x="0" y="30" text-anchor="middle" \t\t\t\t\t\t\t\t\t\t\tfont-size="30px" font-family="' + e + '">\t\t\t\t\t\t\t\t\t\t<tspan x="50%" dy="0">' + e + "</tspan>\t\t\t\t\t\t\t\t\t</text>\t\t\t\t\t\t\t\t</g>\t\t\t\t\t\t\t</svg>\t\t\t\t\t\t</span>");
                            t("#designer-text-ext").append(s), a.design.event_add_text(s.get(0)), a.func.getTextWidth({
                                family: e,
                                size: 30,
                                text: e
                            }, function(t) {
                                s.find("svg").attr({
                                    width: t.width + 18
                                })
                            })
                            var countupload_li=$('#designer-text-ext span').length;
                                if(countupload_li > 6){
                                          $("#text_append_button").show();
                                      }
                                else{
                                          $("#text_append_button").hide();
                                      }
                        }
                    }, lumise_render_text("Arial"), a.data.fonts && a.data.fonts.length > 0 && a.data.fonts.map(function(t) {
                        t.name.indexOf('"') > -1 || (n += "<font" + (s == t.name ? ' class="selected"' : "") + ' data-family="' + t.name + '" \t\t\t\t\t\t\t\tstyle="font-family: \'' + t.name + '\'" \t\t\t\t\t\t\t\tdata-source="' + t.upload + '">' + t.name + "</font>", a.tools.load_font(t.name, "url(" + a.data.upload_url + t.upload.replace(/\\/g, "/") + ")", function(e) {
                            lumise_render_text(e, t.upload)
                        }))
                    }), Object.keys(e).map(function(t) {
                        i = decodeURIComponent(t).replace(/ /g, "+") + ":" + decodeURIComponent(e[t][1]), n += "<link onload=\"lumise_render_text('" + decodeURIComponent(t) + "', '" + encodeURIComponent(JSON.stringify(e[t])) + '\')" rel="stylesheet" href="//fonts.googleapis.com/css?family=' + i + '" \t\t\t\t\t\t\ttype="text/css" media="all" />\t\t\t\t\t\t\t<font' + (s == decodeURIComponent(t) ? ' class="selected"' : "") + ' data-family="' + decodeURIComponent(t) + '" \t\t\t\t\t\t\t\tstyle="font-family: \'' + decodeURIComponent(t) + "'\">" + decodeURIComponent(t) + "</font>"
                    }), a.get.el("fonts").html(n)
                },
                stage_nav: function() {
                    var e = a.data.stages,
                        i = [],
                        s = 1,
                        n = "",
                        o = "",
                        r = void 0 === e.colors ? Object.keys(e).length : Object.keys(e).length - 1;
                    return "object" == typeof e && (Object.keys(e).map(function(t) {
                        "colors" != t && ("" === n && (n = t), !1 !== e[t].overlay && (e[t].overlay = !0), e[t].color = a.data._color, (void 0 !== e[t].url && "" !== e[t].url || void 0 !== e[t].image) && (e[t].image || (e[t].image = ("raws" == e[t].source ? a.data.assets + "raws/" : a.data.upload_url) + e[t].url), void 0 === e[t].screenshot && (void 0 !== e[t].data && void 0 !== e[t].data.screenshot && "" !== e[t].data.screenshot ? e[t].screenshot = e[t].data.screenshot : void 0 !== e[t].template && void 0 !== e[t].template.screenshot ? e[t].screenshot = e[t].template.screenshot : e[t].image && (e[t].screenshot = e[t].image)), o = "", o = void 0 !== e[t].screenshot && "" !== e[t].screenshot ? e[t].screenshot : void 0 !== e[t].thumbnail && "" !== e[t].thumbnail ? a.data.upload_url + e[t].thumbnail : e[t].image, label = void 0 !== e[t].label && "" !== e[t].label ? e[t].label : a.i("_" + t) ? a.i("_" + t) : "", i.push('<li data-stage="' + t + '" data-tip="true"' + (t === a.current_stage ? ' class="active"' : "") + '>\t\t\t\t\t\t\t\t\t\t<img style="background:' + a.get.color() + '" data-stage="' + t + '" src="' + o + '" />\t\t\t\t\t\t\t\t\t\t<span data-stage="' + t + '">' + ("" !== label ? label + " (" + s + "/" + r + ")" : s + "/" + r) + "</span>\t\t\t\t\t\t\t\t\t</li>"), s++))
                    // start current stage screenshot for share modal 20-01-2021 ; 
                //   if(t === a.current_stage){ 
                //       $("#share_img").attr("src",e[t].screenshot);
                //     }
                    // End current stage screenshot for share modal 20-01-2021 ;
                 }),
                 
                i.length > 1 && (i.unshift('<li data-nav="prev" data-tip="true"><button class="products_sides" id="front_side" data-svg="prev">Front </button><span></span></li>'), i.push('<li data-nav="next" data-tip="true"><button class="products_sides" id="back_side" data-svg="next">Back </button><span></span></li>')), i = a.apply_filters("stage_nav", i)), a.get.el("stage-nav").find(">ul").html(i.join("")).css({
                        display: i.length > 1 ? "inline-block" : "none"
                    }), t("#designer-stage-nav ul").sortable({
                        items: ">li[data-stage]",
                        start: function(e, a) {
                            a.item.closest("#designer-stage-nav").hasClass("stages-expand") && !a.item.closest("#designer-stage-nav").hasClass("preview-designs") || setTimeout(function(t) {
                                try {
                                    t.sortable("cancel")
                                } catch (t) {}
                            }, 0, t(this))
                        },
                        beforeStop: function() {
                            var e = {};
                            t("#designer-stage-nav ul li[data-stage]").each(function() {
                                e[this.getAttribute("data-stage")] = a.data.stages[this.getAttribute("data-stage")]
                            }), a.data.stages = e, a.render.stage_nav()
                        }
                    }), a.func.stage_nav(), a.actions.do("render_stage_nav"), n
                },
                product: function(e, i, s) {
                    if (e = a.apply_filters("product", e), void 0 !== (e = t.extend(!0, {}, e)).variations && "" !== e.variations && "string" == typeof e.variations && (e.variations = a.func.dejson(e.variations)), void 0 !== e.attributes && "" !== e.attributes && "string" == typeof e.attributes && (e.attributes = a.func.dejson(e.attributes)), void 0 !== e.stages && "" !== e.stages && "string" == typeof e.stages && (e.stages = a.func.dejson(e.stages)), a.ops.product_data = e, a.data.printings_cfg = e.printings_cfg, 0 === Object.keys(e.stages).length) return a.f(!1), t("#designer-main").html('<div id="designer-no-product" style="display: block;">\t\t\t\t\t\t\t<p>Error, no configuration for the product you choose</p>\t\t\t\t\t\t\t<button class="designer-btn" id="designer-select-product">\t\t\t\t\t\t\t\t<i class="fa fa-crosshairs"></i> \t\t\t\t\t\t\t\tSelect product\t\t\t\t\t\t\t</button>\t\t\t\t\t\t</div>'), t("#designer-select-product").on("click", a.render.products_list), a.func.notice("Error, no configuration for this product", "error", 5e3);
                    var n = void 0 !== e.variations ? e.variations : {};
                    a.data.variations = n;
                    var o = a.func.process_variations(n.default, null);
                    if (a.data.variation = o.variation, a.data.cfgstages = o.cfgstages, "object" == typeof e.templates && Object.keys(e.templates).length > 0 && Object.keys(e.templates).map(function(t) {
                            void 0 !== e.stages[t] && (e.stages[t].template = e.templates[t])
                        }), a.data.product = e.id, void 0 === e.saved_stages) a.data.stages = a.func.keep_current_designs(o.stages);
                    else {
                        var r = {};
                        Object.keys(e.saved_stages).map(function(t) {
                            void 0 !== o.stages[t] ? (r[t] = o.stages[t], r[t].data = e.saved_stages[t].data) : r[t] = e.saved_stages[t]
                        }), a.data.stages = r
                    }
                    a.data.cfgprinting = o.cfgprinting, o.cfgprinting && (a.data.printings_cfg = o.printings_cfg), a.data.printings = o.printings, a.func.set_url("product", e.id), t("#product_base").val(e.id), void 0 !== e.product && 0 !== e.product && a.func.set_url("product_cms", e.product), a.get.el("main").find(".designer-stage,#designer-no-product").remove(), a.get.el("navigations").find("ul[data-block] li.active").removeClass("active"), a.active_stage(a.render.stage_nav(), function() {
                        var e = a.stage();
                        if (void 0 !== a.data.share) a.f(""), t.get(a.data.upload_url + "shares/" + a.data.share + ".mytpl", function(e) {
                            try {
                                e = JSON.parse(e)
                            } catch (t) {
                                e = {}
                            }
                            void 0 !== e.stages && (a.tools.imports(e, function() {
                                !0 !== a.ops.first_completed && (a.actions.do("first-completed"), a.ops.first_completed = !0), t("#designer-general-status").html('<span>\t\t\t\t\t\t\t\t\t\t\t<i class="fa fa-check-circle"></i> ' + a.i(136) + "</span>")
                            }), delete e)
                        }).done(function() {}).fail(function(t, e, i) {
                            a.func.notice("SHARE LINK ERROR: " + t.status, "error", 5e3)
                        }).always(function() {
                            a.f(!1)
                        }), delete a.data.share;
                        else if ("" !== a.func.url_var("cart", "")) {
                            for (var s in a.f("Processing.."), a.indexed.get(a.func.url_var("cart"), "cart", function(t) {
                                    if (void 0 === t) return a.f(!1);
                                    void 0 !== t.template && (a.cart.template = t.template.stages, a.cart.price.template = t.template.price), void 0 !== t.extra && (a.cart.price.extra = t.extra), a.tools.imports(t, function() {
                                        !0 !== a.ops.first_completed && (a.actions.do("first-completed"), a.ops.first_completed = !0)
                                    })
                                }), a.data.stages) void 0 !== a.data.stages[s].template && (a.data.stages[s].template.noload = !0);
                            return
                        }
                        e.screenshot = a.tools.toImage({
                            stage: e,
                            is_bg: "full",
                            multiplier: 1 / window.devicePixelRatio
                        }), t('#designer-stage-nav img[data-stage="' + a.current_stage + '"]').attr({
                            src: e.screenshot
                        }), "function" == typeof i && i()
                    }), a.render.product_attrs(o), a.actions.do("product", o)
                },
                product_attrs: function(e) {
                    $("#product_details").html(e.description);
                    //  var k = $("#product_size_qty");
                    // var i = a.get.el("product");
                    var i = $("#product_area");
                    if (void 0 === a.ops.doctitle && (a.ops.doctitle = document.title), document.title = e.name + " | " + a.ops.doctitle, i.find("nav.designer-add-cart-action").show(), i.find("header").show().find(">name").html("<t>" + (e.name ? e.name : "") + " &nbsp; </t>"), i.find("header>price").html(a.func.price(e.price)), i.find("header>sku").html(e.sku ? "SKU: " + e.sku : ""), i.find("header>mcs").html(e.measurement ? "Measurement: " + e.measurement : ""), void 0 !== e.description && "" !== e.description) {
                        var s = !1,
                            n = e.description.substr(0, 100);
                        i.find("desc").data({
                            desc: e.description
                        }), e.description.length > 100 && (s = !0), i.find("span").show().html(n), i.find("desc").show().find('a[href="#more"]').css({
                            display: s ? "inline-block" : "none"
                        }).off("click").on("click", function(e) {
                            t(this).toggleClass("open"), t(this).hasClass("open") ? (t(this).html(a.i(137)), t(this).closest("desc").find("span").html(t(this).closest("desc").data("desc"))) : (t(this).html(a.i(69)), t(this).closest("desc").find("span").html(t(this).closest("desc").data("desc").substr(0, 100))), e.preventDefault()
                        })
                    } else i.find("desc").hide();
                    a.get.el("cart-options").show(), a.render.cart_change(), a.cart.render(e)
                },
                cart_change: function() {
                    var t, e, i, s = a.func.url_var("cart", ""),
                        n = a.get.el("cart-action"),
                        o = localStorage.getItem("MYCART-DATA"),
                        r = a.get.el("cart-items").find('ul[data-view="items"]'),
                        l = 0;
                    n.length > 0 && ("" === s ? n.attr({
                        "data-action": "add-cart"
                    }).find(">span").html(n.data("add")) : n.attr({
                        "data-action": "update-cart"
                    }).find(">span").html(n.data("update"))), r.html("");
                    try {
                        o = JSON.parse(o), t = Object.keys(o)
                    } catch (e) {
                        o = {}, t = []
                    }
                    Object.keys(o).length > 0 ? (Object.keys(o).map(function(t) {
                        e = o[t], a.func.version_compare("1.7.1", e.system_version) <= 0 && (i = "#fefdfe", "object" == typeof e.attributes && "object" == typeof e.options && Object.keys(e.attributes).length > 0 && Object.keys(e.attributes).map(function(t) {
                            "product_color" == e.attributes[t].type && void 0 !== e.options[t] && (i = e.options[t])
                        }), r.append('<li data-func="edit" data-id="' + t + '">\t\t\t\t\t\t\t\t<span data-view="thumbn">\t\t\t\t\t\t\t\t\t<img data-func="edit" title="' + a.i("edit") + '" data-id="' + t + '" style="background: ' + i + '" src="' + e.screenshot + '" />\t\t\t\t\t\t\t\t</span>\t\t\t\t\t\t\t\t<span data-view="info">\t\t\t\t\t\t\t\t\t' + (t != s ? '<name>\t\t\t\t\t\t\t\t\t\t\t<a href="#edit" data-func="edit" title="' + a.i("edit") + '" data-id="' + t + '">' + e.name + "\t\t\t\t\t\t\t\t\t\t\t</a>\t\t\t\t\t\t\t\t\t\t</name>" : "<name>" + e.name + "</name>") + "<price>" + a.func.price(e.price_total) + '</price> \t\t\t\t\t\t\t\t\t<a href="#remove" title="' + a.i("remove") + '">\t\t\t\t\t\t\t\t\t\t<i class="fa fa-times" data-func="remove" data-id="' + t + '"></i>\t\t\t\t\t\t\t\t\t</a>\t\t\t\t\t\t\t\t\t' + (t == s ? "<small>" + a.i(72) + "</small> " : "") + "\t\t\t\t\t\t\t\t</span>\t\t\t\t\t\t\t</li>"), l += parseFloat(e.price_total))
                    }), r.append("<li><strong>" + a.i(74) + ": " + a.func.price(l.toFixed(2)) + "</strong></li>"), r.attr({
                        "data-empty": "false"
                    })) : r.attr({
                        "data-empty": "true"
                    }).html('<p><i class="fa fa-shopping-bag"></i> ' + a.i(71) + "</p>"), a.get.el("addToCart").find("small").remove(), a.get.el("addToCart").append(" <small>" + t.length + "</small>"), a.actions.do("cart-change")
                },
                cart_details: function(e) {
                    var i = JSON.parse(localStorage.getItem("MYCART-DATA") || "{}"),
                        s = 1,
                        n = 0,
                        o = a.func.url_var("cart"),
                        r = ['<table class="designer-table sty2"><thead>', "<tr>", "<th> &nbsp; # &nbsp; </th>", "<th>" + a.i(76) + "</th>", '<th data-align="left"><div style="width: 240px;">' + a.i(77) + "</div></th>", '<th data-align="center">' + a.i(104) + "</th>", '<th data-align="center">' + a.i(79) + "</th>", '<th data-align="center"><div style="width: 120px;">' + a.i(78) + "</div></th>", "</tr>", "</thead>", "<tbody>"];
                    Object.keys(i).length > 0 ? (Object.keys(i).map(function(t) {
                        if (a.func.version_compare("1.7.1", i[t].system_version) > 0) return delete i[t], localStorage.setItem("MYCART-DATA", JSON.stringify(i)), void a.indexed.delete(t, "cart");
                        var e, l = i[t],
                            c = "";
                        Object.keys(l.options).map(function(t) {
                            e = l.options[t], "product_color" != l.attributes[t].type && "color" != l.attributes[t].type || (l.attributes[t].values.split("\n").map(function(t) {
                                (t = t.split("|"))[0].trim() == e && void 0 !== t[1] && "" !== t[1] && (e = t[1].trim())
                            }), e = '<span title="' + l.options[t] + '" style="background: ' + l.options[t] + ";padding: 3px 5px;border-radius: 2px;color:" + a.func.invert(l.options[t]) + '">' + e + "</span>"), c += "<strong>" + l.attributes[t].name + ":</strong> " + e + "<br />"
                        }), r = r.concat(["<tr>", "<td>" + s++ + "</td>", '<td class="product-thumb">', '<div data-design-layer="' + t + '"></div>', "</td>", "<td>" + c + "</td>", '<td data-align="center">' + a.func.price(l.price_total) + "</td>", '<td data-align="center">' + a.func.date("h:m D d M, Y", l.updated) + "</td>", '<td data-align="center">', o != t ? '<a href="#edit" data-id="' + t + '">' + a.i("edit") + "</a>" : a.i(72), '&nbsp; | &nbsp;<a href="#remove" data-id="' + t + '">' + a.i("remove") + "</a>", "</td>"]), setTimeout(a.func.cart_thumbn, 100, t), n += parseFloat(l.price_total)
                    }), r = r.concat(["</tbody>", "<tfoot>", "<tr>", '<td colspan="3" class="designer-total">' + a.i(74) + ": " + a.func.price(n.toFixed(2)), "</td>", '<td colspan="3" data-align="right">', '<button class="designer-btn-primary">' + a.i(75) + ' <i class="fa fa-arrow-right"></i></button>', "</td>", "</tr>", "</tfoot>", "</table>"])) : r = r.concat(["<tr>", '<td colspan="6"><h3>' + a.i(42) + "</h3></td>", "</tr>", "</table>"]), a.tools.lightbox({
                        content: '<div id="designer-cart-details" class="designer_content designer_wrapper_table">\t\t\t\t\t\t\t\t<h3 class="title">' + a.i(73) + "</h3>\t\t\t\t\t\t\t\t<div>" + r.join("") + "</div>\t\t\t\t\t\t\t</div>"
                    }), a.trigger({
                        el: t("#designer-cart-details"),
                        events: {
                            'a[href="#edit"]': "edit_item",
                            'a[href="#remove"]': "remove_item",
                            "tfoot button.designer-btn-primary": a.cart.do_checkout
                        },
                        edit_item: function(t) {
                            a.cart.edit_item(this.getAttribute("data-id"), t), t.preventDefault()
                        },
                        remove_item: function(e) {
                            if (confirm(a.i("sure"))) {
                                var i = this.getAttribute("data-id"),
                                    s = t("#designer-cart-details").find("tfoot tr:first td"),
                                    n = 0;
                                a.func.url_var("cart", null) == i && a.func.set_url("cart", null);
                                var o = JSON.parse(localStorage.getItem("MYCART-DATA"));
                                delete o[i], localStorage.setItem("MYCART-DATA", JSON.stringify(o)), a.render.cart_change(), t(this).closest("tr").remove(), Object.keys(o).map(function(t) {
                                    void 0 !== o[t].price_total && (n += parseFloat(o[t].price_total))
                                }), t(s[0]).html(a.i(74) + ": " + a.func.price(n.toFixed(2))), 0 == n && (t(s[1]).html(""), t("#designer-cart-details").find("tfoot .designer-btn-primary").hide())
                            }
                            e.preventDefault()
                        }
                    }), e.preventDefault()
                },
                categories: function(e, i) {
                    var s = t('button[data-func="show-categories"][data-type="' + e + '"]');
                    void 0 !== i ? (a.ops.categories[e] = i, 0 !== i.category && "" !== i.category && "" !== i.category_name ? s.find("span").html(i.category_name) : s.find("span").html(a.i(57))) : i = a.ops.categories[e];
                    var n = i.categories,
                        o = i.category,
                        r = a.get.el("x-thumbn-preview"),
                        l = '<div class="designer-categories-wrp" data-type="' + e + '">';
                    if (void 0 === n || 0 === n.length) r.find(">div").html('<div class="designer-categories-wrp" data-type="' + e + '"><br><br>' + a.i(42) + "</div>");
                    else {
                        i.category_parents.length > 0 && (1 === i.category_parents.length && "" === i.category_parents[0].id ? l += "<nav><span>" + i.category_parents[0].name + "</span></nav>" : (l += '<nav><a href="#category-all" data-act="item" data-id="">' + a.i(57) + "</a>", i.category_parents.map(function(t) {
                            t.id != i.category ? l += '<i class="fa fa-arrow-right"></i><a href="#category-' + t.id + '" data-act="item" data-id="' + t.id + '">' + t.name + "</a>" : l += '<i class="fa fa-arrow-right"></i><span>' + t.name + "</span>"
                        }), l += "</nav>")), l += '<ul class="smooth">', n.map(function(t) {
                            var e = t.thumbnail;
                            null == e || "" === e ? e = a.data.assets + "assets/images/default_category.jpg" : 0 !== e.indexOf("http") && (e = a.data.upload_url + "thumbnails/" + e), l += '<li data-act="item" data-id="' + t.id + '"' + (o == t.id ? ' class="active"' : "") + ">\t\t\t\t\t\t\t\t\t<span style=\"background-image:url('" + e + "');\"></span>\t\t\t\t\t\t\t\t\t<p>" + t.name + "</p>\t\t\t\t\t\t\t\t </li>"
                        }), l += "</ul></div>";
                        var c = r.find(".designer-categories-wrp ul").scrollTop();
                        r.find(">div").html(l), r.find(".designer-categories-wrp ul").scrollTop(c), a.trigger({
                            el: r,
                            events: {
                                "div.designer-categories-wrp": "click"
                            },
                            click: function(e) {
                                var i = e.target.getAttribute("data-act") ? t(e.target) : t(e.target).closest("[data-act]"),
                                    s = this.getAttribute("data-type"),
                                    n = i.data("act");
                                if (n) {
                                    switch (n) {
                                        case "item":
                                            t(".designer-categories-wrp").attr({
                                                "data-process": "true"
                                            }), a.ops[s + "_category"] = i.data("id"), a.ops[s + "_index"] = 0, a.ops[s + ""] = !1, a.get.el(s + "-list").find("ul").html(""), a.get.el(s + "-list").trigger("scroll")
                                    }
                                    e.preventDefault()
                                }
                            }
                        })
                    }
                },
                categories_list: function(e, i) {
                    var s = t('ul[data-func="show-categories"][data-type="' + e + '"]');
                    void 0 !== i ? (a.ops.categories[e] = i, 0 !== i.category && "" !== i.category && "" !== i.category_name ? s.find("li").html(i.category_name) : s.find("li").html(a.i(57))) : i = a.ops.categories[e];
                    var n = i.categories,
                        o = i.category,
                        r = a.get.el("x-thumbn-preview"),
                        l = '';
                    // if (void 0 === n || 0 === n.length) r.find(">div").html('<div class="designer-categories-wrp" data-type="' + e + '"><br><br>' + a.i(42) + "</div>");
                    // else {
                    i.categories.map(function(t) {
                        var selected = "";
                        // if(o==t.id) selected = "(sel)";
                        l += '<li><x onclick="select_cat(' + t.id + ')" data-act="item" data-id="' + t.id + '">' + t.name + selected + "</x></li>"
                    });
                    $(".category-list-items").html(l);
                },
                products_list: function(t) {
                    if (t || (t = a.i(87)), a.tools.lightbox({
                            content: '<div id="designer-change-products-wrp" data-btn="' + t + '" >\t\t\t\t\t\t\t\t<center><i class="designer-spinner x3"></i></center>\t\t\t\t\t\t\t  </div>'
                        }), void 0 !== a.ops.products) return a.response.list_products(a.ops.products);
                    a.post({
                        action: "list_products",
                        s: "",
                        category: "",
                        index: 0
                    })
                },
                cart_confirm: function() {
                    var e = t('<div id="designer-update-cart-confirm" data-func="close" style="opacity:0">\t\t\t\t\t\t\t<div>\t\t\t\t\t\t\t\t<img src="' + a.data.assets + 'assets/images/done.svg" alt="" />\t\t\t\t\t\t\t\t<em>' + a.i(172) + '!</em>\t\t\t\t\t\t\t\t<ul>\t\t\t\t\t\t\t\t\t<li>\t\t\t\t\t\t\t\t\t\t<a href="#details" data-func="details">' + a.i(173) + '</a>\t\t\t\t\t\t\t\t\t</li>\t\t\t\t\t\t\t\t\t<li>\t\t\t\t\t\t\t\t\t\t<a href="#new" data-func="new">' + a.i(174) + '</a>\t\t\t\t\t\t\t\t\t</li>\t\t\t\t\t\t\t\t</ul>\t\t\t\t\t\t\t\t<br>\t\t\t\t\t\t\t\t<button class="designer-btn-primary" data-func="checkout">\t\t\t\t\t\t\t\t\t' + a.i(175) + '\t\t\t\t\t\t\t\t\t<i class="fa fa-arrow-right" data-func="checkout"></i>\t\t\t\t\t\t\t\t</button>\t\t\t\t\t\t\t\t<i class="fa fa-times close" title="' + a.i(176) + '" data-func="close"></i>\t\t\t\t\t\t\t</div>\t\t\t\t\t\t</div>');
                    t("#designer").append(e), e.animate({
                        opacity: 1
                    }, 150).on("click", function(e) {
                        e.preventDefault(), t(this);
                        var i = e.target.getAttribute("data-func");
                        switch (a.get.el("proceed").removeClass("active"), i) {
                            case "close":
                                t(this).fadeOut(150, function() {
                                    t(this).remove()
                                });
                                break;
                            case "details":
                                a.render.cart_details(e);
                                break;
                            case "new":
                                a.func.set_url("cart", null), a.get.el("general-status").html(""), a.render.products_list();
                                break;
                            case "checkout":
                                a.cart.do_checkout(e)
                        }
                        i && t(this).fadeOut(150, function() {
                            t(this).remove()
                        })
                    })
                }
            },
            indexed: {
                req: null,
                db: null,
                stores: {
                    uploads: null,
                    designs: null,
                    dumb: null,
                    cart: null,
                    categories: null
                },
                init: function() {
                    var t = this;
                    t.req = indexedDB.open("lumise", 8), t.req.onsuccess = function(e) {
                        e.target.result.setVersion && e.target.result.version != t.ver ? e.target.result.setVersion(t.ver).onsuccess = function() {
                            t.store(e.target.result), t.ready(e.target.result)
                        } : t.ready(e.target.result)
                    }, t.req.onupgradeneeded = function(e) {
                        t.store(e.target.result)
                    }
                },
                ready: function(t) {
                    this.db = t, "" !== a.data.access_core && a.data.access_core.split(",").map(function(t) {
                        if (void 0 !== window[t] && "function" == typeof window[t]) try {
                            window[t](a)
                        } catch (e) {
                            console.warn('Error on lumise addon callback "' + t + '": ' + e.message), console.log(e)
                        }
                    });
                    try {
                        a.actions.do("db-ready")
                    } catch (t) {
                        console.warn(t.message), console.log(t)
                    }
                },
                save: function(e, b, i) {
                    if (null == this.db) return i(null);
                    var s = this.db.transaction(2 === e.length ? [b, "dumb"] : [b], "readwrite"),
                        n = s.objectStore(b);
                    null !== e.id && void 0 !== e.id || (e.id = parseInt((new Date).getTime() / 1e3).toString(36) + ":" + Math.random().toString(36).substr(2));
                    var o = t.extend({
                            created: (new Date).getTime()
                        }, void 0 !== e[0] ? e[0] : e),
                        o = a.indexed.prepare(o),
                        r = n.put(o, o.id);
                    if ("function" == typeof i && (r.onsuccess = i), void 0 !== e[1]) {
                        var l = t.extend({
                            id: o.id,
                            created: o.created
                        }, e[1]);
                        l = a.indexed.prepare(l),
                        s.objectStore("dumb").put(l, o.id)
                    }
                },
                prepare : function(obj) {
    				for (var n in obj) {
    					if (
    						obj[n] !== undefined &&
    						obj[n] !== null &&
    						typeof obj[n] ==="object"
    					) { 
    						if (
    							obj[n].nodeType === 1 &&
    							typeof obj[n].style === "object" &&
    							typeof obj[n].ownerDocument === "object"
    						) {
    							delete obj[n];
    						} else {
    							obj[n] = a.indexed.prepare(obj[n]);
    						}
    					}
    				}
    				return obj;
    			},
                get: function(t, e, a) {
                    if (null == this.db) return a(null);
                    var i = this.db.transaction([e], "readwrite"),
                        s = i.objectStore(e);
                    try {
                        var n = s.get(t)
                    } catch (t) {}
                    i.oncomplete = function(t) {
                        a(void 0 !== n ? n.result : null), delete n, delete i, delete s, delete go
                    }, i.onerror = function() {
                        a(null)
                    }
                },
                list: function(t, e, i) {
                    if (null == this.db) return i(null);
                    var s = this.db.transaction([e], "readwrite"),
                        n = s.objectStore(e),
                        o = 0;
                    s.oncomplete = i;
                    var r = a.ops[e + "_cursor"] ? IDBKeyRange.upperBound(a.ops[e + "_cursor"], !0) : null,
                        l = n.openCursor(r, "prev");
                    l.onerror = function(t) {
                        console.log(t)
                    }, l.onsuccess = function(e) {
                        if (o++ > 11 && "function" == typeof i) return i();
                        var a = e.target.result;
                        if (!a) return delete a, delete l, delete r, delete s, delete go, "function" == typeof i ? i("done") : null;
                        t(a.value), i != a.id && a.continue()
                    }
                },
                store: function(t) {
                    Object.keys(this.stores).map(function(e) {
                        try {
                            t.createObjectStore(e)
                        } catch (t) {}
                    })
                },
                delete: function(t, e) {
                    var a = this.db.transaction([e, "dumb"], "readwrite");
                    a.objectStore(e).delete(t), a.objectStore("dumb").delete(t)
                }
            },
            post: function(e, i) {
                if (!e.action) return a.func.notice("lumise.post() missing param action", "error");
                t.ajax({
                    url: a.data.ajax,
                    method: "POST",
                    data: a.apply_filters("ajax", t.extend({
                        nonce: "ANSHUWAP-NONCE:" + a.data.nonce,
                        ajax: "frontend"
                    }, e)),
                    statusCode: a.response.statusCode,
                    success: function(t) {
                        if ("function" == typeof i) return i(t);
                        "function" == typeof a.response[e.action] && a.response[e.action](t)
                    }
                })
            },
            response: {
                templates: function(t) {
                    var e = "";
                    var templates_empty = 0;
                    if(a.ops.templates_empty == !0)
                        templates_empty = 1;
                    a.ops.templates_empty = !0;
                    if (t.items && t.items.length > 0) {
                        a.ops.templates_clear = !0;
                        t.items.map(function(t) {
                            t_screenshot = t.screenshot;
                            // t_screenshot = t.image;
                            t_screenshot_t = t_screenshot.replace("https://arteno.in/", main_site); //Added manually.
                            a.templates.storage[t.id] = a.data.upload_url + t.upload, e += "<li style=\"background-image: url('" + t_screenshot_t + '\')" \t\t\t\t\t\t\t\tdata-ops=\'[{\t\t\t\t\t\t\t\t\t"type": "template", \t\t\t\t\t\t\t\t\t"name": "' + t.name + '", \t\t\t\t\t\t\t\t\t"id": "' + t.id + '", \t\t\t\t\t\t\t\t\t"tags": "' + (t.tags ? t.tags : "") + '", \t\t\t\t\t\t\t\t\t"cates": "' + (t.cates ? t.cates : "") + '", \t\t\t\t\t\t\t\t\t"screenshot": "' + t_screenshot + '", \t\t\t\t\t\t\t\t\t"price": "' + t.price + '"\t\t\t\t\t\t\t\t}]\' class="designer-template">\t\t\t\t\t\t\t\t<i data-tag="' + t.id + '">' + (t.price ? a.func.price(t.price) : a.i(100)) + '</i><i data-info="' + t.id + '"></i>\t\t\t\t\t\t\t\t</li>'
                        });
                        var i = t.total ? t.total : 0;
                        a.ops.templates_q = t.q, a.ops.templates_category = t.category, a.ops.templates_index = parseInt(t.index) + t.items.length, a.ops.templates_index < i && (a.ops.templates_loading = !1)
                    } else {
                        e += '<span class="noitems">' + a.i(42) + "</span>";
                        a.ops.templates_empty = !1;
                        a.ops.templates_clear = !1;
                    }
                    a.get.el("templates-list").find("ul.designer-list-items span").html("");
                    if(a.ops.templates_clear == !1) a.get.el("templates-list").find("ul.designer-list-items").html("");
                    ( (is_mobile_device) ? a.get.el("templates-list").find("i.arteno-designer-loader").remove() : $("#template-view-show").find("i.arteno-designer-loader").remove()), a.get.el("templates-list").find("ul.designer-list-items").append(e), a.render.categories_list("templates", t), a.templates.add_events()
                    
                },
                cliparts: function(t) {
                    var e = "";
                    if (t.items && t.items.length > 0) {
                        t.items.map(function(t) {
                            a.cliparts.storage[t.id] = a.data.upload_url + t.upload, e += "<li style=\"background-image: url('" + t.thumbnail_url + '\')" data-ops=\'[{\t\t\t\t\t\t\t\t\t"type": "image", \t\t\t\t\t\t\t\t\t"name": "' + t.name + '", \t\t\t\t\t\t\t\t\t"id": "' + t.id + '", \t\t\t\t\t\t\t\t\t"tags": "' + (t.tags ? t.tags : "") + '", \t\t\t\t\t\t\t\t\t"cates": "' + (t.cates ? t.cates : "") + '", \t\t\t\t\t\t\t\t\t"resource": "cliparts", \t\t\t\t\t\t\t\t\t"price": "' + t.price + '" \t\t\t\t\t\t\t\t}]\' class="designer-clipart">\t\t\t\t\t\t\t\t<i data-tag="' + t.id + '">' + (t.price > 0 ? a.func.price(t.price) : a.i(100)) + '</i><i data-info="' + t.id + '"></i>\t\t\t\t\t\t\t\t</li>'
                        });
                        var i = t.total ? t.total : 0;
                        a.ops.cliparts_q = t.q, a.ops.cliparts_category = t.category, a.ops.cliparts_index = parseInt(t.index) + t.items.length, a.ops.cliparts_index < i && (a.ops.cliparts_loading = !1)
                    } else e += '<span class="noitems">' + a.i(42) + "</span>";
                    a.get.el("cliparts-list").find("i.designer-spinner").remove(), a.get.el("cliparts-list").find("ul.designer-list-items").append(e), a.render.categories("cliparts", t), a.cliparts.add_events()
                },
                save_design: function(t) {
                    a.f(!1), t.success ? (a.func.notice(a.i(21), "success"), a.data.design = t.id, a.get.el("navigations").find('li[data-tool="designs"]').attr({
                        "data-load": "designs"
                    })) : t.error && a.func.notice(t.error, "error")
                },
                my_designs: function(t) {
                    if (t.error) return a.func.notice(t.error, "error");
                    a.render.my_designs(t)
                },
                edit_design: function(t) {
                    if (t.error) return a.func.notice(t.error, "error");
                    try {
                        var e = JSON.parse(t.data)
                    } catch (t) {
                        return a.func.notice(t.message, "error")
                    }
                    a.tools.imports(e), a.get.el("share-link").val(a.data.url + "?design=" + t.id + "&product=" + t.pid + "&private_key=" + t.share_token).closest('li[data-view="link"]').removeAttr("data-msg"), a.get.el("navigations").find('li[data-tool="share"] p[data-view="radio"] input[name="designer-share-permission"]').get(t.share_permission).checked = !0, a.data.design = t.id, a.data.private_key = t.share_token, a.get.el("navigations").find('li[data-tool="designs"]').attr({
                        "data-load": "designs"
                    }), -1 === window.location.href.indexOf("design=" + t.id + "&") && window.history.pushState({}, "", a.data.url + "?design=" + t.id + "&product=" + t.pid)
                },
                delete_design: function(e) {
                    if (e.error) return a.func.notice(e.error, "error");
                    t('ul#designer-saved-designs li[data-id="' + e.id + '"]').remove(), a.func.notice(a.i(22), "success")
                },
                design_permission: function(t) {
                    t.error && a.get.el("navigations").find('li[data-tool="share"] li[data-view="link"]').attr({
                        "data-msg": t.error
                    }), a.get.el("navigations").find('li[data-tool="share"] button[data-func="copy-link"]').removeClass("disabled").next("i").remove()
                },
                shapes: function(e) {
                    if (e.error) return a.func.notice(e.error, "error");
                    if (t("#designer-shapes i.designer-spinner1").remove(), e.items && e.items.length > 0) {
                        a.ops.shapes_index = parseInt(e.index) + e.items.length, a.ops.shapes_loading = !1, a.render.shapes(e.items);
                        var i = t("#designer-shapes .designer-tab-body").get(0);
                        i.scrollHeight == i.clientHeight && t(i).trigger("scroll")
                    } else t("#designer-shapes ul").append('<span class="noitems">' + a.i(42) + "</span>")
                },
                change_lang: function() {
                    location.reload()
                },
                list_products: function(e) {
                    var i = t("#designer-change-products-wrp"),
                        s = i.data("btn");
                    a.ops.products = e;
                    var n = ['<ul data-view="categories">', "<h3>" + a.i(56) + "</h3>", '<li data-id="" ' + ("" === e.category ? 'class="active"' : "") + ' data-lv="0"> ' + a.i(57) + "</li>"],
                        o = ['<h3 data-view="top"><input type="search" value="' + e.s + '" placeholder="' + a.i(63) + '" /></h3>', '<ul data-view="products" class="smooth">'];
                    if (e.categories && e.categories.map(function(t) {
                            n.push("<li " + (e.category == t.id ? 'class="active"' : "") + ' data-id="' + t.id + '" data-lv="' + t.lv + '">' + "&mdash;".repeat(t.lv) + " " + t.name + "</li>")
                        }), e.products && e.products.length > 0 ? e.products.map(function(t) {
                            if (null !== t) {
                                "" !== t.stages && "string" == typeof t.stages && (t.stages = a.func.dejson(t.stages));
                                var e = a.func.pimage(void 0 !== t.stages.stages ? t.stages.stages : t.stages),
                                    i = void 0 !== t.stages.options ? t.stages.options.color : void 0 !== t.stages.colors ? t.stages.colors.active : "string" == typeof t.color ? t.color.split(":")[0] : "";
                                void 0 !== e.colors && delete e.colors;
                                var n = Object.keys(e)[0];
                                o.push('<li data-id="' + t.id + '"' + (a.data.product == t.id ? ' data-current="true"' : "") + ' data-name="' + t.name.toLowerCase().trim().replace(/[^a-z0-9 ]/gim, "") + '"' + (t.id !== t.product ? ' data-cms="' + t.product + '"' : "") + '>\t\t\t\t\t\t\t\t<span data-view="thumbn" data-start="' + s + '">\t\t\t\t\t\t\t\t\t<img  style="background:' + i + '" src="' + (e[n] ? e[n].image : a.data.assets + "assets/images/default_category.jpg") + '" />\t\t\t\t\t\t\t\t</span>\t\t\t\t\t\t\t\t<span data-view="name">' + t.name + '</span>\t\t\t\t\t\t\t\t<span data-view="price">' + a.func.price(t.price) + "</span>\t\t\t\t\t\t\t</li>")
                            }
                        }) : o.push('<li data-view="noitem">' + a.i(42) + "</li>"), e.limit < e.total) {
                        for (var r = ['<li data-view="pagination">', "<ul>"], l = Math.ceil(e.total / e.limit), c = Math.ceil(e.index / e.limit), d = 1; d <= l; d++) r.push('<li data-page="' + d + '" ' + (c == d ? ' class="designer-color"' : "") + ">" + d + "</li>");
                        r.push("</ul></li>"), o.push(r.join(""))
                    }
                    o.push("</ul>"), i.html(n.join("")).append(o.join("")), i.find("img[data-template]").on("load", function(e) {
                        var a = JSON.parse(decodeURIComponent(this.getAttribute("data-template")));
                        this.removeAttribute("data-template");
                        var i = a[0],
                            s = a[1],
                            n = this.offsetWidth / a[2],
                            o = n * (i.top + a[3] / 2 - i.height / 2),
                            r = n * (i.left + a[2] / 2 - i.width / 2),
                            l = n * i.width,
                            c = n * i.height;
                        var s_screenshot = s.screenshot;//s.image;
                        t(this).after('<span style="top: ' + o + "px; left: " + r + "px; width: " + l + "px; height: " + c + "px;border-radius: " + n * i.radius + 'px" data-view="template">\t\t\t\t\t\t\t<img style="top: ' + n * s.offset.top + "px; left: " + n * s.offset.left + "px; height: " + n * s.offset.height + "px; width: " + n * s.offset.width + 'px; position: absolute;" src="' + s_screenshot + '" />\t\t\t\t\t\t</span>')
                    }), a.trigger({
                        el: t("#designer-change-products-wrp"),
                        events: {
                            'ul[data-view="categories"] li': "category",
                            'ul[data-view="products"] li[data-id]': "product",
                            'h3[data-view="top"] input:keydown': "search",
                            'li[data-view="pagination"] li[data-page]': "page"
                        },
                        category: function() {
                            t(this).closest("#designer-change-products-wrp");
                            var e = this.getAttribute("data-id");
                            a.ops.products.category = e, t("#designer-change-products-wrp").html('<center><i class="designer-spinner x3"></i></center>'), a.post({
                                action: "list_products",
                                s: a.ops.products.s,
                                category: e,
                                index: 0
                            })
                        },
                        product: function() {
                            if ("true" != this.getAttribute("data-current")) {
                                var e = this.getAttribute("data-id"),
                                    s = a.ops.products.products.filter(function(t) {
                                        return t.id == e
                                    });
                                s.length > 0 && ("function" == typeof i.data("callback") ? i.data("callback")(s[0]) : ("" !== a.func.url_var("cart", "") ? a.func.confirm({
                                    title: a.i(119),
                                    primary: {
                                        text: a.i(124),
                                        callback: function(e) {
                                            t("designer-general-status").html(""), a.func.clear_url([]), a.render.product(s[0])
                                        }
                                    },
                                    second: {
                                        text: a.i(125),
                                        callback: function(t) {
                                            a.func.clear_url(["cart"]), a.render.product(s[0])
                                        }
                                    }
                                }) : (a.func.clear_url([]), a.render.product(s[0])), a.actions.do("select-product", s[0]))), t(this).closest("#designer-lightbox").remove()
                            }
                        },
                        search: function(e) {
                            if (13 === e.keyCode) {
                                e.data.el.find('ul[data-view="categories"] li.active').removeClass("active"), e.data.el.find('ul[data-view="categories"] li[data-id="all"]').addClass("active");
                                var i = this.value.toLowerCase();
                                t("#designer-change-products-wrp").html('<center><i class="designer-spinner x3"></i></center>'), a.post({
                                    action: "list_products",
                                    s: i,
                                    category: a.ops.products.category ? a.ops.products.category : "",
                                    index: 0
                                }), e.preventDefault()
                            }
                        },
                        page: function(e) {
                            var i = parseInt(this.getAttribute("data-page"));
                            t("#designer-change-products-wrp").html('<center><i class="designer-spinner x3"></i></center>');
                            var s = parseInt(a.ops.products.limit);
                            isNaN(s) && (s = 10), a.post({
                                action: "list_products",
                                s: a.ops.products.s,
                                category: a.ops.products.category,
                                index: i * s - s
                            })
                        }
                    })
                },
                categories: function(t) {
                    if (t.length > 0) {
                        var e = t[0].type;
                        a.ops.categories[e] = t, a.render.categories(e)
                    }
                },
                statusCode: {
                    403: function() {
                        t.post(a.data.ajax, a.apply_filters("ajax", {
                            action: "extend",
                            name: "general",
                            nonce: a.data.nonce
                        }), function(t) {
                            return a.f(!1), "-1" == t ? a.func.notice(a.i(23), "error", 3e3) : (a.data.nonce = t, a.func.notice(a.i(24), "notice", 3e3))
                        })
                    }
                }
            },
            mobile: function(e) {
                var i = t(window).width(),
                    s = t(window).height();
                if (!0 !== e) {
                    if (!a.ops.excmobile) {
                        // if (a.ops.window_width = i, i < 1025 && (t(window).on("scroll", function(t) {
                        //         return t.stopPropagation(), t.preventDefault(), !1
                        //     }), t(document.body).on("scroll touchEnd", function(t) {
                        //         document.body.scrollTop = -1, t.preventDefault()
                        //     }), document.ontouchmove = function(t) {
                        //         t.preventDefault()
                        //     }, setInterval(function() {
                        //         document.body.scrollTop = -1
                        //     }, 500), t("#designer-main").on("mousedown touchstart", function(e) {
                        //         this.t = this.offsetTop, this.l = this.offsetLeft, this.x = e.originalEvent.pageX ? e.originalEvent.pageX : e.originalEvent.touches[0].pageX, this.y = e.originalEvent.pageY ? e.originalEvent.pageY : e.originalEvent.touches[0].pageY, this._do = "standard" == t("#designer-top-tools").attr("data-view"), this._gest = this.gest, e.originalEvent.touches && 2 === e.originalEvent.touches.length ? (this.gest = !0, this.sc || (this.sc = 1), this.a = e.originalEvent.touches[0].pageX - e.originalEvent.touches[1].pageX, this.b = e.originalEvent.touches[0].pageY - e.originalEvent.touches[1].pageY, this.scale_start = Math.sqrt(this.a * this.a + this.b * this.b)) : this.gest = !1, this.start_move = !0
                        //     }).on("mousemove touchmove", function(t) {
                        //         if (t.originalEvent.touches && 1 === t.originalEvent.touches.length || !0 !== this.start_move) return !0;
                        //         if (!0 === this.gest) {
                        //             this.a = t.originalEvent.touches[0].pageX - t.originalEvent.touches[1].pageX, this.b = t.originalEvent.touches[0].pageY - t.originalEvent.touches[1].pageY, this.scale_move = Math.sqrt(this.a * this.a + this.b * this.b), this.scale = this.scale_move / this.scale_start;
                        //             var e = this.sc * this.scale;
                        //             e > 2 ? e = 2 : e < .5 && (e = .5), this.style.transform = "scale(" + e + ")"
                        //         }
                        //         if (!0 !== this._do) return t.preventDefault(), !0;
                        //         this.style.top = this.t + ((t.originalEvent.pageY ? t.originalEvent.pageY : t.originalEvent.touches[0].pageY) - this.y) + "px", this.style.left = this.l + ((t.originalEvent.pageX ? t.originalEvent.pageX : t.originalEvent.touches[0].pageX) - this.x) + "px"
                        //     }).on("mouseup touchend", function(t) {
                        //         this.sc = parseFloat(this.style.transform.toString().replace("scale(", "").replace(")", "")), this.sc > 2 ? this.sc = 2 : this.sc < .5 && (this.sc = .5), this.start_move = !1, this.gest = !1
                        //     }), !localStorage.getItem("LUMISE-GUIDE"))) {
                        //     var n = t('<img id="mobile-guide" src="' + a.data.assets + 'assets/images/mobile-guide.jpg" />');
                        //     t("body").append(n), n.on("click", function() {
                        //         t(this).remove(), localStorage.setItem("LUMISE-GUIDE", "{}")
                        //     })
                        // }
                        if (i < 450) {
                            t('li[data-tab="design"]').trigger("click");
                            var o = t("div#designer-left>div.row>div.col-md-12 .designer-left-nav,#designer-top-tools");
                            t("div#designer-left>div.row>div.col-md-12 .designer-left-nav").width() < 450 && (o = t("#designer-top-tools")), o.on("mousedown touchstart", function(e) {
                                if (this.sub = t(e.target).closest('[data-view="sub"]'), this.sub.length > 0) return !0;
                                this.l = this.offsetLeft, this.x = e.originalEvent.pageX ? e.originalEvent.pageX : e.originalEvent.touches[0].pageX, this.w = t(window).width(), e.preventDefault()
                            }).on("mousemove touchmove", function(t) {
                                if (void 0 !== this.sub && this.sub.length > 0) return !0;
                                var e = this.l + ((t.originalEvent.pageX ? t.originalEvent.pageX : t.originalEvent.touches[0].pageX) - this.x);
                                e > 0 ? e *= .1 : this.offsetWidth + e < this.w && (e = this.w - this.offsetWidth + .1 * (e - (this.w - this.offsetWidth))), this.style.left = Math.round(e) + "px", t.preventDefault()
                            }).on("mouseup touchend", function(e) {
                                if (void 0 !== this.sub && this.sub.length > 0) return !0;
                                Math.abs(this.offsetLeft - this.l) <= 2 ? e.target.click() : this.offsetLeft > 0 ? t(this).animate({
                                    left: 0
                                }, 150) : this.offsetWidth + this.offsetLeft < this.w && t(this).animate({
                                    left: -(this.offsetWidth - this.w)
                                }, 150), e.preventDefault()
                            }), a.actions.add("object:added", function() {
                                //t('li[data-tab="design"]').trigger("click"), //Manual removed for revoke auto tab selection in mobile after object added - 19-01-2021
                                t("div#designer-left>div.row>div.col-md-12 .designer-left-nav").css({
                                    left: "0px"
                                })
                            }), a.actions.add("selection:cleared", function() {
                                t("#designer-top-tools").css({
                                    left: ""
                                })
                            }), a.actions.add("object:selected", function() {
                                t("#designer-top-tools").css({
                                    left: ""
                                })
                            }), a.actions.add("after:render", function() {}), t("#designer-templates-list,#designer-cliparts-list").css({
                                "max-width": s - 224 + "px"
                            }), t("div#designer-left>div.row>div.col-md-12 .designer-tab-body-wrp").css({
                                height: s - 110 + "px"
                            }), t("#designer-cart-wrp").css({
                                "max-height": s - 200 + "px"
                            }), 
                            // t("div#designer-left>div.row>div.col-md-12>div.designer-left-nav-wrp,div#designer-stage-nav").css({
                            //     top: s + "px"
                            // }),
                            t("#designer-left>div.row>div.col-md-12 #designer-uploads div[data-tab]").css({
                                height: s - 169 + "px"
                            })
                        } else i < 1025 && (t("#designer-main").on("touchstart", function() {
                            t("#designer-side-close").trigger("click")
                        }), a.actions.add("object:added", function() {
                            t("#designer-side-close").trigger("click")
                        }), t("#designer-templates-list,#designer-cliparts-list").css({
                            "max-height": s - 170 + "px"
                        }), t("div#designer-left>div.row>div.col-md-12 .designer-tab-body-wrp").css({
                            height: s - 54 + "px"
                        }),
                        // t("div#designer-stage-nav").css({
                        //     top: s - 30 + "px"
                        // }),
                        t("#designer-left>div.row>div.col-md-12 #designer-uploads div[data-tab]").css({
                            height: s - 115 + "px"
                        }));
                        a.ops.excmobile = !0
                    }
                } else {
                    var r = a.get.el("main"),
                        l = a.stage(),
                        c = l.canvas.width,
                        d = l.canvas.height;
                    if (r.css({
                            transform: "",
                            top: "",
                            left: ""
                        }), i < 450 && l.product.width > r.width() - 20) {
                        var u = (r.width() - 20) / l.product.width,
                            p = d * u - d;
                        r.css({
                            transform: "scale(" + u + ")",
                            top: p + "px",
                            left: -(c - (r.width() - 0)) / 2 * u + "px"
                        }), "1" == a.data.rtl && (r.css({
                            right: -(c - r.width()) / 2 * u + "px",
                            left: "auto"
                        }), r.css({
                            left: r.css("left"),
                            right: "auto"
                        }))
                    }
                }
            },
            stage: function() {
                return a.data.stages[a.current_stage]
            },
            active_stage: function(e, i) {
                if ("function" != typeof i && (i = function() {}), "" === e) return i();
                if (this.current_stage = e, !this.current_stage || !this.data.stages[this.current_stage]) return alert(a.i(20));
                var s = this.data.stages[this.current_stage],
                    n = t("#designer-print-nav");
                if (s.name = e, t("#designer-main div.designer-stage").hide(), void 0 !== s.orientation && "" !== s.orientation ? (n.find('select[name="orientation"]').val(s.orientation), n.find('li[data-row="orien"]').hide()) : n.find('li[data-row="orien"]').show(), void 0 !== s.size && "" !== s.size) "string" == typeof s.size ? ("png" == n.find('input[name="print-format"]:checked').attr("data-format") ? n.find('li[data-row="size"]').show() : n.find('li[data-row="size"]').hide(), n.find('select[name="select-size"]').val(s.size).attr({
                    disabled: !0
                }), n.find('input[name="size"]').val(s.size), n.find('input[data-unit="cm"]').prop({
                    checked: !0
                }), n.find('li[data-row="csize"],li[data-row="unit"]').hide()) : (n.find('li[data-row="size"]').hide(), n.find('li[data-row="csize"],li[data-row="unit"]').show(), n.find('input[name="size"]').val(s.size.width + " x " + s.size.height).attr({
                    disabled: !0
                }), n.find('input[data-unit="' + s.size.unit + '"]').prop({
                    checked: !0
                }), n.find("input[data-unit]").attr({
                    disabled: !0
                }));
                else {
                    n.find('select[name="select-size"],input[name="size"],input[data-unit]').attr({
                        disabled: null
                    }), n.find('li[data-row="csize"],li[data-row="unit"],li[data-row="size"],li[data-row="orien"]').show();
                    var o = localStorage.getItem("LUMISE_PRINT_CFG");
                    o && "" !== o && (void 0 !== (o = JSON.parse(o)).format && n.find('input[data-format="' + o.format + '"]').prop({
                        checked: !0
                    }).change(), void 0 !== o.unit && n.find('input[data-unit="' + o.unit + '"]').prop({
                        checked: !0
                    }).change(), void 0 !== o.size && n.find('select[name="select-size"]').val(o.size).change(), void 0 !== o.csize && n.find('input[name="size"]').val(o.csize).change())
                }
                if (s.canvas) return s.productColor != a.get.color() && s.productColor.set("fill", a.get.color()), a.tools.discard(), t("#designer-stage-" + e).show(), s.data ? (a.tools.import(s.data, function() {
                    a.stack.save(), a.actions.do("active_stage", s)
                }), delete s.data) : a.actions.do("active_stage", s), a.func.stage_nav(e, s.product.width / s.product.height), a.mobile(!0), i();
                a.f(""), fabric.util.loadImage(s.image, function(t) {
                    if (a.f(!1), null === t) a.func.notice(a.i(33) + s.image, "error", 5e3);
                    else if (a.func.create_canvas(s, t), s.canvas.renderAll(), a.actions.do("render_stage", s), s.data) {
                        var n = s.data.product_height ? s.product.height / s.data.product_height : 1;
                        a.tools.import(s.data, function() {
                            1 !== n && a.func.scale_designs(n), a.stack.save(), a.actions.do("active_stage", s), i()
                        }), delete s.data
                    } else void 0 !== s.template && void 0 !== s.template.upload && !0 !== s.template.noload ? a.templates.load(s.template, function() {
                        a.actions.do("active_stage", s), i()
                    }) : (a.stack.save(), !0 !== a.ops.first_completed && (a.actions.do("first-completed"), a.ops.first_completed = !0), a.actions.do("active_stage", s), i());
                    a.func.stage_nav(e, s.product.width / s.product.height)
                })
            },
            cart: {
                data: {},
                price: {
                    template: {},
                    extra: {},
                    base: 0,
                    color: 0,
                    attr: 0
                },
                template: {},
                qty: 0,
                attr_tmpl: null,
                timer: null,
                sum_calc: function() {
                    var t = {},
                        e = a.apply_filters("product_extra_price", {}),
                        i = Object.values(a.cart.price).filter(t => "object" != typeof t && parseFloat(t) > 0);
                    i = i.length > 0 ? i.reduce((t, e) => parseFloat(t) + parseFloat(e)) : 0, t.base = i, i = 0;
                    var s = Object.values(e).filter(t => "object" != typeof t && parseFloat(t) > 0);
                    if(total_side>1 && a.func.url_var("product", "")==2) {
                        i += 150; //Manually added for Different side charge.
                    }
                    return s.length > 0 && (i += s.reduce((t, e) => parseFloat(t) + parseFloat(e))), Object.keys(a.cart.price.extra).length > 0 && Object.values(a.cart.price.extra).map(function(t) {
                        t.map(function(t) {
                            i += parseFloat(t.price)
                        })
                    }), t.ext = i, i = 0, i += Object.keys(a.cart.price.template).length > 0 && Object.values(a.cart.price.template).filter(t => parseFloat(t)).length > 0 ? Object.values(a.cart.price.template).filter(t => parseFloat(t) >= 0).reduce((t, e) => parseFloat(t) + parseFloat(e)) : 0, t.template = i, t
                },
                sum: function() {
                    var t = this.sum_calc();
                    return t.base + t.ext + t.template
                },
                extra_price: function(t, e) {
                    null != e ? (void 0 === a.cart.price.extra[t] && (a.cart.price.extra[t] = []), void 0 === a.cart.price.extra[t].filter(t => t.id == e.id && t.table == e.table)[0] && a.cart.price.extra[t].push(e)) : delete a.cart.price.extra[t]
                },
                get_price: function(t) {
                    var e, i = a.cart.sum();
                    return (isNaN(a.cart.qty) || 0 == a.cart.qty) && (a.cart.qty = 1), e = (i + a.cart.printing.calc(a.cart.qty)) * a.cart.qty, !0 === t ? [e, a.cart.qty] : e
                },
                init: function() {
                    null == a.onload && a.cart.render(), a.actions.add("updated", function(t) {
                        clearTimeout(a.cart.timer), a.cart.timer = setTimeout(function() {
                            a.cart.calc(t)
                        }, 300)
                    }), a.actions.add("checkout", a.cart.checkout),a.actions.add("manualcart", a.cart.manualcart), a.actions.add("share", a.cart.share), a.actions.add("wishlist", a.cart.wishlist), a.actions.add("cart_id", a.cart.cart_id),a.actions.add("order_design_print", a.cart.order_design_print),
                    // t("#designer-publish-action").on("click", function(i) {
                    //     alert('yes');
                    //     t("#loader_publish").show(), t("body").css("opacity", "0.3");
                    //     var s = t("#product_base").val(),
                    //         n = a.func.generate_design_file({
                    //             type: "json"
                    //         });
                    //     localStorage.setItem("PUBLISHER-DATA", JSON.stringify(n)), a.func.export("cart");
                    //     var o = Math.random().toString(36).substr(2);
                    //     a.func.doGenerate(o);
                    //     var r = {
                    //             data: n,
                    //             share: "?product=" + a.func.url_var("product", "") + "&share=" + o,
                    //             publish_cart_design: a.func.url_var("cart", (new Date).getTime().toString(36).toUpperCase())
                    //         },
                    //         l = e + "design/publish/" + s;
                    //     t.post(e + "design/publish_cart_ajax", r, function(e, a) {
                    //         t("#loader_publish").hide(), t("body").css("opacity", "1"), window.location.href = l
                    //     }), i.preventDefault()
                    // }),
                    t("#designer-buynow-action").on("click", function(t) {
                        a.cart.add_cart("button add cart click"), t.preventDefault()
                    })
                    t("#designer-manualcart").on("click", function(t) {
                        a.cart.manual_cart("button add cart click"), t.preventDefault()
                    })
                    //, a.render.cart_change()
                },
                publish_cart: function(e) { //Added for Designer only
                    var i = [],
                        s = [],
                        n = [],
                        o = null,
                        r = a.func.export("cart"),
                        l = a.func.url_var("cart", (new Date).getTime().toString(36).toUpperCase()),
                        c = JSON.parse(localStorage.getItem("MYCART-DATA") || "{}"),
                        d = 0;
                    if (c[l] = {
                            id: l,
                            screenshot: "",
                            stages: 0,
                            name: a.ops.product_data.name,
                            updated: (new Date).getTime(),
                            product: a.ops.product_data.id,
                            product_cms: a.ops.product_data.product,
                            printing: a.cart.printing.current,
                            printings_cfg: a.data.printings_cfg,
                            options: t.extend(!0, {}, a.cart.data.options),
                            attributes: t.extend(!0, {}, a.ops.product_data.attributes),
                            price_total: a.cart.get_price(),
                            extra: t.extend(!0, {}, a.cart.price.extra),
                            states_data: t.extend(!0, {}, a.cart.printing.states_data),
                            variation: a.data.variation,
                            template: {
                                stages: a.cart.template,
                                price: a.cart.price.template
                            },
                            system_version: a.data.version
                        }, Object.keys(a.cart.data.options).map(function(t) {
                            i.push(a.cart.data.options[t])
                        }), Object.keys(a.data.stages).map(function(t) {
                            void 0 !== a.data.stages[t] && void 0 !== a.data.stages[t].canvas && a.data.stages[t].canvas.getObjects().map(function(t) {
                                1 == t.evented && d++
                            }), c[l].stages++, "" === c[l].screenshot && (c[l].screenshot = a.data.stages[t].image)
                        }), 0 === d) return a.func.notice(a.i(96), "error"), delete c, delete r, !1;
                    a.data.printings.length > 0 && null === a.cart.printing.current && (void 0 !== (o = t(".designer-prints").find(".designer-cart-field-printing-tmpl").get(0)) && n.push(o), t(".designer-prints").find(".designer-cart-field-printing-tmpl .designer-required-msg").html(a.i(99))), a.cart.qty = parseInt(a.cart.qty), (isNaN(a.cart.qty) || 0 == a.cart.qty) && (a.cart.qty = 1);
                    var u = t(".designer-cart-attributes");
                    if (u.find("em.designer-required-msg").remove(), u.find(".designer-cart-param").each(function(e) {
                            var i = t(this),
                                o = i.attr("name");
                            i.prop("required") && "" === this.value && -1 === s.indexOf(o) && (s.push(o), n.push(i.closest(".designer-cart-field")[0]), i.after('<em class="designer-required-msg">' + a.i(102) + "</em>").closest(".designer_form_group").shake())
                        }), n.length > 0) {
                        var p = t("#designer-cart-wrp"),
                            g = n[0].offsetTop;
                        return p.closest("#designer-product").length > 0 ? (t('#designer-left>div.row>div.col-md-12 .designer-left-nav li[data-tab="product"]').trigger("click"), t("#designer-product").show().animate({
                            scrollTop: g - 20
                        }, 400)) : p.animate({
                            scrollTop: g - 20
                        }, 400), a.func.notice(a.i(179), "error", 3500), delete c, delete r, !1
                    }
                    return c = a.apply_filters("cart_data", c), r = a.apply_filters("cart_design", r), localStorage.setItem("MYCART-DATA", JSON.stringify(c)), r.id = l, a.indexed.save([r], "cart"), delete r, delete c, a.render.cart_confirm(), a.render.cart_change(), a.actions.do("add-cart", l), null != e && "function" == typeof e.preventDefault && e.preventDefault(), !0
                },
                add_cart: function(e) {
                    var i = [],
                        s = [],
                        n = [],
                        o = null,
                        r = a.func.export("cart"),
                        l = a.func.url_var("cart", (new Date).getTime().toString(36).toUpperCase()),
                        c = {},//JSON.parse(localStorage.getItem("MYCART-DATA") || "{}"),
                        u = c[l] ? c[l].tmp_id : "",
                        p = a.func.url_var("tmp", u);
                    if (d = 0, c[l] = {
                            id: l,
                            screenshot: "",
                            stages: 0,
                            name: a.ops.product_data.name,
                            updated: (new Date).getTime(),
                            product: a.ops.product_data.id,
                            product_cms: a.ops.product_data.product,
                            printing: a.cart.printing.current,
                            printings_cfg: a.data.printings_cfg,
                            options: t.extend(!0, {}, a.cart.data.options),
                            attributes: t.extend(!0, {}, a.ops.product_data.attributes),
                            price_total: a.cart.get_price(),
                            extra: t.extend(!0, {}, a.cart.price.extra),
                            states_data: t.extend(!0, {}, a.cart.printing.states_data),
                            variation: a.data.variation,
                            tmp_id: p || 0,
                            template: {
                                stages: a.cart.template,
                                price: a.cart.price.template
                            },
                            system_version: a.data.version
                        }, Object.keys(a.cart.data.options).map(function(t) {
                            i.push(a.cart.data.options[t])
                        }), Object.keys(a.data.stages).map(function(t) {
                            void 0 !== a.data.stages[t] && void 0 !== a.data.stages[t].canvas && a.data.stages[t].canvas.getObjects().map(function(t) {
                                1 == t.evented && d++
                            }), c[l].stages++, "" === c[l].screenshot && (c[l].screenshot = a.data.stages[t].image)
                        }), 0 === d)// return a.func.notice(a.i(96), "error"), delete c, delete r, !1; updatedfor blank design 07-06-2021
                    a.data.printings.length > 0 && null === a.cart.printing.current && (void 0 !== (o = t(".designer-prints").find(".designer-cart-field-printing-tmpl").get(0)) && n.push(o), t(".designer-prints").find(".designer-cart-field-printing-tmpl .designer-required-msg").html(a.i(99))), a.cart.qty = parseInt(a.cart.qty), (isNaN(a.cart.qty) || 0 == a.cart.qty) && (a.cart.qty = 1);
                    var g = t(".designer-cart-attributes");
                    if (g.find("em.designer-required-msg").remove(), g.find(".designer-cart-param").each(function(e) {
                            var i = t(this),
                                o = i.attr("name");
                            i.prop("required") && "" === this.value && -1 === s.indexOf(o) && (s.push(o), n.push(i.closest(".designer-cart-field")[0]), i.after('<em class="designer-required-msg">' + a.i(102) + "</em>").closest(".designer_form_group").shake())
                        }), n.length > 0) {
                        var f = t("#designer-cart-wrp"),
                            m = n[0].offsetTop;
                        return f.closest("#designer-product").length > 0 ? (t('#designer-left>div.row>div.col-md-12 .designer-left-nav li[data-tab="product"]').trigger("click"), t("#designer-product").show().animate({
                            scrollTop: m - 20
                        }, 400)) : f.animate({
                
                        }, 400), a.func.notice(a.i(179), "error", 3500), delete c, delete r, !1
                    }
                    return c = a.apply_filters("cart_data", c), r = a.apply_filters("cart_design", r), localStorage.setItem("MYCART-DATA", JSON.stringify(c)), r.id = l, a.indexed.save([r], "cart"), delete r, delete c, a.cart.do_checkout(e),
                    // a.render.cart_change(), a.actions.do("add-cart", l),
                    null != e && "function" == typeof e.preventDefault && e.preventDefault(), !0
                },
                
                // manual cart 3-6-2021
                manual_cart: function(e) {
                    var i = [],
                        s = [],
                        n = [],
                        o = null,
                        r = a.func.export("cart"),
                        l = a.func.url_var("cart", (new Date).getTime().toString(36).toUpperCase()),
                        c = {},//JSON.parse(localStorage.getItem("MYCART-DATA") || "{}"),
                        u = c[l] ? c[l].tmp_id : "",
                        p = a.func.url_var("tmp", u);
                    if (d = 0, c[l] = {
                            id: l,
                            screenshot: "",
                            stages: 0,
                            name: a.ops.product_data.name,
                            updated: (new Date).getTime(),
                            product: a.ops.product_data.id,
                            product_cms: a.ops.product_data.product,
                            printing: a.cart.printing.current,
                            printings_cfg: a.data.printings_cfg,
                            options: t.extend(!0, {}, a.cart.data.options),
                            attributes: t.extend(!0, {}, a.ops.product_data.attributes),
                            price_total: a.cart.get_price(),
                            extra: t.extend(!0, {}, a.cart.price.extra),
                            states_data: t.extend(!0, {}, a.cart.printing.states_data),
                            variation: a.data.variation,
                            tmp_id: p || 0,
                            template: {
                                stages: a.cart.template,
                                price: a.cart.price.template
                            },
                            system_version: a.data.version
                        }, Object.keys(a.cart.data.options).map(function(t) {
                            i.push(a.cart.data.options[t])
                        }), Object.keys(a.data.stages).map(function(t) {
                            void 0 !== a.data.stages[t] && void 0 !== a.data.stages[t].canvas && a.data.stages[t].canvas.getObjects().map(function(t) {
                                1 == t.evented && d++
                            }), c[l].stages++, "" === c[l].screenshot && (c[l].screenshot = a.data.stages[t].image)
                        }), 0 === d) //return a.func.notice(a.i(96), "error"), delete c, delete r, !1;updatedfor blank design 07-06-2021
                    a.data.printings.length > 0 && null === a.cart.printing.current && (void 0 !== (o = t(".designer-prints").find(".designer-cart-field-printing-tmpl").get(0)) && n.push(o), t(".designer-prints").find(".designer-cart-field-printing-tmpl .designer-required-msg").html(a.i(99))), a.cart.qty = parseInt(a.cart.qty), (isNaN(a.cart.qty) || 0 == a.cart.qty) && (a.cart.qty = 1);
                    var g = t(".designer-cart-attributes");
                    if (g.find("em.designer-required-msg").remove(), g.find(".designer-cart-param").each(function(e) {
                            var i = t(this),
                                o = i.attr("name");
                            i.prop("required") && "" === this.value && -1 === s.indexOf(o) && (s.push(o), n.push(i.closest(".designer-cart-field")[0]), i.after('<em class="designer-required-msg">' + a.i(102) + "</em>").closest(".designer_form_group").shake())
                        }), n.length > 0) {
                        var f = t("#designer-cart-wrp"),
                            m = n[0].offsetTop;
                        return f.closest("#designer-product").length > 0 ? (t('#designer-left>div.row>div.col-md-12 .designer-left-nav li[data-tab="product"]').trigger("click"), t("#designer-product").show().animate({
                            scrollTop: m - 20
                        }, 400)) : f.animate({
                
                        }, 400), a.func.notice(a.i(179), "error", 3500), delete c, delete r, !1
                    }
                    return c = a.apply_filters("cart_data", c), r = a.apply_filters("cart_design", r), localStorage.setItem("MYCART-DATA", JSON.stringify(c)), r.id = l, a.indexed.save([r], "cart"), delete r, delete c, a.cart.do_manualcart(e),
                    // a.render.cart_change(), a.actions.do("add-cart", l),
                    null != e && "function" == typeof e.preventDefault && e.preventDefault(), !0
                },
                variations: function(e) {
                    if (void 0 !== a.data.variations.attrs && -1 !== a.data.variations.attrs.indexOf(e.name)) {
                        var i = {};
                        t(".designer-cart-attributes .designer-cart-param:not(.disabled)").serializeArray().map(function(t) {
                            i[t.name] = t.value
                        });
                        var s = a.func.process_variations(i, e);
                        if (null === s.variation && null === a.data.variation || a.data.variation == s.variation) return a.render.product_attrs(s);
                        a.data.variation = s.variation, s.cfgprinting ? a.data.printings_cfg = s.printings_cfg : a.data.printings_cfg = a.ops.product_data.printings_cfg, a.data.printings = s.printings, a.render.product_attrs(s), !0 !== s.cfgstages && !0 !== a.data.cfgstages || (a.data.stages = a.func.keep_current_designs(s.stages), a.data.cfgstages = s.cfgstages, a.get.el("main").find(".designer-stage,#designer-no-product").remove(), a.active_stage(a.render.stage_nav(), a.cart.calc), a.actions.do("product-variation", s))
                    }
                },
                calc: function(e) {
                    null == e ? e = a.cart.printing.states_data : a.cart.printing.states_data = e, a.cart.data = {
                        options: {},
                        printing: a.cart.printing.current,
                        states_data: a.cart.printing.states_data
                    }, a.cart.price.attr = 0, a.cart.qty = 0;
                    var i = t(".designer-cart-attributes .designer-cart-param:not(.disabled)").serializeArray(),
                        s = a.ops.product_data.attributes;
                    i.map(function(t) {
                        if (null != s[t.name]) {
                            var e = s[t.name];
                            "" === t.value ? delete a.cart.data.options[e.id] : void 0 === a.cart.data.options[e.id] ? a.cart.data.options[e.id] = t.value : a.cart.data.options[e.id] += "\n" + t.value, "quantity" == e.type && (a.cart.qty += parseInt(t.value))
                        }
                    }), a.cart.price.template = {}, 
                    total_side = 0,
                    Object.keys(a.data.stages).map(function(t) {
                        if (void 0 !== a.data.stages[t].canvas) {
                            var e = a.data.stages[t].canvas;
                            var c_stage = 0;
                            a.cart.template[t] = [], a.cart.price.template[t] = 0, e.getObjects().map(function(e) {
                                1 == e.evented && c_stage++ && void 0 !== e.price && parseFloat(e.price) > 0 && (a.cart.price.attr += parseFloat(e.price)), void 0 !== e.template && "object" == typeof e.template && -1 === a.cart.template[t].indexOf(e.template[0]) && (a.cart.template[t].push(e.template[0]), a.cart.price.template[t] += e.template[1])
                            });
                            if(c_stage > 0)
                                total_side++;
                        }
                    });
                    // if(total_side>1 && a.func.url_var("product", "")==2) {
                    //     i += 150; //Manually added for Different side charge.
                    // }
                    try {
                        var n = a.ops.product_data.variations.variations[a.data.variation];
                        parseFloat(a.cart.qty) < parseFloat(n.minqty) && (a.cart.qty = parseFloat(n.minqty)), parseFloat(a.cart.qty) > parseFloat(n.maxqty) && (a.cart.qty = parseFloat(n.maxqty)) && $('#extraqtymodal').modal({show:true})
                    } catch (t) {}
                    0 === a.cart.qty && (a.cart.qty = 1), t('.designer-cart-field-quantity input[type="number"]').val(a.cart.qty), a.actions.do("cart-calc"), a.cart.display()
                },
                manualcart: function(e) {
                    $('#addtocart_loader').show();
                    $('#addtocart_action').hide();
                    fbq('track', 'Purchase', {currency: "INR", value: a.cart.get_price()});
                    var i = new FormData;
                    i.append("cart_id", a.func.url_var("cart_id", "")),
                    i.append("action", "checkout"), i.append("ajax", "frontend"), i.append("nonce", "ANSHUWAP-NONCE:" + a.data.nonce), Object.keys(e).map(function(t) {
                        e[t].product_id = e[t].product, "" !== e[t].product_cms ? e[t].cms_id = e[t].product_cms : e[t].cms_id = 0, e[t].product_name = e[t].name, i.append(t, new Blob([JSON.stringify(a.apply_filters("checkout-item", e[t]))]))
                    }), delete e, a.f("loading"), t.ajax({
                        data: i,
                        type: "POST",
                        url: a.data.ajax,
                        contentType: !1,
                        processData: !1,
                        xhr: function() {
                            var e = new window.XMLHttpRequest;
                            return e.upload.addEventListener("progress", function(e) {
                                if (e.lengthComputable) {
                                    var i = e.loaded / e.total;
                                    i < 1 ? t("div#designer").attr({
                                        "data-msg": parseInt(100 * i) + "% upload complete"
                                    }) : t("div#designer").attr({
                                        "data-msg": a.i(159)
                                    });
                                }
                            }, !1), e
                            if(i>=1) window.location.href = main_site+'cart'; //manual redirect to cart when stuck in counting 15-02-2021 15:55
                        },
                        success: function(e, i) {
                            $('#loader_publish').hide();
                            t("div#designer").attr({
                                "data-msg": a.i('')
                            }),
                             "0" == e ? (alert("Error: could not added in cart this time"), location.reload()) : swal("Product added to cart.",{icon: "success",button: false,timer: 1200}),location.reload();//changes manual whenz
                            // "0" == e ? (alert("Error: could not added in cart this time"), location.reload()) : window.location.href = e;
                             $('#addtocart_loader').hide();
                             $('#addtocart_action').show();
                        },
                        error: function() {
                            alert("Error: could not added in cart this time"), location.reload()
                        }
                    })
                },
                checkout: function(e) {
                    $('#buy_now_loader').show();
                    $('#buy_now_action').hide();
                    fbq('track', 'Purchase', {currency: "INR", value: a.cart.get_price()});
                    var i = new FormData;
                    i.append("cart_id", a.func.url_var("cart_id", "")),
                    i.append("action", "checkout"), i.append("ajax", "frontend"), i.append("nonce", "ANSHUWAP-NONCE:" + a.data.nonce), Object.keys(e).map(function(t) {
                        e[t].product_id = e[t].product, "" !== e[t].product_cms ? e[t].cms_id = e[t].product_cms : e[t].cms_id = 0, e[t].product_name = e[t].name, i.append(t, new Blob([JSON.stringify(a.apply_filters("checkout-item", e[t]))]))
                    }), delete e,t.ajax({
                        data: i,
                        type: "POST",
                        url: a.data.ajax,
                        contentType: !1,
                        processData: !1,
                        
                        success: function(e, i) {
                            "0" == e ? (alert("Error: could not added in cart this time"), location.reload()) : window.location.href = e;
                            // "0" == e ? (alert("Error: could not added in cart this time"), location.reload()) : location.reload();//changes manual whenz
                            // "0" == e ? (alert("Error: could not added in cart this time"), location.reload()) : window.location.href = e;
                            $('#buy_now_loader').hide();
                            $('#buy_now_action').show();
                        },
                        error: function() {
                            alert("Error: could not added in cart this time"), location.reload()
                        }
                    })
                },
                share: function(e) {
                     $("#share_img").hide();
                     $("#shareimage-logo").hide();
                     $("#sharemodel").css('height','350px');
                     $(".webname").hide();
                     $("#share_link_section").hide();
                     $("#share_img1").show();
                    var i = new FormData;
                    i.append("data", e)
                    i.append("action", "share"), i.append("ajax", "frontend"), i.append("nonce", "ANSHUWAP-NONCE:" + a.data.nonce), Object.keys(e).map(function(t) {
                        e[t].product_id = e[t].product, "" !== e[t].product_cms ? e[t].cms_id = e[t].product_cms : e[t].cms_id = 0, e[t].product_name = e[t].name, i.append(t, new Blob([JSON.stringify(a.apply_filters("checkout-item", e[t]))]))
                    }), delete e, t.ajax({
                        data: i,
                        type: "POST",
                        url: a.data.ajax,
                        contentType: !1,
                        processData: !1,
                       
                        // xhr: function() {
                        //     var e = new window.XMLHttpRequest;
                        //     return e.upload.addEventListener("progress", function(e) {
                        //         if (e.lengthComputable) {
                        //             var i = e.loaded / e.total;
                        //             i < 1 ? t("div#designer").attr({
                        //                 "data-msg": parseInt(100 * i) + "% upload complete"
                        //             }) : t("div#designer").attr({
                        //                 "data-msg": a.i(159)
                        //             })
                        //         }
                        //     }, !1), e
                        // },
                        success: function(e, i) {
                            $("#share_img1").hide();
                            $("#share_img").show();
                            $("#sharemodel").css('height','auto');
                            $("#shareimage-logo").show();
                            $(".webname").show();
                            $("#share_link_section").show();
                            var share_url = encodeURIComponent(JSON.parse(e).share_url);
                            var fb_share_url = "https://www.facebook.com/sharer/sharer.php?u="+share_url;
                            var twitter_share_url = "https://twitter.com/share?url="+share_url;
                            var whatsapp_share_url = "whatsapp://send?text="+share_url;
                            var telegram_share_url = "https://telegram.me/share/?url="+share_url;
                             var instagram_share_url = "https://www.instagram.com/arteno_official/?hl=en";
                            // var pinterest_share_url = ""+share_url;
                            t("div#designer").attr({
                                "data-msg": a.i(161)
                            }), 
                            $('#put_share_value').val(JSON.parse(e).share_url);
                            if(a.current_stage=="front")
                                $('#share_img').attr("src",JSON.parse(e).screenshot.front);
                            else
                                $('#share_img').attr("src",JSON.parse(e).screenshot.back);
                            
                            $('#fb_share_url').attr("href", fb_share_url);
                            $('#twitter_share_url').attr("href", twitter_share_url);
                            $('#whatsapp_share_url').attr("href", whatsapp_share_url);
                            $('#telegram_share_url').attr("href", telegram_share_url);
                             $('#instagram_share_url').attr("href", instagram_share_url);
                            // $('#pinterest_share_url')..attr("href", pinterest_share_url);
                            $('#share_modal').modal({show:true});
                        },
                        error: function() {
                            alert("Error: could not share design this time")
                        }
                    })
                },
                wishlist: function(e) {
                $("#loader_publish").show();
                $('#wishlist-button').hide();
                $('#wishlist-loader').show();
                var i = new FormData;
                    i.append("data", e)
                    i.append("action", "wishlist"), i.append("ajax", "frontend"), i.append("nonce", "ANSHUWAP-NONCE:" + a.data.nonce), Object.keys(e).map(function(t) {
                        e[t].product_id = e[t].product, "" !== e[t].product_cms ? e[t].cms_id = e[t].product_cms : e[t].cms_id = 0, e[t].product_name = e[t].name, i.append(t, new Blob([JSON.stringify(a.apply_filters("checkout-item", e[t]))]))
                    }), delete e, t.ajax({
                        data: i,
                        type: "POST",
                        url: a.data.ajax,
                        contentType: !1,
                        processData: !1,
                        // xhr: function() {
                        //     var e = new window.XMLHttpRequest;
                        //     return e.upload.addEventListener("progress", function(e) {
                        //         if (e.lengthComputable) {
                        //             var i = e.loaded / e.total;
                        //             i < 1 ? t("div#designer").attr({
                        //                 "data-msg": parseInt(100 * i) + "% upload complete"
                        //             }) : t("div#designer").attr({
                        //                 "data-msg": a.i(159)
                        //             })
                        //         }
                        //     }, !1), e
                        // },
                        success: function(e, i) {
                            $('#wishlist-button').show();
                            $('#wishlist-loader').hide();
                            $('#loader_publish').hide();
                             t("div#designer").attr({
                                "data-msg": a.i(161)
                            }), "0" == e ? alert("Error: could not added in wishlist this time") : window.location.href = e
                        },
                        error: function() {
                            alert("Error: could not added in wishlist this time")
                        }
                    })
                },
                publish_checkout: function(e) {
                    $("#loader_publish").show();
                    var i = new FormData;
                    i.append("action", "checkout"), i.append("ajax", "frontend"), i.append("nonce", "ANSHUWAP-NONCE:" + a.data.nonce), Object.keys(e).map(function(t) {
                        e[t].product_id = e[t].product, "" !== e[t].product_cms ? e[t].cms_id = e[t].product_cms : e[t].cms_id = 0, e[t].product_name = e[t].name, i.append(t, new Blob([JSON.stringify(a.apply_filters("checkout-item", e[t]))]))
                    }), delete e, a.f(""), t.ajax({
                        data: i,
                        type: "POST",
                        url: a.data.ajax,
                        contentType: !1,
                        processData: !1,
                        
                        xhr: function() {
                            var e = new window.XMLHttpRequest;
                            return e.upload.addEventListener("progress", function(e) {
                                if (e.lengthComputable) {
                                    var i = e.loaded / e.total;
                                    i < 1 ? t("div#designer").attr({
                                        "data-msg": parseInt(100 * i) + "% upload complete"
                                    }) : t("div#designer").attr({
                                        "data-msg": a.i(159)
                                    })
                                }
                            }, !1), e
                        },
                        success: function(e, i) {
                            $('#loader_publish').hide();
                            t("div#designer").attr({
                                "data-msg": a.i(161)
                            }), "0" == e ? alert("Error: could not checkout this time") : window.location.href = e
                        },
                        error: function() {
                            alert("Error: could not checkout this time")
                        }
                    })
                },
                render: function(e) {
                    var i = a.get.el("cart-attributes-color");
                    var j = a.get.el("cart-attributes");
                    if(is_mobile_device || is_mobile)
                        j = a.get.el("cart-attributes-qty");
                        
                    if(is_tab_device)
                        j = a.get.el("cart-attributes-qty");
                        
                    if (i.html(""), void 0 !== e) {
                        a.cart.printing.render(e.printing), a.cart.price.base = parseFloat(e.price);
                        var s = localStorage.getItem("MYCART-DATA");
                        a.func.url_var("cart", ""), s = "" !== s ? JSON.parse(s) : {}, Object.keys(e.attributes).map(function(t) {
                            var s = e.attributes[t];
                            if(s.type=="product_color")
                                a.ops.product_data.attributes[t].allows = s.allows, void 0 === s.value && (s.value = ""), void 0 === s.id && (s.id = a.cart.slug(s.name)), i.append(a.cart.fields.render(s))
                        }), i.append(), a.trigger({
                            el: i,
                            events: {
                                ".designer-cart-param:change": "calc_cart",
                                'a[href="#formula"]': "formula"
                            },
                            calc_cart: function(e) {
                                t("#designer-cart-attributes em.designer-required-msg").remove(), a.cart.variations(this), a.cart.calc(), a.render.cart_change(), a.actions.do("cart-changed", !0)
                            },
                            formula: function(e) {
                                e.preventDefault();
                                var i = a.cart.sum_calc(),
                                    s = !1;
                                if (a.data.printings.length > 0) {
                                    var n = a.data.printings.filter(function(t) {
                                        return t.id == a.cart.printing.current
                                    });
                                    s = n.length > 0 && ("" !== n[0].description || void 0 !== n[0].calculate.show_detail && 1 == n[0].calculate.show_detail) && a.cart.printing.calc(a.cart.qty) > 0
                                }
                                var o = "",
                                    r = void 0 !== a.ops.product_data.variations && void 0 !== a.ops.product_data.variations.variations && void 0 !== a.ops.product_data.variations.variations[a.data.variation] ? a.ops.product_data.variations.variations[a.data.variation] : null;
                                null !== a.data.variation && null !== r && (o += '<p class="notice">' + a.i(193) + " <strong>#" + a.data.variation + "</strong>" + ("" !== r.price ? ", " + a.i(182) + ": <strong>" + r.price + "</strong>" : "") + ("" !== r.minqty ? ", min-qty: <strong>" + r.minqty + "</strong>" : "") + ("" !== r.maxqty ? ", max-qty: <strong>" + r.maxqty + "</strong>" : "") + "</p>"), a.tools.lightbox({
                                    content: '<div class="designer_content designer_wrapper_table">\t\t\t\t\t\t\t\t<h3 class="title">' + a.i(180) + " (" + a.i(181) + ')</h3>\t\t\t\t\t\t\t\t<div id="designer-formula-detail">\t\t\t\t\t\t\t\t\t' + o + '\t\t\t\t\t\t\t\t\t<table>\t\t\t\t\t\t\t\t\t\t<tr>\t\t\t\t\t\t\t\t\t\t\t<td style="width:20%;text-align: left">' + a.i(182) + "</td>\t\t\t\t\t\t\t\t\t\t\t<td>" + a.func.price(i.base) + '</td>\t\t\t\t\t\t\t\t\t\t</tr>\t\t\t\t\t\t\t\t\t\t<tr>\t\t\t\t\t\t\t\t\t\t\t<td style="width:20%;text-align: left">' + a.i(91) + "</td>\t\t\t\t\t\t\t\t\t\t\t<td>" + a.func.price(i.template) + '</td>\t\t\t\t\t\t\t\t\t\t</tr>\t\t\t\t\t\t\t\t\t\t<tr>\t\t\t\t\t\t\t\t\t\t\t<td style="width:20%;text-align: left">' + a.i(108) + "</td>\t\t\t\t\t\t\t\t\t\t\t<td>" + a.func.price(a.cart.printing.calc(a.cart.qty)) + (s ? ' &nbsp; <a href="#" data-print="' + n[0].id + '">' + a.i(68) + ' <i class="fa fa-open-cart"></i></a>' : "") + '</td>\t\t\t\t\t\t\t\t\t\t</tr>\t\t\t\t\t\t\t\t\t\t<tr>\t\t\t\t\t\t\t\t\t\t\t<td style="width:20%;text-align: left">' + a.i(183) + "</td>\t\t\t\t\t\t\t\t\t\t\t<td>" + a.func.price(i.ext) + '</td>\t\t\t\t\t\t\t\t\t\t</tr>\t\t\t\t\t\t\t\t\t\t<tr>\t\t\t\t\t\t\t\t\t\t\t<td style="width:20%;text-align: left">' + a.i(74) + "</td>\t\t\t\t\t\t\t\t\t\t\t<td><strong>" + a.func.price(i.ext + i.base + i.template + a.cart.printing.calc(a.cart.qty)) + "</strong> x " + a.cart.qty + " qty</td>\t\t\t\t\t\t\t\t\t\t</tr>\t\t\t\t\t\t\t\t\t</table>\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t</div>"
                                }), t("#designer-formula-detail a[data-print]").on("click", function(t) {
                                    t.preventDefault(), a.func.print_detail(this.getAttribute("data-print"))
                                })
                            }
                        }), a.cart.calc(), a.trigger({
                            el: t(".designer-add-cart-btn"),
                            events: {
                                ":click": "submit_cart"
                            },
                            submit_cart: function(e) {
                                var i = t("#designer-cart-form");
                                i.find("input[name=data]").val(JSON.stringify(a.cart.data)), i.find("input[name=product]").val(a.data.product), i.submit()
                            }
                        }), a.actions.do("cart-render", i)
                    }
                    if (j.html(""), void 0 !== e) {
                        a.cart.printing.render(e.printing), a.cart.price.base = parseFloat(e.price);
                        var s = localStorage.getItem("MYCART-DATA");
                        a.func.url_var("cart", ""), s = "" !== s ? JSON.parse(s) : {}, Object.keys(e.attributes).map(function(t) {
                            var s = e.attributes[t];
                            if(s.type!="product_color") {
                                a.ops.product_data.attributes[t].allows = s.allows, void 0 === s.value && (s.value = ""), void 0 === s.id && (s.id = a.cart.slug(s.name)), j.append(a.cart.fields.render(s))
                            }
                        }), j.append(), a.trigger({
                            el: j,
                            events: {
                                ".designer-cart-param:change": "calc_cart",
                                'a[href="#formula"]': "formula"
                            },
                            calc_cart: function(e) {
                                t("#designer-cart-attributes1 em.designer-required-msg").remove(), a.cart.variations(this), a.cart.calc(), a.render.cart_change(), a.actions.do("cart-changed", !0)
                                t("#designer-cart-qty em.designer-required-msg").remove(), a.cart.variations(this), a.cart.calc(), a.render.cart_change(), a.actions.do("cart-changed", !0)
                            },
                            formula: function(e) {
                                e.preventDefault();
                                var i = a.cart.sum_calc(),
                                    s = !1;
                                if (a.data.printings.length > 0) {
                                    var n = a.data.printings.filter(function(t) {
                                        return t.id == a.cart.printing.current
                                    });
                                    s = n.length > 0 && ("" !== n[0].description || void 0 !== n[0].calculate.show_detail && 1 == n[0].calculate.show_detail) && a.cart.printing.calc(a.cart.qty) > 0
                                }
                                var o = "",
                                    r = void 0 !== a.ops.product_data.variations && void 0 !== a.ops.product_data.variations.variations && void 0 !== a.ops.product_data.variations.variations[a.data.variation] ? a.ops.product_data.variations.variations[a.data.variation] : null;
                                null !== a.data.variation && null !== r && (o += '<p class="notice">' + a.i(193) + " <strong>#" + a.data.variation + "</strong>" + ("" !== r.price ? ", " + a.i(182) + ": <strong>" + r.price + "</strong>" : "") + ("" !== r.minqty ? ", min-qty: <strong>" + r.minqty + "</strong>" : "") + ("" !== r.maxqty ? ", max-qty: <strong>" + r.maxqty + "</strong>" : "") + "</p>"), a.tools.lightbox({
                                    content: '<div class="designer_content designer_wrapper_table">\t\t\t\t\t\t\t\t<h3 class="title">' + a.i(180) + " (" + a.i(181) + ')</h3>\t\t\t\t\t\t\t\t<div id="designer-formula-detail">\t\t\t\t\t\t\t\t\t' + o + '\t\t\t\t\t\t\t\t\t<table>\t\t\t\t\t\t\t\t\t\t<tr>\t\t\t\t\t\t\t\t\t\t\t<td style="width:20%;text-align: left">' + a.i(182) + "</td>\t\t\t\t\t\t\t\t\t\t\t<td>" + a.func.price(i.base) + '</td>\t\t\t\t\t\t\t\t\t\t</tr>\t\t\t\t\t\t\t\t\t\t<tr>\t\t\t\t\t\t\t\t\t\t\t<td style="width:20%;text-align: left">' + a.i(91) + "</td>\t\t\t\t\t\t\t\t\t\t\t<td>" + a.func.price(i.template) + '</td>\t\t\t\t\t\t\t\t\t\t</tr>\t\t\t\t\t\t\t\t\t\t<tr>\t\t\t\t\t\t\t\t\t\t\t<td style="width:20%;text-align: left">' + a.i(108) + "</td>\t\t\t\t\t\t\t\t\t\t\t<td>" + a.func.price(a.cart.printing.calc(a.cart.qty)) + (s ? ' &nbsp; <a href="#" data-print="' + n[0].id + '">' + a.i(68) + ' <i class="fa fa-open-cart"></i></a>' : "") + '</td>\t\t\t\t\t\t\t\t\t\t</tr>\t\t\t\t\t\t\t\t\t\t<tr>\t\t\t\t\t\t\t\t\t\t\t<td style="width:20%;text-align: left">' + a.i(183) + "</td>\t\t\t\t\t\t\t\t\t\t\t<td>" + a.func.price(i.ext) + '</td>\t\t\t\t\t\t\t\t\t\t</tr>\t\t\t\t\t\t\t\t\t\t<tr>\t\t\t\t\t\t\t\t\t\t\t<td style="width:20%;text-align: left">' + a.i(74) + "</td>\t\t\t\t\t\t\t\t\t\t\t<td><strong>" + a.func.price(i.ext + i.base + i.template + a.cart.printing.calc(a.cart.qty)) + "</strong> x " + a.cart.qty + " qty</td>\t\t\t\t\t\t\t\t\t\t</tr>\t\t\t\t\t\t\t\t\t</table>\t\t\t\t\t\t\t\t</div>\t\t\t\t\t\t\t</div>"
                                }), t("#designer-formula-detail a[data-print]").on("click", function(t) {
                                    t.preventDefault(), a.func.print_detail(this.getAttribute("data-print"))
                                })
                            }
                        }), a.cart.calc(), a.trigger({
                            el: t(".designer-add-cart-btn"),
                            events: {
                                ":click": "submit_cart"
                            },
                            submit_cart: function(e) {
                                var i = t("#designer-cart-form");
                                i.find("input[name=data]").val(JSON.stringify(a.cart.data)), i.find("input[name=product]").val(a.data.product), i.submit()
                            }
                        }), a.actions.do("cart-render", j)
                    }
                },
                validate_file: function(t) {
                    return -1 !== ["image/png", "image/jpeg", "image/gif", "image/svg+xml", "application/zip", "text/plain", ".docx"].indexOf(t.type) && !(t.size > 5242880)
                },
                slug: function(t, e) {
                    return null == e ? encodeURIComponent(t) : decodeURIComponent(t)
                },
                fields: {
                    render: function(e) {
                        var i = a.attributes_cfg[e.type];
                        if (void 0 === i || void 0 === i.render || "" === i.render) return "";
                        if ("function" != typeof i.frontend_render) try {
                            i.frontend_render = Function("data", "$", "lumise", i.render)
                        } catch (a) {
                            return t("<p>JS Error: field render <b>" + e.type + "</b> :: " + a.message + "</p>")
                        }
                        if ("object" == typeof e.value && (e.value = e.value[0]), "object" != typeof e.values)
                            if ("string" == typeof e.values) {
                                var s = e.values.split(decodeURI("%0A"));
                                !0 === e.use_variation ? (e.required = !0, e.values = [{
                                    value: "",
                                    title: a.i(178)
                                }]) : e.values = [], s.map(function(t) {
                                    t = t.split("|"), "object" == typeof e.allows && -1 === e.allows.indexOf(t[0].trim()) || e.values.push({
                                        value: t[0].trim(),
                                        title: void 0 !== t[1] ? t[1].trim() : t[0].trim()
                                    })
                                })
                            } else void 0 !== e.options && (e.values = [], e.options.map(function(t) {
                                e.values.push({
                                    value: void 0 !== t.quantity ? t.quantity : "",
                                    title: void 0 !== t.title ? t.title : ""
                                })
                            }));
                        void 0 === e.id && (e.id = encodeURIComponent(e.name));
                        
                        // this code is written to write quantity varation label to Qty in mobile view comment it for actual data and replace attrlabel by e.name in line number 6544
                        // var attrlabel="";
                        // if(e.name=="quantity"|| e.name=="Quantity"){
                        //     if(mobileCheck==true){
                        //         attrlabel='Qty';
                        //     }else{
                        //         attrlabel='Quantity';
                        //     }}
                        // else{
                        //         attrlabel=e.name;
                        //     }
                        
                            
                        
                        
                        
                        var n = t('<div data-type="' + e.type + '" data-id="' + (void 0 !== e.id ? e.id : "") + '" class="designer-cart-field field-inline custom_' + (void 0 !== e.id ? e.id : "") + '">\t\t\t\t\t\t\t<div class="designer_form_group">\t\t\t\t\t\t\t\t<span class="designer-cart-field-label custom_label_' + (void 0 !== e.id ? e.id : "") + '">' + e.name + ": " + (e.required ? ' <em class="required">*</em>' : "") + '\t\t\t\t\t\t\t\t</span>\t\t\t\t\t\t\t\t<div class="designer_form_content"></div>\t\t\t\t\t\t\t</div>\t\t\t\t\t\t</div>'),
                            o = i.frontend_render(e, t, a);
                        return n.find("div.designer_form_content").append(o), n
                    },
                    printing: function(e) {
                        var a = t('<div class="designer_radios">\t\t\t\t\t\t\t\t\t\t<div class="designer-radio">\t\t\t\t                \t\t\t<input type="radio" class="designer-cart-param" name="printing" value="1" id="" required>\t\t\t\t\t\t\t                <label class="designer-cart-option-label" for=""></label>\t\t\t\t\t\t\t            </div>\t\t\t\t\t\t\t\t\t</div>'),
                            i = a.find(".designer-cart-field-label"),
                            s = a.find(".designer-cart-param");
                        return i.html((e.label ? e.label : e.title) + ": " + (e.required ? '<em class="required">*</em>' : "") + ' <em class="designer-required-msg"></em>'), s.attr("name", e.name), e.required || s.removeAttr("required"), {
                            el: a,
                            inp: s,
                            label: i
                        }
                    }
                },
                display: function() {
                    var e = a.cart.get_price(!0);
                    $(".counter_price").attr("data-to",e[0]),t("#designer-product-attributes .designer-product-price").append("<avg>\t\t\t\t\t\t<strong>" + a.i(156) + ":</strong> " + a.func.price((e[0] / e[1]).toFixed(1)) + "/" + a.i(157) + "</avg>")
                    $('.counter_price').counter();
                },
                printing: {
                    price: 0,
                    states_data: {},
                    current: null,
                    render: function(e) {
                        if (a.cart.printing.price = 0, a.cart.printing.current = e || null, t("#designer-cart-wrp .designer-prints").html(""), a.data.printings && 0 !== a.data.printings.length) {
                            var i = t('<div class="designer-cart-field">\t\t\t\t\t\t<div class="designer_form_group">\t\t\t\t\t\t\t<span class="designer-cart-field-label">' + a.i(64) + ' <em class="required">*</em></span>\t\t\t\t\t\t\t<div class="designer_form_content">\t\t\t\t\t\t\t\t<div class="designer_radios"></div>\t\t\t\t\t\t\t</div>\t\t\t\t\t\t</div>\t\t\t\t\t</div>');
                            a.data.printings.map(function(e, s) {
                                e.thumbnail = e.thumbnail || a.data.assets + "assets/images/print-default.jpg";
                                var n = "designer-printing-" + e.id,
                                    o = "" !== e.description || void 0 !== e.calculate.show_detail && 1 == e.calculate.show_detail,
                                    r = t('<div class="designer-radio">\t                \t\t\t<input type="radio" class="designer-cart-param" name="printing" value="' + e.id + '" data-id="' + e.id + '" id="' + n + '" required>\t\t\t\t                <label class="designer-cart-option-label" for="' + n + '">\t\t\t\t                \t<div class="designer-cart-option-thumb">\t\t\t\t                \t\t<img src="' + e.thumbnail + '" alt="" />\t\t\t\t                \t</div>\t\t\t\t\t\t\t\t\t<div class="designer-desc">\t\t\t\t\t\t\t\t\t\t<span>' + e.title + "</span>" + (o ? ' <a href="#" class="designer-color designer-print-detail" data-id="' + e.id + '">' + a.i(68) + "</a>" : "") + "</div>\t\t\t\t                </label>\t\t\t\t            </div>");
                                a.trigger({
                                    el: r,
                                    events: {
                                        "a.designer-print-detail": "price_table",
                                        "input:change": "select_printing"
                                    },
                                    price_table: function(t) {
                                        t.preventDefault(), a.func.print_detail(this.getAttribute("data-id"))
                                    },
                                    select_printing: function(e) {
                                        a.cart.printing.current = parseInt(t(this).val()), a.cart.calc()
                                    }
                                }), i.find("div.designer_radios").append(r), !0 === e.active && (a.cart.printing.current = e.id)
                            }), t(".designer-prints").append(i), null === a.cart.printing.current && a.data.printings.length > 0 && (a.data.printings[0].active = !0, a.cart.printing.current = a.data.printings[0].id), null !== a.cart.printing.current && t("#designer-printing-" + a.cart.printing.current).trigger("click")
                        }
                    },
                    calc: function(t) {
                        if (0 == a.data.printings.length || null == a.cart.printing.current) return 0;
                        var e, i, s = null,
                            n = "",
                            o = [],
                            r = [],
                            l = 0,
                            c = a.cart.printing.states_data,
                            d = -1,
                            u = 0,
                            p = a.data.printings.filter(function(t) {
                                return a.cart.printing.current == t.id
                            });
                        if (!(p.length > 0)) return 0;
                        if ("string" == typeof(s = p[0]).calculate && (s.calculate = a.func.dejson(s.calculate)), i = s.calculate.type, void 0 === (e = s.calculate.values)) return 0;
                        var g = 0;
                        for (var f in c)
                            if (n = g, s.calculate.multi || (n = 0), 0 != (o = e[n = Object.keys(e)[n]] ? Object.keys(e[n]) : []).length) {
                                o.sort(function(t, e) {
                                    return parseInt(t) - parseInt(e)
                                });
                                for (var m = 0; m < o.length; m++)(!isNaN(o[m]) && parseInt(o[m]) < t || isNaN(o[m]) && o[m].indexOf(">") > -1 && parseInt(o[m].replace(">")) + 1 <= t) && (d = m);
                                for (var h in r = void 0 !== o[d + 1] ? e[n][o[d + 1]] : e[n][o[d]], u = 0, c[f]) {
                                    var v = c[f][h],
                                        b = h;
                                    "color" == i && "colors" == h && c[f][h].length > 0 && (v = 1, l += void 0 !== r[b = void 0 === r[b = c[f][h].length + "-color"] ? "full-color" : b] ? parseFloat(r[b]) : 0), "color" !== i && void 0 !== r[b] && (l += r[b] * v), "array" != typeof c[f][h] && parseInt(c[f][h]) > 0 && u++
                                }
                                if ("size" == i && u > 0 && void 0 !== a.data.printings_cfg) {
                                    var _ = a.cart.printing.current,
                                        x = a.data.printings_cfg,
                                        w = void 0 !== x["_" + _] ? x["_" + _] : x[_];
                                    if (l += void 0 !== w && void 0 !== r[w] ? parseFloat(r[w]) : 0, !s.calculate.multi) return l
                                }
                                if ("fixed" == i && u > 0 && void 0 !== r.price && (l += parseFloat(r.price), !s.calculate.multi)) return l;
                                g++
                            } return l
                    }
                },
                edit_item: function(t, e) {
                    var i = JSON.parse(localStorage.getItem("MYCART-DATA"))[t];
                    i && (a.get.el("general-status").html('<span>\t\t\t\t\t\t\t<text><i class="fa fa-exclamation-triangle"></i> ' + a.i(115) + '</text> \t\t\t\t\t\t\t<a href="#clear-designs" data-btn="cancel" data-func="clear-designs">\t\t\t\t\t\t\t\t' + a.i(185) + "\t\t\t\t\t\t\t</a>\t\t\t\t\t\t</span>"), a.actions.do("cart_edit", a.apply_filters("cart_edit", i)), delete data), e && "function" == typeof e.preventDefault && e.preventDefault()
                },
                do_checkout: function(t) {
                    void 0 !== t && "function" == typeof t.preventDefault && t.preventDefault();
                    var e = function() {
                        try {
                            var t = JSON.parse(localStorage.getItem("MYCART-DATA")),
                                e = 0,
                                i = function(i) {
                                    e++, t[i.id].design = i, e === Object.keys(t).length ? a.actions.do("checkout", a.apply_filters("checkout", t)) : a.f(!1)
                                };
                            a.f(a.i(44)), Object.keys(t).map(function(t) {
                                a.indexed.get(t, "cart", i)
                            })
                        } catch (t) {
                            console.warn(t), console.log(t)
                        }
                    };
                    if ("" !== a.data.conditions) {
                        var i = a.func.dejson(a.data.conditions).replace(/\>/g, "&gt;") + '<em><input type="checkbox" id="condition-agree" /> <label for="condition-agree">' + a.i(177) + ' <font color="red">*</font></label></em>';
                        a.func.confirm({
                            title: i,
                            primary: {
                                text: a.i(175),
                                callback: function(t) {
                                    if (!0 !== a.get.el("confirm").find('input[type="checkbox"]').prop("checked")) return a.get.el("confirm").find('input[type="checkbox"]').shake(), !1;
                                    e()
                                }
                            },
                            second: {}
                        })
                    } else e()
                },
                do_manualcart: function(t) {
                    void 0 !== t && "function" == typeof t.preventDefault && t.preventDefault();
                    var e = function() {
                        try {
                            var t = JSON.parse(localStorage.getItem("MYCART-DATA")),
                                e = 0,
                                i = function(i) {
                                    e++, t[i.id].design = i, e === Object.keys(t).length ? a.actions.do("manualcart", a.apply_filters("manualcart", t)) : a.f(!1)
                                };
                            a.f(a.i(44)), Object.keys(t).map(function(t) {
                                a.indexed.get(t, "cart", i)
                            })
                        } catch (t) {
                            console.warn(t), console.log(t)
                        }
                    };
                    if ("" !== a.data.conditions) {
                        var i = a.func.dejson(a.data.conditions).replace(/\>/g, "&gt;") + '<em><input type="checkbox" id="condition-agree" /> <label for="condition-agree">' + a.i(177) + ' <font color="red">*</font></label></em>';
                        a.func.confirm({
                            title: i,
                            primary: {
                                text: a.i(175),
                                callback: function(t) {
                                    if (!0 !== a.get.el("confirm").find('input[type="checkbox"]').prop("checked")) return a.get.el("confirm").find('input[type="checkbox"]').shake(), !1;
                                    e()
                                }
                            },
                            second: {}
                        })
                    } else e()
                },
                do_share: function(e) {
                    void 0 !== t && "function" == typeof t.preventDefault && t.preventDefault();
                    var ee = function() {
                        try {
                            var t = JSON.parse(localStorage.getItem("MYSHARE-DATA")),
                                e = 0,
                                i = function(i) {
                                    
                                    e++, t[i.id].design = i, e === Object.keys(t).length ? a.actions.do("share", t) : a.f(!1)
                                };
                            Object.keys(t).map(function(t) {
                                a.indexed.get(t, "cart", i)
                            });
                        } catch (t) {
                            console.warn(t), console.log(t)
                        }
                    };
                    // if ("" !== a.data.conditions) {
                    //     var i = a.func.dejson(a.data.conditions).replace(/\>/g, "&gt;") + '<em><input type="checkbox" id="condition-agree" /> <label for="condition-agree">' + a.i(177) + ' <font color="red">*</font></label></em>';
                    //     a.func.confirm({
                    //         title: i,
                    //         primary: {
                    //             text: a.i(175),
                    //             callback: function(t) {
                    //                 if (!0 !== a.get.el("confirm").find('input[type="checkbox"]').prop("checked")) return a.get.el("confirm").find('input[type="checkbox"]').shake(), !1;
                    //                 e()
                    //             }
                    //         },
                    //         second: {}
                    //     })
                    // } else e()
                    ee()
                },
                do_wishlist: function(e) {
                    void 0 !== t && "function" == typeof t.preventDefault && t.preventDefault();
                    var ee = function() {
                        try {
                            var t = JSON.parse(localStorage.getItem("MYWISHLIST-DATA")),
                                e = 0,
                                i = function(i) {
                                    
                                    e++, t[i.id].design = i, e === Object.keys(t).length ? a.actions.do("wishlist", t) : a.f(!1)
                                };
                            Object.keys(t).map(function(t) {
                                a.indexed.get(t, "cart", i)
                            });
                        } catch (t) {
                            console.warn(t), console.log(t)
                        }
                    };
                    // if ("" !== a.data.conditions) {
                    //     var i = a.func.dejson(a.data.conditions).replace(/\>/g, "&gt;") + '<em><input type="checkbox" id="condition-agree" /> <label for="condition-agree">' + a.i(177) + ' <font color="red">*</font></label></em>';
                    //     a.func.confirm({
                    //         title: i,
                    //         primary: {
                    //             text: a.i(175),
                    //             callback: function(t) {
                    //                 if (!0 !== a.get.el("confirm").find('input[type="checkbox"]').prop("checked")) return a.get.el("confirm").find('input[type="checkbox"]').shake(), !1;
                    //                 e()
                    //             }
                    //         },
                    //         second: {}
                    //     })
                    // } else e()
                    ee()
                },
                
            },
            load: function() {
                if ("function" == typeof designer && designer(this)) {
                    for (var e in this.html = document.querySelector("html"), this.body = document.querySelector("body"), this.func.get_cookie("lumise-AID") || this.func.set_cookie("lumise-AID", Math.random().toString(36).substr(2)), fabric.Object.prototype.set({
                            cornerSize: "basic" == this.mode ? 14 : 22,
                            borderColor: "rgba(205,205,205,0.5)",
                            centeredRotation: !0,
                            centeredScaling: !0,
                            rotatingPointOffset: "basic" == this.mode ? 50 : 0
                        }), this.extends.controls) fabric.Object.prototype[e] = this.extends.controls[e];
                    for (var e in this.extends.canvas) fabric.Canvas.prototype[e] = this.extends.canvas[e];
                    this.actions.add("object:selected", function(t) {
                        var e = [],
                            i = a.stage();
                        !0 !== a.func.ctrl_btns(t) && (i.canvas.getActiveObject() ? (e.push(i.canvas.getActiveObject()), a.tools.set()) : (e = i.canvas.getActiveGroup()._objects, a.e.tools.attr({
                            "data-view": "default"
                        })), a.e.layers.find("li[data-id].active").removeClass("active"), 0 !== e.length && (i.limit_zone.set("visible", !0), e.map(function(t) {
                            !1 !== t.selectable && a.e.layers.find('li[data-id="' + t.id + '"]').addClass("active")
                        })))
                    }), this.actions.add("object:added", function(t) {
                        var e = new Date,
                            i = t.target;
                        if (void 0 === i.id ? i.set("id", parseInt(e.getTime() / 1e3).toString(36) + "-" + Math.random().toString(36).substr(2)) : i.id.indexOf(":") > -1 ? i.set("id", i.id.replace(/\:/g, "-")) : -1 === i.id.indexOf("-") && i.set("id", parseInt(e.getTime() / 1e3).toString(36) + "-" + i.id), void 0 === i.origin_src && i._element && i._element && i.set("origin_src", i._element.src), "i-text" == i.type && i.set("padding", 5), !1 !== i.evented) {
                            switch (i.type) {
                                case "i-text":
                                    i.set("thumbn", '<i class="lumisex-character layer-type" style="color:%color%;background:%bgcolor%"></i>');
                                    break;
                                case "curvedText":
                                    i.set("thumbn", '<i class="lumisex-vector layer-type" style="color:%color%;background:%bgcolor%"></i>');
                                    break;
                                case "image":
                                    a.func.createThumbn({
                                        source: i.src,
                                        width: 50,
                                        height: 50,
                                        callback: function(t) {
                                            i.set("thumbn", '<img class="layer-type" style="background:%color%" src="' + t.toDataURL("image/jpeg") + '" />'), void 0 === i.colors && i.set("colors", a.func.count_colors(t, !0))
                                        }
                                    });
                                    break;
                                case "qrcode":
                                    i.set("thumbn", '<i class="fa fa-qrcode layer-type" style="color:%color%;background:%bgcolor%"></i>');
                                    break;
                                case "path":
                                    i.set("thumbn", '<i class="lumise-icon-graph layer-type" style="color:%color%;background:%bgcolor%"></i>');
                                    break;
                                case "svg":
                                    a.func.createThumbn({
                                        source: i.src,
                                        width: 24,
                                        height: 24,
                                        callback: function(t) {
                                            i.set("thumbn", '<img class="layer-type" style="background:%color%" src="' + t.toDataURL("image/jpeg", .5) + '" />')
                                        }
                                    });
                                    break;
                                default:
                                    i.set("thumbn", '<i class="lumise-icon-picture layer-type" style="color:%color%;background:%bgcolor%"></i>')
                            }
                            a.func.font_blob(i)
                        }
                    }), this.actions.add("selection:cleared", function() {
                        a.e.tools.attr({
                            "data-view": "standard"
                        }), a.stage().limit_zone.set("visible", !1)
                    }), this.actions.add("key-move", function(t) {
                        var e = a.stage().canvas,
                            i = e.getActiveObject() || e.getActiveGroup();
                        if (null != i) {
                            var s = i.left,
                                n = i.top;
                            if (i) {
                                switch (t.preventDefault(), t.keyCode) {
                                    case 37:
                                        s = i.left - (t.shiftKey ? 10 : 1);
                                        break;
                                    case 38:
                                        n = i.top - (t.shiftKey ? 10 : 1);
                                        break;
                                    case 39:
                                        s = i.left + (t.shiftKey ? 10 : 1);
                                        break;
                                    case 40:
                                        n = i.top + (t.shiftKey ? 10 : 1)
                                }
                                i.group_pos && e.getObjects().map(function(t) {
                                    t.group_pos && t.id != i.id && t.set({
                                        left: t.left + (s - i.left),
                                        top: t.top + (n - i.top)
                                    })
                                }), i.set({
                                    top: n,
                                    left: s
                                }), e.renderAll()
                            }
                        }
                    }), this.actions.add("key-enter", function(t) {
                        return a.stage().canvas.deactivateAllWithDispatch().renderAll()
                    }), this.actions.add("key-esc", function(t) {
                        !0 === a.stage().canvas.isDrawingMode && a.get.el("discard-drawing").trigger("click")
                    }), this.actions.add("ctrl-z", a.stack.back), this.actions.add("ctrl-shift-z", a.stack.forward), this.actions.add("ctrl-a", function(t) {
                        if ("INPUT" == t.target.tagName || null !== t.target.getAttribute("contenteditable")) return !0;
                        var e = a.stage().canvas,
                            i = e.getObjects().filter(function(t) {
                                return !0 === t.evented && (void 0 === t.imagebox || "" === t.imagebox) && (t.set("active", !0), !0)
                            });
                        if (0 === i.length) return t.preventDefault(), !1;
                        var s = new fabric.Group(i, {
                            originX: "center",
                            originY: "center"
                        });
                        return e._activeObject = null, e.setActiveGroup(s.setCoords()).renderAll(), a.objects.events["mouse:up"](t), t.preventDefault(), !1
                    }), this.actions.add("ctrl-d", function(t) {
                        var e = a.stage().canvas,
                            i = e.getActiveObject();
                        return i && (i.clone(function(t) {
                            e.add(t.set({
                                left: 1.1 * t.left,
                                top: t.top + (1.1 * t.left - t.left),
                                clipTo: function(e) {
                                    return a.objects.clipto(e, t)
                                }
                            }))
                        }), setTimeout(function() {
                            a.stage().canvas.renderAll()
                        }, 150), a.design.layers.build()), t.preventDefault(), !1
                    }), this.actions.add("ctrl+", function(t) {
                        return a.get.el("zoom").val(parseInt(a.get.el("zoom").val()) + 20).trigger("input"), t.preventDefault(), !1
                    }), this.actions.add("ctrl-", function(t) {
                        return a.get.el("zoom").val(parseInt(a.get.el("zoom").val()) - 20).trigger("input"), t.preventDefault(), !1
                    }), this.actions.add("ctrl-0", function(t) {
                        return a.get.el("zoom").val(100).trigger("input"), t.preventDefault(), !1
                    }), this.actions.add("zoom100", function(t) {
                        return a.get.el("zoom").val(100).trigger("input"), t.preventDefault(), !1
                    }), this.actions.add("ctrl-s", function(t) {
                        return t.preventDefault(), "" !== a.func.url_var("cart", "") ? a.cart.add_cart(t) : a.func.export("designs")
                    }), this.actions.add("key-delete", function(t) {
                        var e = a.stage().canvas,
                            i = e.getActiveGroup() ? e.getActiveGroup()._objects : e.getObjects(),
                            s = [];
                        i.map(function(t) {
                            !0 === t.evented && !0 === t.active && s.push(t)
                        }), a.stack.save(), a.tools.discard(), s.map(function(t) {
                            e.remove(t)
                        }), e.renderAll(), a.stack.save(), a.design.layers.build(), a.actions.do("object:remove")
                    }), this.actions.add("save", a.func.update_state), this.actions.add("cart_edit", function(e) {
                        t(".designer-lightbox").remove(), a.indexed.get(e.id, "cart", function(t) {
                            a.func.load_product({
                                id: e.product,
                                cms: e.product_cms,
                                printing: e.printing,
                                options: e.options,
                                template: e.template,
                                stages: t.stages,
                                callback: function(t) {
                                    if (void 0 === t.id) return a.f(!1), void a.func.notice("ERROR_LOAD_PRODUCT", "error", 3500);
                                    a.get.el("general-status").html('<span>\t\t\t\t\t\t\t\t\t\t<text>\t\t\t\t\t\t\t\t\t\t\t<i class="fa fa-exclamation-triangle"></i> ' + a.i(186) + " <strong>#" + e.id + '</strong></text>\t\t\t\t\t\t\t\t\t\t<a href="#cancel-design" data-btn="cancel" data-func="cancel-design">\t\t\t\t\t\t\t\t\t\t\t' + a.i(187) + "\t\t\t\t\t\t\t\t\t\t</a>\t\t\t\t\t\t\t\t\t</span>")
                                }
                            })
                        }), a.func.clear_url(), a.func.set_url("cart", e.id), a.render.cart_change()
                    }), this.actions.add("active_stage", function() {
                        var e = [],
                            i = "";
                        if (void 0 !== a.cart.printing.states_data[a.current_stage]) {
                            for (var s = a.cart.printing.states_data[a.current_stage].colors, n = 0; n < 6; n++) s[n] && e.push(s[n]);
                            s.length > 6 && (i = s.length - 6 + "+")
                        }
                        t("#designer-count-colors i").html(i).css({
                            background: "linear-gradient(to right, " + e.join(", ") + ")"
                        })
                    }), this.actions.add("db-ready", function() {
                        try {
                            var t = JSON.parse(localStorage.getItem("MYCART-DATA"))
                        } catch (e) {
                            t = null
                        }
                        var e = !1;
                        if ("" !== a.func.url_var("cart", "") && (null !== t && void 0 !== t[a.func.url_var("cart")] ? e = !0 : a.func.notice(a.i(120), "error", 3500)), !0 === e) a.cart.edit_item(a.func.url_var("cart"));
                        else if ("" !== a.func.url_var("my_design", "")) {
                            var i = a.func.url_var("my_design");
                            a.indexed.get(i, "designs", function(t) {
                                a.indexed.get(i, "dumb", function(e) {
                                    null !== t && null !== e ? (t.stages = e.stages, a.func.edit_design(t)) : a.func.notice(a.i(166), "error", 3500)
                                })
                            })
                        } else a.data.onload ? (a.f(a.i("importing") + ".."), a.func.set_url("cart", null), setTimeout(function() {
                            void 0 !== a.data.share && Object.keys(a.data.onload.stages).map(function(t) {
                                delete a.data.onload.stages[t].template
                            }), a.render.product(a.data.onload), delete a.data.onload
                        }, 100)) : "" === a.func.url_var("reorder", "") && a.get.el("no-product").length > 0 && (a.f(!1), a.actions.do("noproduct"));
                        void 0 !== a.data.share_invalid && a.func.confirm({
                            title: a.data.share_invalid,
                            primary: {},
                            second: {
                                text: "Ok"
                            },
                            type: "error"
                        });
                        var s = localStorage.getItem("MYCART-DATA");
                        s && "" !== s && (s = Object.keys(JSON.parse(s)), a.indexed.list(function(t) {
                            -1 === s.indexOf(t.id) && a.indexed.delete(t.id, "cart")
                        }, "cart", function(t) {
                            "done" == t && (a.ops.cart_cursor = null)
                        }))
                    }), this.actions.add("load-data", function() {
                        
                        if(a.func.url_var("shares", "") != "" || a.func.url_var("wishlist", "") != "" || a.func.url_var("cart_id", "") != "" || a.func.url_var("template", "") != "")
                            a.f("loading");

                        designs_print_url = a.data.upload_url + "cart_data/" + a.func.url_var("design_print", "") + ".mytpl";
                        var order_type= a.func.url_var("order_type", "");
                        if(order_type=='designer'){
                            designs_print_url = a.data.upload_url + a.func.url_var("design_print", "")
                        }
                        "" !== a.func.url_var("shares", "") && (a.f(""), t.ajax({
                            url: a.data.upload_url + "share_data/" + a.func.url_var("shares", "") + ".mytpl",
                            method: "GET",
                            dataType: "JSON",
                            statusCode: {
                                403: a.response.statusCode[403],
                                404: function() {
                                    a.func.notice(a.i(123), "error", 3500), a.f(!1)
                                },
                                200: function(t) {
                                    if (null === t) return a.func.notice(a.i(166), "error", 3500), void a.f(!1);
                                    a.func.clear_url(["shares"]), a.func.load_product({
                                        id: t.product,
                                        cms: t.product_cms,
                                        printing: t.printing,
                                        options: t.options,
                                        template: t.template,
                                        stages: t.stages,
                                        callback: function(t) {
                                            if (void 0 === t.id) return a.f(!1), void a.func.notice("ERROR_LOAD_PRODUCT", "error", 3500);
                                        }
                                    }), a.cart.get_price()
                                }
                            }
                        })),
                        
                         //  wishlist link generate start 22-01-21
                        "" !== a.func.url_var("wishlist", "") && (a.f(""), t.ajax({
                            url: a.data.url + "Editor/get_wishlist_data/" + a.func.url_var("wishlist", ""),
                            method: "GET",
                            dataType: "JSON",
                            statusCode: {
                                403: a.response.statusCode[403],
                                404: function() {
                                    a.func.notice(a.i(123), "error", 3500), a.f(!1)
                                },
                                200: function(t) {
                                    if (null === t) return a.func.notice(a.i(166), "error", 3500), void a.f(!1);
                                    a.func.clear_url(["wishlist"]), a.func.load_product({
                                        id: t.product,
                                        cms: t.product_cms,
                                        printing: t.printing,
                                        options: t.options,
                                        template: t.template,
                                        stages: t.stages,
                                        callback: function(t) {
                                            if (void 0 === t.id) return a.f(!1), void a.func.notice("ERROR_LOAD_PRODUCT", "error", 3500);
                                        }
                                    })
                                }
                            }
                        })),
                         //  wishlist link generate End 22-01-21
                         //  Upadte cart link generate start 22-01-21
                        "" !== a.func.url_var("cart_id", "") && (a.f(""), t.ajax({
                            url: a.data.url + "Editor/get_cart_id/" + a.func.url_var("cart_id", ""),
                            method: "GET",
                            dataType: "JSON",
                            statusCode: {
                                403: a.response.statusCode[403],
                                404: function() {
                                    a.func.notice(a.i(123), "error", 3500), a.f(!1)
                                },
                                200: function(t) {
                                    if (null === t) return a.func.notice(a.i(166), "error", 3500), void a.f(!1);
                                    //round_side++; if(round_side==1 && reloaded) $("#back_side").click(); if(round_side==2 && reloaded) $("#front_side").click(); // Manually Added for pricing update in share, wishlist and cart.
                                    // alert(round_side);
                                    // $.each(t.stages, function(t_side, td) {
                                    //     $("#"+t_side+"_side").click();
                                    // });
                                    // $("#back_side").click();
                                    a.func.clear_url(["cart_id"]), a.func.load_product({
                                        id: t.product,
                                        cms: t.product_cms,
                                        printing: t.printing,
                                        options: t.options,
                                        template: t.template,
                                        stages: t.stages,
                                        callback: function(t) {
                                            if (void 0 === t.id) return a.f(!1), void a.func.notice("ERROR_LOAD_PRODUCT", "error", 3500);
                                        }
                                    })
                                }
                            }
                        })),
                        
                         //  Upadte cart link generate End 22-01-21
                         
                         //  order print link generate start 30-01-21
                        "" !== a.func.url_var("order_design_print", "") && (a.f(""), t.ajax({
                            url: a.data.url + "Editor/order_design_print/" + a.func.url_var("order_design_print", ""),
                            method: "GET",
                            dataType: "JSON",
                            statusCode: {
                                403: a.response.statusCode[403],
                                404: function() {
                                    a.func.notice(a.i(123), "error", 3500), a.f(!1)
                                },
                                200: function(t) {
                                    if (null === t) return a.func.notice(a.i(166), "error", 3500), void a.f(!1);
                                    a.func.clear_url(["order_design_print"]), a.func.load_product({
                                        id: t.product,
                                        cms: t.product_cms,
                                        printing: t.printing,
                                        options: t.options,
                                        template: t.template,
                                        stages: t.stages,
                                        callback: function(t) {
                                            if (void 0 === t.id) return a.f(!1), void a.func.notice("ERROR_LOAD_PRODUCT", "error", 3500);
                                        }
                                    })
                                }
                            }
                        })),
                        
                        //  order print link generate End 30-01-21

                        temp_id = a.func.url_var("template", ""),
                        "" !== a.func.url_var("template", "") && (a.f("loading"), t.ajax({
                            url: a.data.url + "/Editor/get_templates_data/" + a.func.url_var("template", ""),
                            method: "GET",
                            dataType: "JSON",
                            statusCode: {
                                403: a.response.statusCode[403],
                                404: function() {
                                    a.func.notice(a.i(123), "error", 3500), a.f(!1)
                                },
                                200: function(t) { //te
                                    // if (null === te) return a.func.notice(a.i(166), "error", 3500);//, void a.f(!1);
                                    // if ("redirect" == te) return a.func.notice(a.i(166), "error", 3500), void a.f(!1);

                                    a.func.clear_url(["template"]);
                                    // $.each(te.temp, function(t_side, t) {
                                    //     $(".designer-product-color").find('li[title='+t.color_name+']').click();
                                    //     // $("#"+t_side+"_side").click();
                                    //     a.templates.storage[t.id] = t.upload, //a.data.upload_url + 
                                    //     // a.templates.storage[t.id] && (a.templates.external_load({
                                    //     //     upload: a.templates.storage[t.id],
                                    //     //     id: t.id,
                                    //     //     price: te.temp_price,
                                    //     //     side: t_side
                                    //     // }, i),
                                    //     a.templates.storage[t.id] && (a.templates.external_load({
                                    //         upload: a.templates.storage[t.id],
                                    //         id: t.id,
                                    //         price: te.temp_price,
                                    //         side: t_side
                                    //     }, i), void 0 !== a.stage().template && (a.stage().template.loaded = !0)), a.cart.get_price()
                                    // })
                                    a.func.load_product({
                                        id: t.product,
                                        cms: t.product_cms,
                                        printing: t.printing,
                                        options: t.options,
                                        template: t.template,
                                        stages: t.stages,
                                        callback: function(t) {
                                            if (void 0 === t.id) return a.f(!1), void a.func.notice("ERROR_LOAD_PRODUCT", "error", 3500);
                                        }
                                    })
                                }
                            }
                        })),

                        "" != a.func.url_var("cart", "") ? a.get.el("general-status").html('<span>\t\t\t\t\t\t\t<text><i class="fa fa-exclamation-triangle"></i> ' + a.i(115) + '</text> \t\t\t\t\t\t\t<a href="#clear-designs" data-btn="cancel" data-func="clear-designs">\t\t\t\t\t\t\t\t' + a.i(185) + "\t\t\t\t\t\t\t</a>\t\t\t\t\t\t</span>") :
                        "" !== a.func.url_var("order_print", "") && (t("#designer-general-status").html('<span>\t\t\t\t\t\t\t<text>\t\t\t\t\t\t\t\t<i class="fa fa-exclamation-triangle"></i> ' + a.i(122) + " #" + a.func.url_var("order_print") + "</text>\t\t\t\t\t\t</span>"),
                        "" !== a.func.url_var("design_print", "") && (a.f(""), t.ajax({
                            url: designs_print_url,
                            method: "GET",
                            dataType: "JSON",
                            statusCode: {
                                403: a.response.statusCode[403],
                                404: function() {
                                    a.func.notice(a.i(123), "error", 3500), a.f(!1)
                                },
                                200: function(t) {
                                    if (null === t) return a.func.notice(a.i(166), "error", 3500), void a.f(!1);
                                    a.func.clear_url(["design_print", "order_print"]), a.func.load_product({
                                        id: t.product,
                                        cms: t.product_cms,
                                        printing: t.printing,
                                        options: t.options,
                                        template: t.template,
                                        stages: t.stages,
                                        callback: function(t) {
                                            if (void 0 === t.id) return a.f(!1), void a.func.notice("ERROR_LOAD_PRODUCT", "error", 3500);
                                            a.get.el("general-status").html('<span>\t\t\t\t\t\t\t\t\t\t\t\t\t\t<text>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class="fa fa-exclamation-triangle"></i> ' + a.i(192) + " <strong>#" + a.func.url_var("order_print") + "</strong></text>\t\t\t\t\t\t\t\t\t\t\t\t\t</span>")
                                        }
                                    })
                                }
                            }
                        })))
                    }), this.actions.add("front-side-click", function() {
                        $("#front_side").click();
                    }), this.actions.add("side-click", function() {
                        $("#back_side").click();
                        setTimeout(function() { $("#front_side").click(); }, 2000);
                        // $("#front_side").click();
                    }), this.actions.add("first-completed", function() {
                        if(!is_mobile_device) a.actions.do("zoom100", t); // Added for set zoom to 100%
                        // if(a.func.url_var("shares", "") != "" || a.func.url_var("wishlist", "") != "" || a.func.url_var("cart_id", "") != "" || a.func.url_var("template", "") != "")
                        //     $("#back_side").click();
                        // round_side_c = 2;
                        
                            //, $("#front_side").click();

                        if((a.func.url_var("shares", "") != "" || a.func.url_var("wishlist", "") != "" || a.func.url_var("cart_id", "") != "" || a.func.url_var("template", "") != "") && reloadable==true)
                            reloaded = true;
                        else
                            reloaded = false;
                        if(!reloaded) round_side++; if(round_side==1 && !reloaded) $("#back_side").click(), $("#front_side").click(), round_side++; // Manually Added for without stages.
                        // if(round_side_c==2)
                            a.actions.do("load-data")
                        // ), 
                        a.func.set_url("share", null), t("#designer-left>div.row>div.col-md-12 ul.designer-left-nav>li[data-tab]").eq(1).click()
                    }), this.actions.add("cart-changed", function() {
                        "" !== a.func.url_var("cart", "") && t("#designer-general-status").html('<span>\t\t\t\t\t\t<text>\t\t\t\t\t\t\t<i class="fa fa-exclamation-triangle"></i> ' + a.i(116) + ": " + a.func.date("h:m d M, Y", (new Date).getTime()) + '</text>\t\t\t\t\t\t<a href="#cancel-cart" data-btn="cancel" data-func="cancel-cart">\t\t\t\t\t\t\t' + a.i(117) + "\t\t\t\t\t\t</a>\t\t\t\t\t</span>")
                    }), this.actions.add("add-cart", function() {
                        t("#designer-general-status").html("<span>\t\t\t\t\t\t<text>" + a.i(118) + '!</text> \t\t\t\t\t\t<a href="#checkout">' + a.i(75) + ' <i class="fa fa-arrow-right"></i>\t\t\t\t\t\t</a>\t\t\t\t\t</span>'), t('#designer-general-status a[href="#checkout"]').on("click", a.cart.do_checkout)
                    }), this.actions.add("noproduct", function() {
                        t("#designer-no-product").show(), a.func.set_url("cart", null), a.ops.products = a.func.url_var("product"), a.get.el("change-product").trigger("click")
                    }), this.actions.add("product", function(t) {
                        var e = a.get.el("navigations").find('li[data-tool="print"][data-alwd]'),
                            i = encodeURIComponent(a.func.url_var("design_print", ""));
                        e.length > 0 && e.attr("data-alwd") != i && e.remove()
                    }), this.actions.add("save-design", function(t) {
                        a.get.el("general-status").html('<span>\t\t\t\t\t\t<text>\t\t\t\t\t\t\t<i class="fa fa-exclamation-triangle"></i> ' + a.i(188) + " " + a.func.date("h:m - d M, Y", (new Date).getTime()) + "\t\t\t\t\t\t\t<strong>#" + t + '</strong>\t\t\t\t\t\t</text>\t\t\t\t\t\t<a href="#cancel-design" data-btn="cancel" data-func="cancel-design">\t\t\t\t\t\t\t' + a.i(187) + "\t\t\t\t\t\t</a>\t\t\t\t\t</span>"), "" === a.func.url_var("cart", "") ? a.func.set_url("my_design", t) : a.func.set_url("my_design", null)
                    }), this.actions.add("updated", function() {
                        "" === a.func.url_var("my_design", "") && "" === a.func.url_var("cart", "") && "" === a.func.url_var("design_print", "") && a.get.el("general-status").html('<span>\t\t\t\t\t\t\t<text><i class="fa fa-exclamation-triangle"></i> ' + a.i(189) + '</text>\t\t\t\t\t\t\t<a href="#save-design" data-func="save-design"><i class="fa fa-floppy-o"></i> ' + a.i(190) + "</a>\t\t\t\t\t\t</span>")
                    }), [
                        ["ctrl-o", "import"],
                        ["ctrl-e", "clear"],
                        ["ctrl-shift-s", "saveas"],
                        ["ctrl-p", "print"]
                    ].map(function(t) {
                        a.actions.add(t[0], function(e) {
                            return a.get.el("navigations").find('li[data-tool="file"] li[data-func="' + t[1] + '"]').trigger("click"), e.preventDefault(), e.stopPropagation(), !1
                        })
                    }), fabric.Object.prototype.originX = fabric.Object.prototype.originY = "center", fabric.Object.prototype.transparentCorners = !1, window.designer = null, window.indexedDB = window.indexedDB || window.webkitIndexedDB || window.mozIndexedDB || window.OIndexedDB || window.msIndexedDB, window.URL = window.URL || window.webkitURL, CanvasRenderingContext2D.prototype.roundRect = function(t, e, a, i, s) {
                        return a < 2 * s && (s = a / 2), i < 2 * s && (s = i / 2), this.beginPath(), this.moveTo(t + s, e), this.arcTo(t + a, e, t + a, e + i, s), this.arcTo(t + a, e + i, t, e + i, s), this.arcTo(t, e + i, t, e, s), this.arcTo(t, e, t + a, e, s), this.closePath(), this
                    }, window.addEventListener("message", function(e) {
                        if (("" == e.origin || e.origin == window.location.origin) && e.data && e.data.action) switch (e.data.action) {
                            case "close_lightbox":
                                t("#designer-lightbox").remove();
                                break;
                            case "import_image":
                                var i = parseInt((new Date).getTime() / 1e3).toString(36) + ":" + Math.random().toString(36).substr(2);
                                e.data.ops.name.indexOf("/") > -1 && (e.data.ops.name = e.data.ops.name.split("/").pop()), a.cliparts.import(i, e.data.ops, "prepend");
                                break;
                            case "add_image":
                                a.func.preset_import([{
                                    type: "image",
                                    url: e.data.url
                                }]);
                                break;
                            case "preview_image":
                                a.get.el("x-thumbn-preview").show().find(">div").html('<img src="' + e.data.ops.url + '" />'), a.get.el("x-thumbn-preview").find(">header").html(e.data.ops.name ? e.data.ops.name : e.data.ops.url.split("/").pop().substr(0, 50)), "" !== e.data.ops.tags && a.get.el("x-thumbn-preview").find(">footer").show().html(e.data.ops.tags);
                                break;
                            case "close_preview_image":
                                a.get.el("x-thumbn-preview").hide();
                                break;
                            case "fonts":
                                a.render.fonts(e.data.fonts);
                                break;
                            case "update-svg":
                                var s = a.stage().canvas;
                                if (active = s.getActiveObject(), null !== active) {
                                    var n = "data:image/svg+xml;base64," + btoa(e.data.svg);
                                    active.set("origin_src", n), active.set("src", n), active._element.src = n, active._originalElement.src = n, active._element.onload = function() {
                                        s.renderAll()
                                    }
                                }
                                a.tools.lightbox("close")
                        }
                    }), window.addEventListener("popstate", function(t, e) {
                        t && (window.location = document.referrer, t.preventDefault())
                    }), t(window).bind("beforeunload", function() {
                        if (a.ops.before_unload) return a.ops.before_unload
                    }).on("touchstart", function(e) {
                        t(e.target).hasClass("smooth") ? this.smooth = e.target : this.smooth = t(e.target).closest(".smooth").get(0)
                    }).on("touchmove", function(t) {
                        return t.target === document ? (t.preventDefault(), !1) : !!(["INPUT", "SELECT"].indexOf(t.target.tagName) > -1 || this.smooth) || (t.preventDefault(), !1)
                    }).on("load", function() {
                        a.mobile()
                    }), this.design.events(), this.objects.icons.init(), fabric.util.addListener(fabric.window, "load", function() {
                        var t = this.__canvas || this.canvas,
                            e = this.__canvases || this.canvases;
                        if (t && t.calcOffset && t.calcOffset(), e && e.length)
                            for (var a = 0, i = e.length; a < i; a++) e[a].calcOffset()
                    }), this.render.colorPresets(), this.render.fonts(), this.indexed.init(), this.cart.init(), jscolor.detectDir = function() {
                        return a.data.assets + "/assets/images/"
                    }, jscolor.init(), delete jscolor.init, a.mobile()
                }
            }
        };
    a.load()
});
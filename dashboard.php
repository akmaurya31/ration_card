<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <div id="root"></div> <!-- This is where your React component will be rendered -->
  <script src="https://unpkg.com/react@17/umd/react.production.min.js"></script>
  <script src="https://unpkg.com/react-dom@17/umd/react-dom.production.min.js"></script>
  <script src="login.js"></script> <!-- Include your compiled JavaScript file -->

  <?php require_once("header.php"); 
//   print_r($_SESSION)
  ?>

  
  <div class="pb-4 mt-4">

      <div class="flex  my-1 flex-row w-[840px] border-2 border-black bg-white m-auto h-[535px]">
        <div class="m-3 border-[3.5px] w-[400px] border-black rounded-lg ">
          <div class="m-1 border border-gray-300">
            <div class="flex flex-row justify-between p-2">
              <div>
                <img src="images/qrcode.jpg" alt="No Image" class="w-24 h-24" />
              </div>
              <div>
                <img
                  src="images/uttar-pradesh.png"
                  alt="No Image"
                  class="relative w-20 h-20 top-4"
                />
              </div>
              <div>
                <img src="images/man.jpg" alt="No Image" class="w-24 h-24" />
              </div>
            </div>
            <p class="mx-auto text-sm font-bold text-center w-36">
              खाद्य तथा रसद विभाग उत्तर प्रदेश शासन
              <p class="text-[12px]">जनपद : लखनऊ</p>
            </p>
            <div class="!gap-y-[-4px] p-2" style="line-height: 13px">
              <div class="">
                <span class="text-[10px]">राशन कार्ड क्रमांक</span>
                <span class="pl-6 text-sm font-bold"> : 115723456789</span>
              </div>
              <div class="">
                <span class="text-[10px]">टाउन</span>
                <span class="pl-20 text-sm font-bold">
                  : LUCKNOW (M CORP.)
                </span>
              </div>
              <div class="">
                <span class="text-[10px]">मुखिया</span>
                <span class="pl-[75px] text-[10px] font-bold">
                  : सुनीता मौर्य
                </span>
              </div>

              <div class="">
                <span class="text-[10px]">मुखिया का नाम</span>
                <span class="pl-11 text-[10px] font-bold">
                  : सुनीता मौर्य
                </span>
              </div>
              <div class="">
                <span class="text-[10px]">पिता/पति का नाम</span>
                <span class="pl-9 text-[10px] font-bold">
                  : सुनीता मौर्य
                </span>
              </div>
              <div class="">
                <span class="text-[10px]">श्रेणी/जाती</span>
                <span class="pl-16 text-[10px] font-bold">
                  : पिछड़े वर्ग
                </span>
              </div>
              <div class="flex flex-row">
                <div class="text-[10px]">निवास का पता</div>
                <div class="pl-12 w-64 text-[10px] font-bold">
                  : 295/5, Balda Shahganj, Chowk, Lucknow (M CORP), लखनऊ 22603
                </div>
              </div>

              <div class="">
                <span class="text-[10px]">आधार / इनरोलमेंट न०</span>
                <span class="pl-4 text-[11px] font-bold">
                  
                  : XXXX XXXX 6197
                </span>
              </div>

              <div class="">
                <span class="text-[10px]">गैस ग्राहक कनेक्शन सं०:</span>
                <span class="pl-4 text-[12px] font-serif"></span>
              </div>
              <div class="">
                <span class="text-[10px]">उचित दर दुकान:</span>
                <span class="pl-4 font-serif text-sm"></span>
              </div>

              <div class="">
                <span class="text-[10px]">यूनिटों का विवरण:</span>
                <span class="pl-4 text-[10px] font-bold">4 (Four)</span>
              </div>
            </div>

            <div class="flex flex-row justify-between p-2">
              <div class="text-[10px] font-bold">दिनांक : {date}</div>
              <div class="pb-8 pl-4 text-[12px] font-bold border border-black text-center w-56">
                Digitally Signed By
              </div>
            </div>
            <div style=" line-height: 13px" class="pb-3">
              <div class="text-center ">
                <span class="text-[10px] font-serif">
                  राष्ट्रीय खाद्य सुरक्षा अधिनियम-२०
                </span>
                <span class="pl-4 text-[10px] font-serif">
                  के अन्तर्गत डिजिटली हस्ताक्षरित राशन कार्ड
                </span>
              </div>
              <div class="px-2 ">
                <span class="text-[10px]">
                  IT Solution Provided By: National Informatice Centre(NIC), UP,
                </span>
                <span class="pl-4 pb-3 text-[10px] font-bold">
                  Print at :
                </span>
              </div>
            </div>
          </div>
        </div>
        <div class="m-3 p-3 border w-[400px] rounded-lg ">
          <p class="font-light text-center text-red-500 text-md">
            राष्ट्रीय खाद्य सुरक्षा अधिनियम 2013 के अन्तर्गत महत्वपूर्ण जानकारी।
          </p>
          <div class="text-sm font-bold text-black underline underline-offset-4">
            देय खाद्यान्न की मात्रा एवं मूल्य :-
          </div>
          <div class="flex flex-row pt-1 pr-3">
          <span class="inline-block">
  <i class="fas fa-check-circle text-lg pt-1 pb-0"></i>
</span>
            <div class="pl-4">
            <span class="text-sm font-bold">अन्त्योदय अन्य योजना - </span>
            <span class="text-sm">
              20 कि०ग्रा० गेहूँ तथा 15 कि०ग्र चावल प्रतिमाह प्रति कार्ड।
            </span>
            </div>
          </div>
          <div class="flex flex-row pt-3 pr-3 ">
          <span class="inline-block">
  <i class="fas fa-check-circle text-lg pt-1 pb-0"></i>
</span>
            <div class="pl-4">
            <span class="text-sm font-bold">अन्त्योदय अन्य योजना - </span>
            <span class="text-sm ">
              20 कि०ग्रा० गेहूँ तथा 15 कि०ग्र चावल प्रतिमाह प्रति कार्ड।
            </span>
            </div>
          </div>
          <div class="flex flex-row pt-3 pr-3">
          <span class="inline-block">
  <i class="fas fa-check-circle text-lg pt-1 pb-0"></i>
</span>
            <span class="pl-3 text-sm">
              उपरोक्त दोनो योजनाओं पर गेहूँ रु0-02 प्रति कि०ग्रा० तथा चावल
              रु0-03 कि०ग्रा० की दर से देय।
            </span>
          </div>

          <div class="pt-5 text-sm font-bold text-black underline underline-offset-4">
            खाद्यान्न प्राप्त न होने की स्थिति में :-
          </div>
          <div class="flex flex-row pt-3 pr-3">
          <span class="inline-block">
  <i class="fas fa-check-circle text-lg pt-1 pb-0"></i>
</span>
            <span class="pl-4 text-sm">
              कार्ड धारक विभागीय टोल फ्री नम्बर 1800-1800-150 अथवा 1967 पर अपनी
              शिकायत दर्ज करायी जा सकती है।
            </span>
          </div>

          <div class="flex flex-row pt-3 pr-3 ">
          <span class="inline-block">
  <i class="fas fa-check-circle text-lg pt-1 pb-0"></i>
</span>
            <span class="pl-4 text-sm ">
              जनपद स्तर पर जिलाधिकारी, उपजिलाधिकारी एवं जिला पूर्ति अधिकारी के
              समक्ष शिकायत की जा सकती है।
            </span>
          </div>

          <div class="flex flex-row pt-3 pr-3 ">
          <span class="inline-block">
  <i class="fas fa-check-circle text-lg pt-1 pb-0"></i>
</span>
            <span class="pl-4 text-sm">
              जनपद स्तर पर जिला शिकायत निवारण अधिकारी अर्थात नामित अपर जिला
              मजिस्ट्रेट के समक्ष हकदारी अथवा खाद्य सुरक्षा भत्ते प्राप्त किये
              जाने हेतु शिकायत की जा सकती है।
            </span>
          </div>
        </div>
      </div>
    </div>

</div>




<?php require_once("footer.php"); 
//   print_r($_SESSION)
  ?>
</body>
</html>

<?php $__env->startSection('head'); ?>
<title>Play Games Online and Earn Money | Ludo, Cricket, Chess, Carrom &amp;amp; Many More Game</title>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" type="text/css" href="/styletp.css" />
<div class="leftContainer mb_space" style="background-color: rgb(255, 255, 255);">
   <div class="custom-tabs" style="padding-top: 75px;">
      <div class="custom-tab active" onclick="kyc('online',this)">Online kyc</div>
      <div class="custom-tab false" onclick="kyc('offline',this)">Offline Kyc</div>
   </div>
   <div class="online kycPage mt-0 py-4 px-3" style="background-color: rgb(255, 255, 255);">
      <h3 class="mt-2" style="color: rgb(0, 0, 0);">Enter details of Aadhar Card: </h3>
      <form method="POST" action="/check_aadhar" onsubmit="$('#loader').css('display','flex')">
          <?php echo csrf_field(); ?>
         <div style="margin-top: 30px;">
            <?php if(!session()->has('otp')): ?>
            <div class="kyc-doc-input mt-4">
               <div class="label" style="color: rgb(0, 0, 0); font-weight: bold; padding-bottom: 2%; font-size: 18px;">Aadhar Number</div>
               <input type="tel" name="aadhar" placeholder=" Aadhar Number" required="">
            </div>
            <?php else: ?>
            <div class="kyc-doc-input mt-4">
               <div class="label" style="color: rgb(0, 0, 0); font-weight: bold; padding-bottom: 2%; font-size: 18px;">OTP</div>
               <input type="number" name="otp" placeholder=" Enter Aadhar OTP" required="">
               <input name="ref_id" value="<?php echo e(session()->get('otp')[0]); ?>" type="hidden">
				<input name="auth" value="<?php echo e(session()->get('otp')[1]); ?>" type="hidden">
            </div>
            <?php endif; ?>
             <?php if(session()->has('error')): ?>
			 <p>
			     <b><span style="color:red">Error:</span> <?php echo e(session()->get('error')); ?></b>
			</p>
			 <?php endif; ?>
         </div>
         <div style="padding-bottom: 25%;"></div>
         <div class="refer-footer p-0">
            <button type="submit" class="w-100 btn-success bg-success" style="border: none; border-radius: 5px; font-size: 1em; font-weight: 700; height: 48px; color: rgb(255, 255, 255); text-transform: uppercase;">submit</button>
         </div>
      </form>
   </div>
   <div class="offline kycPage py-4 px-3" style="display:none;background-color: rgb(255, 255, 255);">
   <h3 class="mt-2" style="color: rgb(0, 0, 0);">Enter details of Aadhar Card: </h3>
   <form method="POST" action="<?php echo e(url('/complete-kyc/save-step-1')); ?>" onsubmit="$('#loader1').css('display','flex')" enctype="multipart/form-data">
       <?php echo csrf_field(); ?>
   <div style="margin-top: 10px;">
      <div class="kyc-doc-input mt-4">
         <div class="label" style="color: rgb(0, 0, 0); font-weight: bold; padding-bottom: 2%; font-size: 18px;">First Name</div>
         <input type="text" name="fname" placeholder=" First Name" required="">
      </div>
      <div class="kyc-doc-input mt-4">
         <div class="label" style="color: rgb(0, 0, 0); font-weight: bold; padding-bottom: 2%; font-size: 18px;">Last Name</div>
         <input type="text" name="lname" placeholder=" Last Name" required="">
      </div>
      <div class="kyc-doc-input mt-4">
         <div class="label" style="color: rgb(0, 0, 0); font-weight: bold; padding-bottom: 2%; font-size: 18px;">Aadhar Number</div>
         <input type="tel" name="DOCUMENT_NUMBER" placeholder=" Aadhar Number" required="">
      </div>
      <div class="Pan_doc_upload__nxByw mt-4">
         <input id="frontPhoto" name="frontPic" onchange="compressAndUpload('first',this);" type="file" accept="image/*" required="">
         <div class="cxy flex-column position-absolute">
            <img src="/images/file-uploader-icon.png" width="17px" alt="" class="snip-img">
            <div class="Pan_sideNav_text__hpuZh mt-2">Upload front Photo of your Aadhar Card.</div>
         </div>
      </div>
      <img id="first" src="https://tpwebtech.com/Images/LandingPage_img/loader1.gif" style="display:none;width:100%">
      <div class="Pan_doc_upload__nxByw mt-4">
         <input id="backPhoto" onchange="compressAndUpload('second',this);" name="backPic" type="file" accept="image/*" required="">
         <div class="cxy flex-column position-absolute">
            <img src="/images/file-uploader-icon.png" width="17px" alt="" class="snip-img">
            <div class="Pan_sideNav_text__hpuZh mt-2">Upload back Photo of your Aadhar Card.</div>
         </div>
      </div>
      <img id="second" src="https://tpwebtech.com/Images/LandingPage_img/loader1.gif" style="display:none;width:100%">
       <?php if(session()->has('error')): ?>
		<p>
		   <b><span style="color:red">Error:</span> <?php echo e(session()->get('error')); ?></b>
		</p>
	   <?php endif; ?>
   </div>
   <div style="padding-bottom: 25%;"></div>
   <div class="refer-footer p-0">
       <button type="submit" class="w-100 btn-success bg-success" style="border: none; border-radius: 5px; font-size: 1em; font-weight: 700; height: 48px; color: rgb(255, 255, 255); text-transform: uppercase;">submit</button>
    </div>
    </form>
</div>
   <div id="loader1" style="align-items: center;
    background-color: #fff;
    bottom: 0;
    display: none;
    justify-content: center;
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
    z-index: 9999">
        <img src="/IMG_5431.GIF" style="width: 100%;">
   </div>
   <div id="loader" style="align-items: center;
    background-color: #fff;
    bottom: 0;
    display: none;
    justify-content: center;
    left: 0;
    position: absolute;
    right: 0;
    top: 0;
    z-index: 9999">
        <img src="/loader1.gif" style="width: 100%;">
   </div>
</div>
<script>
    function kyc(section,a){
        $(".kycPage").hide();
        $("."+section).show();
        $(".custom-tab").removeClass("active");
        $(a).addClass("active");
    }
    function compressAndUpload(preview,a) {
    const input = a;
    const compressedImage = document.getElementById(preview);
    const file = input.files[0];
    if (!file) {
        alert('Please select an image.');
        return;
    }

    const reader = new FileReader();

    reader.onload = function (e) {
        const img = new Image();
        img.src = e.target.result;

        img.onload = function () {
            const canvas = document.createElement('canvas');
            const ctx = canvas.getContext('2d');

            // Set the canvas dimensions to the image dimensions
            canvas.width = img.width;
            canvas.height = img.height;

            // Draw the image on the canvas
            ctx.drawImage(img, 0, 0);

            // Get the base64-encoded data URL of the compressed image
            const compressedDataURL = canvas.toDataURL('image/jpeg', 0.5); // Adjust the quality as needed

            // Display the compressed image
            $("#"+preview).show();
            compressedImage.src = compressedDataURL;

            // Create a new file from the compressed data URL
            const compressedFile = dataURItoBlob(compressedDataURL);

            const compressedFileList = new DataTransfer();
            compressedFileList.items.add(new File([compressedFile], 'compressed_image.jpg'));

            // Replace the original file input's files with the compressed file
            input.files = compressedFileList.files;
        };
    };

    reader.readAsDataURL(file);
}

// Function to convert data URI to Blob
function dataURItoBlob(dataURI) {
    const byteString = atob(dataURI.split(',')[1]);
    const mimeString = dataURI.split(',')[0].split(':')[1].split(';')[0];
    const ab = new ArrayBuffer(byteString.length);
    const ia = new Uint8Array(ab);
    for (let i = 0; i < byteString.length; i++) {
        ia[i] = byteString.charCodeAt(i);
    }
    return new Blob([ab], { type: mimeString });
}
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\sample-project\resources\views\user\kyc_new.blade.php ENDPATH**/ ?>
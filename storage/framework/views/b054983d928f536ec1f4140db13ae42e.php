<?php $__env->startSection('content'); ?>


	<section>
      <div class="container">
        <div class="row">
          <div class="col-md-12 about-content">
            <h1>Playing Matches</h1>
            <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
              <thead>
                <tr>
                  <th>Match Info</th>
                  <th>Status</th>
                  <th>Challenge Point</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
				  <?php $__currentLoopData = $challenges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                  <td><?php echo e($val->creatorname->username); ?> vs <?php echo e($val->opponentname->username ?? ' N/A '); ?></td>
                  <td>
						<span class="badge badge-success" style="background-color:green;"><?php echo e($val->status); ?></span>
				  </td>
                  <td> <?php echo e($val->amount); ?></td>
                  <td><?php echo e($val->created_at); ?></td>
                  <td>
					  <a href="javascript:void(0);" cid="<?php echo e($val->creatorname->id); ?>" oid="<?php echo e($val->opponentname->id ?? ''); ?>" omobile="<?php echo e($val->opponentname->mobile_no ?? ''); ?>" cmobile="<?php echo e($val->creatorname->mobile_no); ?>" amount="<?php echo e($val->amount); ?>" opponentname="<?php echo e($val->opponentname->username ?? ' N/A '); ?>" creatorname="<?php echo e($val->creatorname->username); ?>" data-pd-popup-open="challengeResult" class="btn btn-info pull-left final-result check-result">
                      <i class="fa fa-eye" aria-hidden="true"></i></a>
                  </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </section>
    
    <div class="popup" data-pd-popup="challengeResult">
        <div class="popup-inner">
          <div class="bet-details">
            <h1>
              <span id="creatorname"></span> vs <span id="opponentname"></span> for Point <span id="amount"></span>/-
            </h1>
            <?php /* <p class="oppenent">Oppenent Whatsapp Number <span id="oppenent-mobile"></span></p>
 
            <p style="font-size:17px;"><a style="text-decoration:none;" id="href" href="" target="_blank">Click here to message your oppenent</a></p> */ ?>
          </div>
          <p class="bet-terms">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Animi excepturi hic corporis
            neque
            incidunt dolorem aut labore, in dolores ab voluptatum modi accusamus tempora repudiandae necessitatibus
            asperiores
            mollitia similique adipisci.</p>
          <a class="popup-close" data-pd-popup-close="challengeResult" href="#"> </a>
        </div>
      </div>
      
 <script>
	 $(function () {
		//----- OPEN
          $(document).on('click', '[data-pd-popup-open]', function (e) {
			   
            var targeted_popup_class = $(this).attr("data-pd-popup-open");
            $('[data-pd-popup="' + targeted_popup_class + '"]').fadeIn(100);
            $("body").addClass("popup-open");
            e.preventDefault();
          });

          //----- CLOSE
          $(document).on('click', '[data-pd-popup-close]', function (e) {
			   
            var targeted_popup_class = $(this).attr("data-pd-popup-close");
            $('[data-pd-popup="' + targeted_popup_class + '"]').fadeOut(200);
            $("body").removeClass("popup-open");
            e.preventDefault();
          });
	 
		$(document).on('click', '[data-pd-popup-open]', function (e) {
			$('.popup').fadeIn(100);
			var omobile	=	$(this).attr('omobile');
			var cmobile	=	$(this).attr('cmobile');
			var cid	=	$(this).attr('cid');
			var oid	=	$(this).attr('oid');
			var amount	=	$(this).attr('amount');
			var opponentname	=	$(this).attr('opponentname');
			var creatorname	=	$(this).attr('creatorname');
			var user_id			=	<?php echo e(Auth::user()->id); ?>;
			
			$('#opponentname').html(opponentname);
			$('#creatorname').html(creatorname);
			$('#amount').html(amount);
			
			if(cid == user_id && oid){
				$('#oppenent-mobile').html(omobile);
				$('#href').attr('href','https://wa.me/91'+omobile+'?text=How+To+Play,+Please+Guide+Me');
			}else if(oid == user_id && cid){
				$('#oppenent-mobile').html(cmobile);
				$('#href').attr('href','https://wa.me/91'+cmobile+'?text=How+To+Play,+Please+Guide+Me');
			}else{
				$('#href').attr('href','javascript:void(0)');
				$('#href').removeAttr('target');
			}
			
		});
	});
 </script>     

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.front.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\sample-project\resources\views\user\playing-matches.blade.php ENDPATH**/ ?>
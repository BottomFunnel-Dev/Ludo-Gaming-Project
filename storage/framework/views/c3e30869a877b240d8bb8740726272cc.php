<?php $__env->startSection('content'); ?>


	<section>
      <div class="container">
        <div class="row">
          <div class="col-md-12 about-content">
            <h1>Cancelled Matches</h1>
            <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
              <thead>
                <tr>
				  <th>Challenge ID</th>
                  <th>Match Info</th>
                  <th>Canceled by</th>
                  <th>Status</th>
                  <th>Challenge Point</th>
                  <th>Date</th>
                </tr>
              </thead>
              <tbody>
				  <?php $__currentLoopData = $challenges; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
				  <td><?php echo e($val->id); ?></td>
                  <td><?php echo e($val->creatorname->username); ?> vs <?php echo e($val->opponentname->username ?? ' N/A '); ?></td>
                  <td>
					  <?php if($val->r_submitted_by == 'User'): ?> Me  <?php else: ?> <?php echo e($val->r_submitted_by); ?>  <?php endif; ?>
                  </td>
                  <td>
						<span class="badge badge-danger" style="background-color:green;"><?php echo e($val->status); ?></span>
				  </td>
                  <td><?php echo e($val->amount); ?></td>
                  <td><?php echo e($val->created_at); ?></td>
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
            <p class="oppenent">Oppenent Whatsapp Number <span id="oppenent-mobile"></span></p>
 
            <p style="font-size:17px;"><a style="text-decoration:none;" id="href" href="" target="_blank">Click here to message your oppenent</a></p>
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
				$('#href').attr('href','https://wa.me/91'+omobile+'?text=How+To+Play,+Please+Guide+Me');
			}else if(oid == user_id && cid){
				$('#href').attr('href','https://wa.me/91'+cmobile+'?text=How+To+Play,+Please+Guide+Me');
			}else{
				$('#href').attr('href','javascript:void(0)');
				$('#href').removeAttr('target');
			}
			
		});
	});
 </script>     

<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.front.front', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Web\sample-project\resources\views\user\canceled-matches.blade.php ENDPATH**/ ?>
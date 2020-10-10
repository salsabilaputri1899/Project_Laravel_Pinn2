      <nav class="navbar navbar-inverse">
         <div class="container-fluid">
            <div class="navbar-header">
               <a class="navbar-brand" href="#">DropBix</a>
            </div>
            <ul class="nav navbar-nav">
               <li class="active"><a href="<?php echo e(route('home')); ?>">Home</a></li>

                <?php if(Auth::user()): ?>
                <li class="active"><a href="<?php echo e(route('upload')); ?>">Upload File</a></li>
			    <li class="active"><a href="<?php echo e(route('list-file')); ?>">List File</a></li>
                <?php endif; ?>

            </ul>

			 <ul class="nav navbar-nav navbar-right">
             <?php if(Auth::user()): ?>
			       <li><a href="<?php echo e(route('logout')); ?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
			       <?php else: ?>
		           <li><a href="<?php echo e(route('register')); ?>"><span class="glyphicon glyphicon-user"></span> Daftar</a></li>
				   <li><a href="<?php echo e(route('login')); ?>"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			 <?php endif; ?>
            </ul>
         </div>
      </nav>
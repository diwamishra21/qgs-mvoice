<div class="col-sm-2 hidden-xs">
            <div class="fixed-side-pane">
                <ul>
                    <li class="active"><a class="smooth-scroll" href="#profile">Profile</a></li>
                    <li><a class="smooth-scroll" href="#concerns-summary">Concerns Summary</a></li>
                    <li><a class="smooth-scroll" href="#registered-concerns">Registered Concerns</a></li>
                    <li><a href="e-learning">E-Learning</a></li>
                </ul>
                <div class="p-a-10"><a href="register-concern.html" class="btn btn-default btn-block btn-square p-a-10">+ Register Concern</a></div>
                <div class="company-logo">
                    <div class="p-b-10"><small class="text-muted">Developed By</small></div>
                    <div><?= $this->Html->image('logo-quatrro.png') ?></div>
                </div>
            </div>
        </div>
        <div class="col-sm-10">
            <div class="container-fluid">
                <div class="panel-block bg-transparent" id="profile">
                    <h2 class="panel-block-title"> 
 
					  <?php foreach ($user_deatil as $user_deatils): 
					    endforeach; ?>
                             <?= h($user_deatils->username) ?>
					</h2>
                </div>
                <div class="panel-block">
                    <div class="row panel-block-row">
                        <div class="col-md-3"><label class="panel-block-label">Business Unit</label></div>
                        <div class="col-md-8"><p class="panel-block-label"><?= h($user_deatils->bu) ?></p></div>
                    </div>
                    <div class="row panel-block-row">
                        <div class="col-md-3"><label class="panel-block-label">City</label></div>
                        <div class="col-md-8"><p class="panel-block-label"><?= h($user_deatils->city) ?></p></div>
                    </div>
                    <div class="row panel-block-row">
                        <div class="col-md-3"><label class="panel-block-label">Work Location</label></div>
                        <div class="col-md-8"><p class="panel-block-label"><?= h($user_deatils->work_location) ?></p></div>
                    </div>
                    <div class="row panel-block-row">
                        <div class="col-md-3"><label class="panel-block-label">Employee ID</label></div>
                        <div class="col-md-8"><p class="panel-block-label"><?= h($user_deatils->empid ) ?></p></div>
                    </div>
                    <div class="row panel-block-row">
                        <div class="col-md-3"><label class="panel-block-label">Email ID</label></div>
                        <div class="col-md-8"><p class="panel-block-label"><?= h($user_deatils->email) ?></p></div>
                    </div>
                </div>
                <div class="panel-block" id="concerns-summary">
                    <div class="row panel-block-row">
                        <div class="col-md-3"><label class="panel-block-label">Reports Filed</label></div>
                        <div class="col-md-8"><p class="panel-block-label"></p></div>
                    </div>
                    <div class="row panel-block-row">
                        <div class="col-md-3"><label class="panel-block-label">On Going</label></div>
                        <div class="col-md-8"><p class="panel-block-label">01</p></div>
                    </div>
                    <div class="row panel-block-row">
                        <div class="col-md-3"><label class="panel-block-label">Accusations</label></div>
                        <div class="col-md-8"><p class="panel-block-label">01</p></div>
                    </div>
                </div>
                <div class="panel-block margin-bottom-30" id="registered-concerns">
                    <div class="row panel-block-row panel-block-row-link">
                        <div class="col-md-3"><label class="panel-block-label">JULY 21, 2017</label></div>
                        <div class="col-md-7"><p class="panel-block-label">Reporting Improper Behaviour by s…</p></div>
                        <div class="col-md-2"><a href="concern-details.html"><p class="panel-block-label status-active">Active <i class="fa fa-external-link p-l-10"></i></p></a></div>
                    </div>
                    <div class="row panel-block-row panel-block-row-link">
                        <div class="col-md-3"><label class="panel-block-label">JULY 21, 2017</label></div>
                        <div class="col-md-7"><p class="panel-block-label">Reporting Improper Behaviour by s…</p></div>
                        <div class="col-md-2"><a href="concern-details.html"><p class="panel-block-label status-draft">Draft <i class="fa fa-external-link p-l-10"></i></p></a></div>
                    </div>
                    <div class="row panel-block-row panel-block-row-link">
                        <div class="col-md-3"><label class="panel-block-label">JULY 21, 2017</label></div>
                        <div class="col-md-7"><p class="panel-block-label">Reporting Improper Behaviour by s…</p></div>
                        <div class="col-md-2"><a href="concern-details.html"><p class="panel-block-label status-retracted">Retracted <i class="fa fa-external-link p-l-10"></i></p></a></div>
                    </div>
                    <div class="row panel-block-row panel-block-row-link">
                        <div class="col-md-3"><label class="panel-block-label">JULY 21, 2017</label></div>
                        <div class="col-md-7"><p class="panel-block-label">Reporting Improper Behaviour by s…</p></div>
                        <div class="col-md-2"><a href="concern-details.html"><p class="panel-block-label status-case-closed">Case Closed <i class="fa fa-external-link p-l-10"></i></p></a></div>
                    </div>
                </div>
            </div>
        </div>
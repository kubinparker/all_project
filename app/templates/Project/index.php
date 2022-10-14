<?= $this->Form->create($table, []); ?>
<?= $this->Form->control('id', ['type' => 'hidden']); ?>
<div class="row">
    <div class="col text-center">
        <h2>プロジェクト作成</h2>
    </div>
</div>
<div id="accordion">
    <div class="row">
        <div class="col-4">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <span class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            LOCAL
                        </span>
                    </h5>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                    <div class="card-body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>プロジェクト名</td>
                                    <td><?= $this->Form->input('name', ['class' => 'form-control', 'placeholder' => 'プロジェクト名']); ?></td>
                                </tr>
                                <tr>
                                    <td>表側URL</td>
                                    <td><?= $this->Form->input('front_url', ['class' => 'form-control', 'placeholder' => 'URL']); ?></td>
                                </tr>
                                <tr>
                                    <td>管理側URL</td>
                                    <td>
                                        <div class="form-row">
                                            <div class="form-group mb-0 col-md-6">
                                                <?= $this->Form->input('back_url', ['class' => 'form-control', 'placeholder' => 'URL']); ?>
                                            </div>
                                            <div class="form-group mb-0 col-md-3">
                                                <?= $this->Form->input('back_username', ['class' => 'form-control', 'placeholder' => 'Username']); ?>
                                            </div>
                                            <div class="form-group mb-0 col-md-3">
                                                <?= $this->Form->input('back_password', ['class' => 'form-control', 'placeholder' => 'Password']); ?>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Manager側URL</td>
                                    <td>
                                        <div class="form-row">
                                            <div class="form-group mb-0 col-md-6">
                                                <?= $this->Form->input('manager_url', ['class' => 'form-control', 'placeholder' => 'URL']); ?>
                                            </div>
                                            <div class="form-group mb-0 col-md-3">
                                                <?= $this->Form->input('manager_username', ['class' => 'form-control', 'placeholder' => 'Username']); ?>
                                            </div>
                                            <div class="form-group mb-0 col-md-3">
                                                <?= $this->Form->input('manager_password', ['class' => 'form-control', 'placeholder' => 'Password']); ?>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>データベースURL</td>
                                    <td>
                                        <div class="form-row">
                                            <div class="form-group mb-0 col-md-6">
                                                <?= $this->Form->input('database_url', ['class' => 'form-control', 'placeholder' => 'URL']); ?>
                                            </div>
                                            <div class="form-group mb-0 col-md-3">
                                                <?= $this->Form->input('database_username', ['class' => 'form-control', 'placeholder' => 'Username']); ?>
                                            </div>
                                            <div class="form-group mb-0 col-md-3">
                                                <?= $this->Form->input('database_password', ['class' => 'form-control', 'placeholder' => 'Password']); ?>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Backlog URL</td>
                                    <td>
                                        <div class="form-row">
                                            <div class="form-group mb-0 col-md-6">
                                                <?= $this->Form->input('backlog_url', ['class' => 'form-control', 'placeholder' => 'URL']); ?>
                                            </div>
                                            <div class="form-group mb-0 col-md-3">
                                                <?= $this->Form->input('backlog_id', ['class' => 'form-control', 'placeholder' => 'Backlog ID']); ?>
                                            </div>
                                            <div class="form-group mb-0 col-md-3">
                                                <div class="form-check">
                                                    <?php if (!$table->task_created) : ?>
                                                        <?= $this->Form->control('task_created', ['type' => 'checkbox', 'label' => ['text' => '課題作成', 'class' => 'form-check-label']]); ?>
                                                    <?php else : ?>
                                                        <span class="badge badge-success">作成した</span>
                                                    <?php endif ?>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>GIT URL</td>
                                    <td>
                                        <?= $this->Form->input('git_url', ['class' => 'form-control', 'placeholder' => 'URL']); ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h5 class="mb-0">
                        <span class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            テスト環境
                        </span>
                    </h5>
                </div>
                <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>表側URL</td>
                                    <td><?= $this->Form->input('test_front_url', ['class' => 'form-control', 'placeholder' => 'URL']); ?></td>
                                </tr>
                                <tr>
                                    <td>管理側URL</td>
                                    <td>
                                        <div class="form-row">
                                            <div class="form-group mb-0 col-md-6">
                                                <?= $this->Form->input('test_back_url', ['class' => 'form-control', 'placeholder' => 'URL']); ?>
                                            </div>
                                            <div class="form-group mb-0 col-md-3">
                                                <?= $this->Form->input('test_back_username', ['class' => 'form-control', 'placeholder' => 'Username']); ?>
                                            </div>
                                            <div class="form-group mb-0 col-md-3">
                                                <?= $this->Form->input('test_back_password', ['class' => 'form-control', 'placeholder' => 'Password']); ?>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Manager側URL</td>
                                    <td>
                                        <div class="form-row">
                                            <div class="form-group mb-0 col-md-6">
                                                <?= $this->Form->input('test_manager_url', ['class' => 'form-control', 'placeholder' => 'URL']); ?>
                                            </div>
                                            <div class="form-group mb-0 col-md-3">
                                                <?= $this->Form->input('test_manager_username', ['class' => 'form-control', 'placeholder' => 'Username']); ?>
                                            </div>
                                            <div class="form-group mb-0 col-md-3">
                                                <?= $this->Form->input('test_manager_password', ['class' => 'form-control', 'placeholder' => 'Password']); ?>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>データベースURL</td>
                                    <td>
                                        <div class="form-row">
                                            <div class="form-group mb-0 col-md-6">
                                                <?= $this->Form->input('test_database_url', ['class' => 'form-control', 'placeholder' => 'URL']); ?>
                                            </div>
                                            <div class="form-group mb-0 col-md-3">
                                                <?= $this->Form->input('test_database_username', ['class' => 'form-control', 'placeholder' => 'Username']); ?>
                                            </div>
                                            <div class="form-group mb-0 col-md-3">
                                                <?= $this->Form->input('test_database_password', ['class' => 'form-control', 'placeholder' => 'Password']); ?>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Basic認証設定</td>
                                    <td>
                                        <?= $this->Form->input('passwd_task_id', ['type' => 'hidden']) ?>
                                        <?= $this->Form->input('passwd_is_setting', ['type' => 'hidden']) ?>
                                        <?php if ($table->passwd_is_setting == 1) : ?><span class="badge badge-success">設定している</span><?php else : ?><span class="badge badge-danger">設定していない</span><?php endif ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h5 class="mb-0">
                        <span class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            本番
                        </span>
                    </h5>
                </div>
                <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordion">
                    <div class="card-body">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>表側URL</td>
                                    <td><?= $this->Form->input('honban_front_url', ['class' => 'form-control', 'placeholder' => 'URL']); ?></td>
                                </tr>
                                <tr>
                                    <td>管理側URL</td>
                                    <td>
                                        <div class="form-row">
                                            <div class="form-group mb-0 col-md-6">
                                                <?= $this->Form->input('honban_back_url', ['class' => 'form-control', 'placeholder' => 'URL']); ?>
                                            </div>
                                            <div class="form-group mb-0 col-md-3">
                                                <?= $this->Form->input('honban_back_username', ['class' => 'form-control', 'placeholder' => 'Username']); ?>
                                            </div>
                                            <div class="form-group mb-0 col-md-3">
                                                <?= $this->Form->input('honban_back_password', ['class' => 'form-control', 'placeholder' => 'Password']); ?>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Manager側URL</td>
                                    <td>
                                        <div class="form-row">
                                            <div class="form-group mb-0 col-md-6">
                                                <?= $this->Form->input('honban_manager_url', ['class' => 'form-control', 'placeholder' => 'URL']); ?>
                                            </div>
                                            <div class="form-group mb-0 col-md-3">
                                                <?= $this->Form->input('honban_manager_username', ['class' => 'form-control', 'placeholder' => 'Username']); ?>
                                            </div>
                                            <div class="form-group mb-0 col-md-3">
                                                <?= $this->Form->input('honban_manager_password', ['class' => 'form-control', 'placeholder' => 'Password']); ?>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>データベースURL</td>
                                    <td>
                                        <div class="form-row">
                                            <div class="form-group mb-0 col-md-6">
                                                <?= $this->Form->input('honban_database_url', ['class' => 'form-control', 'placeholder' => 'URL']); ?>
                                            </div>
                                            <div class="form-group mb-0 col-md-3">
                                                <?= $this->Form->input('honban_database_username', ['class' => 'form-control', 'placeholder' => 'Username']); ?>
                                            </div>
                                            <div class="form-group mb-0 col-md-3">
                                                <?= $this->Form->input('honban_database_password', ['class' => 'form-control', 'placeholder' => 'Password']); ?>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>本番メール交換</td>
                                    <td>
                                        <?= $this->Form->input('mail_setting_task_id', ['type' => 'hidden']) ?>
                                        <?= $this->Form->input('mail_is_setting', ['type' => 'hidden']) ?>
                                        <?php if ($table->mail_is_setting == 1) : ?><span class="badge badge-success">交換している</span><?php else : ?><span class="badge badge-danger">交換していない</span><?php endif ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>公開</td>
                                    <td>
                                        <?= $this->Form->input('publish_task_id', ['type' => 'hidden']) ?>
                                        <?= $this->Form->input('is_publish', ['type' => 'hidden']) ?>
                                        <?php if ($table->is_publish == 1) : ?><span class="badge badge-success">公開している</span><?php else : ?><span class="badge badge-danger">公開していない</span><?php endif ?>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row pt-5">
    <div class="col text-center">
        <a href="/" class="btn bg-secondary text-white">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" width="16" height="16" class="text-white">
                <path class="text-white" fill-rule="evenodd" d="M7.78 12.53a.75.75 0 01-1.06 0L2.47 8.28a.75.75 0 010-1.06l4.25-4.25a.75.75 0 011.06 1.06L4.81 7h7.44a.75.75 0 010 1.5H4.81l2.97 2.97a.75.75 0 010 1.06z"></path>
            </svg>
            戻る
        </a>
        <a class="btn btn-primary text-white submitButtonPost">登録</a>
    </div>
</div>
<?= $this->Form->end() ?>

<?php $this->start('js') ?>
<?= $this->Html->script(['project_edit']) ?>
<?php $this->end() ?>
<?php $this->start('css') ?>
<style>
    .card {
        min-width: 100%;
        display: block;
    }

    .water {
        background: url('/img/wave.png');
        background-size: 135px 40px;
        background-repeat: repeat-x;
        animation: flow 2s linear infinite;
    }

    .water .btn {
        color: #000;
    }

    @keyframes flow {
        0% {
            background-position: -135px 35px;
        }

        100% {
            background-position: 0 35px;
        }
    }
</style>
<?php $this->end() ?>

<div class="row">
    <div class="col text-center">
        <h2>プロジェクト情報</h2>
    </div>
</div>

<div id="accordion">
    <?php foreach ($projects as $project) : ?>
        <div class="row" style="min-width: 100%;display: unset;">
            <div class="card">
                <div class="card-header <?= $project->is_publish == 1 ? 'bg-success' : 'water' ?>" id="headingOne<?= $project->id ?>">
                    <h5 class="mb-0">
                        <button class="btn btn-link collapsed <?= $project->is_publish == 1 ? 'text-white' : '' ?>" data-toggle="collapse" data-target="#collapseOne<?= $project->id ?>" aria-expanded="false" aria-controls="collapseOne<?= $project->id ?>">
                            <?= $project->name ?>
                        </button>
                    </h5>
                </div>

                <div id="collapseOne<?= $project->id ?>" class="collapse" aria-labelledby="headingOne<?= $project->id ?>" data-parent="#accordion">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="text-center font-weight-bold">
                                                <a href="/project/<?= $project->id ?>">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                                                        <path fill-rule="evenodd" d="M7.875 2.292a.125.125 0 00-.032.018A7.24 7.24 0 004.75 8.25a7.247 7.247 0 003.654 6.297c.57.327.982.955.941 1.682v.002l-.317 6.058a.75.75 0 11-1.498-.078l.317-6.062v-.004c.006-.09-.047-.215-.188-.296A8.747 8.747 0 013.25 8.25a8.74 8.74 0 013.732-7.169 1.547 1.547 0 011.709-.064c.484.292.809.835.809 1.46v4.714a.25.25 0 00.119.213l2.25 1.385c.08.05.182.05.262 0l2.25-1.385a.25.25 0 00.119-.213V2.478c0-.626.325-1.169.81-1.461a1.547 1.547 0 011.708.064 8.74 8.74 0 013.732 7.17 8.747 8.747 0 01-4.41 7.598c-.14.081-.193.206-.188.296v.004l.318 6.062a.75.75 0 11-1.498.078l-.317-6.058v-.002c-.041-.727.37-1.355.94-1.682A7.247 7.247 0 0019.25 8.25a7.24 7.24 0 00-3.093-5.94.125.125 0 00-.032-.018l-.01-.001c-.003 0-.014 0-.031.01-.036.022-.084.079-.084.177V7.19a1.75 1.75 0 01-.833 1.49l-2.25 1.385a1.75 1.75 0 01-1.834 0l-2.25-1.384A1.75 1.75 0 018 7.192V2.477c0-.098-.048-.155-.084-.176a.062.062 0 00-.031-.011l-.01.001z"></path>
                                                    </svg>
                                                </a>
                                            </td>
                                            <td class="text-center font-weight-bold">LOCAL</td>
                                        </tr>
                                        <tr>
                                            <td>表側URL</td>
                                            <td><?= $this->Html->link($project->front_url, $project->front_url, ['target' => '_blank']); ?></td>
                                        </tr>
                                        <tr>
                                            <td>管理側URL</td>
                                            <td><?= $this->Html->link($project->back_url, $project->back_url, ['target' => '_blank']); ?>&nbsp;&nbsp;&nbsp;<?= __('{0}/{1}', $project->back_username, $project->back_password) ?></td>
                                        </tr>
                                        <tr>
                                            <td>マネジャー側URL</td>
                                            <td><?= $this->Html->link($project->manager_url, $project->manager_url, ['target' => '_blank']); ?>&nbsp;&nbsp;&nbsp;<?= $project->manager_url ? __('{0}/{1}', $project->manager_username, $project->manager_password) : '' ?></td>
                                        </tr>
                                        <tr>
                                            <td>データベースURL</td>
                                            <td><?= $this->Html->link($project->database_url, $project->database_url, ['target' => '_blank']); ?>&nbsp;&nbsp;&nbsp;<?= __('{0}/{1}', $project->database_username, $project->database_password) ?></td>
                                        </tr>
                                        <tr>
                                            <td>Backlog URL</td>
                                            <td>
                                                <!-- backlog issue -> create -->
                                                <?= $this->Html->link($project->backlog_url, $project->backlog_url, ['target' => '_blank']); ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>課題作成</td>
                                            <td><?php if ($project->task_created == 1) : ?><span class="badge badge-success">作成した</span><?php else : ?><span class="badge badge-danger">作成しなかった</span><?php endif ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-4">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td colspan="2" class="text-center font-weight-bold">テスト環境</td>
                                        </tr>
                                        <tr>
                                            <td>表側URL</td>
                                            <td><?= $this->Html->link($project->test_front_url, $project->test_front_url, ['target' => '_blank']); ?></td>
                                        </tr>
                                        <tr>
                                            <td>管理側URL</td>
                                            <td><?= $this->Html->link($project->test_back_url, $project->test_back_url, ['target' => '_blank']); ?>&nbsp;&nbsp;&nbsp;<?= $project->test_back_url ? __('{0}/{1}', $project->test_back_username, $project->test_back_password) : '' ?></td>
                                        </tr>
                                        <tr>
                                            <td>マネジャー側URL</td>
                                            <td><?= $this->Html->link($project->test_manager_url, $project->test_manager_url, ['target' => '_blank']); ?>&nbsp;&nbsp;&nbsp;<?= $project->test_manager_url ? __('{0}/{1}', $project->test_manager_username, $project->test_manager_password) : '' ?></td>
                                        </tr>
                                        <tr>
                                            <td>データベースURL</td>
                                            <td><?= $this->Html->link($project->test_database_url, $project->test_database_url, ['target' => '_blank']); ?>&nbsp;&nbsp;&nbsp;<?= $project->test_database_url ? __('{0}/{1}', $project->test_database_username, $project->test_database_password) : '' ?></td>
                                        </tr>
                                        <tr>
                                            <td>Basic認証設定</td>
                                            <td><?php if ($project->passwd_is_setting == 1) : ?><span class="badge badge-success">設定している</span><?php else : ?><span class="badge badge-danger">設定していない</span><?php endif ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-4">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td colspan="2" class="text-center font-weight-bold">本番環境</td>
                                        </tr>
                                        <tr>
                                            <td>表側URL</td>
                                            <td><?= $this->Html->link($project->honban_front_url, $project->honban_front_url, ['target' => '_blank']); ?></td>
                                        </tr>
                                        <tr>
                                            <td>管理側URL</td>
                                            <td><?= $this->Html->link($project->honban_back_url, $project->honban_back_url, ['target' => '_blank']); ?>&nbsp;&nbsp;&nbsp;<?= $project->honban_back_url ? __('{0}/{1}', $project->honban_back_username, $project->honban_back_password) : '' ?></td>
                                        </tr>
                                        <tr>
                                            <td>マネジャー側URL</td>
                                            <td><?= $this->Html->link($project->honban_manager_url, $project->honban_manager_url, ['target' => '_blank']); ?>&nbsp;&nbsp;&nbsp;<?= $project->honban_manager_url ? __('{0}/{1}', $project->honban_manager_username, $project->honban_manager_password) : '' ?></td>
                                        </tr>
                                        <tr>
                                            <td>データベースURL</td>
                                            <td><?= $this->Html->link($project->honban_database_url, $project->honban_database_url, ['target' => '_blank']); ?>&nbsp;&nbsp;&nbsp;<?= $project->honban_database_url ? __('{0}/{1}', $project->honban_database_username, $project->honban_database_password) : '' ?></td>
                                        </tr>
                                        <tr>
                                            <td>本番メール交換</td>
                                            <td><?php if ($project->mail_is_setting == 1) : ?><span class="badge badge-success">交換している</span><?php else : ?><span class="badge badge-danger">交換していない</span><?php endif ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php endforeach; ?>

</div>
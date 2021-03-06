<?php echo $this->Html->script('/backend/js/js.backend'); ?>
<script type='text/javascript'>
    $(document).ready(function() {
        setTimeout(function() {
            $("#flashMessage").fadeOut().remove();
        }, 5000);
    });
</script>
<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header well" data-original-title>
            <h2><i class="icon-calendar"></i> List Perfectmoneys</h2>
        </div>
        <?php echo $this->Session->flash(); ?>
        <div class="action">
            <?php //echo $this->Html->link('Add', array('controller'=>'Percents', 'action'=>'add'), array('class'=>'btn btn-success')); ?>
        </div>
    </div>
    <table class="table table-striped table-bordered bootstrap-datatable datatable">
        <thead>
            <tr>
                <th>Username</th>
                <th>Date</th>
                <th>Amount</th>
                <th width="10%">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            App::import('Model', 'User');
            $this->User = new User();
            if (!empty($perfectmoneys)) {
                foreach ($perfectmoneys as $data) {
                    ?>
                    <tr>
                        <td>
                            <?php echo h($this->User->getUserbyId($data['Perfectmoney']['user_id'])); ?>
                        </td>
                        <td class="center">
                            <?php echo h($data['Perfectmoney']['date']) ?>
                        </td>
                        <td class="center">
                            <?php echo $data['Perfectmoney']['amount']; ?>
                        </td>
                        <td class="center">
                            <?php
                                if(empty($data['Perfectmoney']['approved'])){
                                    echo $this->Form->postLink('<i class="icon-check icon-white"></i>Approve</span>',array('controller' => 'Perfectmoneys', 'action' => 'approved', $data['Perfectmoney']['id'], $data['Perfectmoney']['user_id']), array('escape' => false, 'class' => 'btn btn-warning'), __('Do you want approved %s?', h($data['Perfectmoney']['date'])));
                                }else{
                                    echo '<p style="background-color:green; color:white">Approved</p>';
                                }
                            ?>
                        </td>
                    </tr>
                    <?php
                }
            }
            ?>
        </tbody>

    </table>
    <?php if ($this->Paginator->numbers()): ?>
        <div class="pagination">
            <ul>
                <?php echo '<li>' . $this->Paginator->prev(__('<<'), array(), null, array('class' => 'prev disabled')) . '</li>'; ?>
                <?php echo $this->Paginator->numbers(array('tag' => 'li', 'separator' => '')); ?>
                <?php echo '<li>' . $this->Paginator->next(__('>>'), array(), null, array('class' => 'next disabled')) . '</li>'; ?>
            </ul>
        </div>
    <?php endif;?>
</div>

<div class="highlight">
<div class="clearfix">

<center>
<shadow>
<table height="100%" border="0" align="center" cellpadding="0" cellspacing="0">
<tbody><tr>
<td valign="top">
<div align="center">
<br>
<h2>WITHDRAW</h2>
<br>
<font size="8" face="verdana">
    <?php
        if(!empty($user['User']['balance'])){
            echo '$'.$user['User']['balance'];
        }else{
            echo '$0.00';
        }
    ?>
</font>
<br>
<font size="2" face="verdana">Account Balance</font><br><font face="verdana" size="1" color="grey">Minimum Withdrawal: $1.00</font>
<br><br>
<font size="2" face="verdana">Please enter your account in your profile to withdrawal.</font>
<br>

<table width="548" border="0" align="center">
    <tbody>
        <?php echo $this->Form->create('SolidTrust', array('url'=>array('controller'=>'Withdraws', 'action'=>'index')));?>
            <tr>
                <td align="center">
                	<?php echo $this->Html->image('stp.jpg', array('width'=>'100', 'height'=>'38')) ?>
                    <?php echo $this->Form->hidden('pay_name', array('value'=>'SolidTrust')) ?>
                </td>
                <td align="center">
                    <?php echo $this->Form->input('account', array('type'=>'text', 'class'=>'withdraw-email', 'label'=>false, 'div'=>false, 'placeholder'=>'none', 'required'=>true)) ?>
                </td>
                <td align="center">
                    <?php echo $this->Form->input('amount', array('type'=>'number', 'class'=>'withdraw-amount', 'label'=>false, 'div'=>false, 'placeholder'=>'0.00', 'min' => '0.00', 'max'=>$user['User']['balance'])) ?>
                </td>
            	<td align="center">
                    <?php echo $this->Form->submit('MANUALLY WITHDRAW', array('style'=>'height:40px;')); ?>
                </td>
            </tr>
        <?php echo $this->Form->end(); ?>
        <!-- egopay -->
        <?php echo $this->Form->create('Egopay', array('url'=>array('controller'=>'Withdraws', 'action'=>'index')));?>
            <tr>
                <td align="center">
                    <?php echo $this->Html->image('egopay.jpg', array('width'=>'100', 'height'=>'38')) ?>
                    <?php echo $this->Form->hidden('pay_name', array('value'=>'Egopay')) ?>
                </td>
                <td align="center">
                    <?php echo $this->Form->input('account', array('type'=>'text', 'class'=>'withdraw-email', 'label'=>false, 'div'=>false, 'placeholder'=>'none', 'required'=>true)) ?>
                </td>
                <td align="center">
                    <?php echo $this->Form->input('amount', array('type'=>'number', 'class'=>'withdraw-amount', 'label'=>false, 'div'=>false, 'placeholder'=>'0.00', 'min' => '0.00', 'required'=>true, 'max'=>$user['User']['balance'])) ?>
                </td>
                <td align="center">
                    <?php echo $this->Form->submit('MANUALLY WITHDRAW', array('style'=>'height:40px;')); ?>
                </td>
            </tr>
        <?php echo $this->Form->end(); ?>

        <?php echo $this->Form->create('Perfectmoney', array('url'=>array('controller'=>'Withdraws', 'action'=>'index')));?>
            <tr>
                <td align="center">
                    <?php echo $this->Html->image('pm.jpg', array('width'=>'100', 'height'=>'38')) ?>
                    <?php echo $this->Form->hidden('pay_name', array('value'=>'PerfectMoney')) ?>
                </td>
                <td align="center">
                    <?php echo $this->Form->input('account', array('type'=>'text', 'class'=>'withdraw-email', 'label'=>false, 'div'=>false, 'placeholder'=>'none', 'required'=>true)) ?>
                </td>
                <td align="center">
                    <?php echo $this->Form->input('amount', array('type'=>'number', 'class'=>'withdraw-amount', 'label'=>false, 'div'=>false, 'placeholder'=>'0.00', 'min' => '0.00', 'required'=>true, 'max'=>$user['User']['balance'])) ?>
                </td>
                <td align="center">
                    <?php echo $this->Form->submit('MANUALLY WITHDRAW', array('style'=>'height:40px;')); ?>
                </td>
            </tr>
        <?php echo $this->Form->end(); ?>

        <?php echo $this->Form->create('Neteller', array('url'=>array('controller'=>'Withdraws', 'action'=>'index')));?>
            <tr>
                <td align="center">
                    <?php echo $this->Html->image('neteller.jpg', array('width'=>'100', 'height'=>'38')) ?>
                    <?php echo $this->Form->hidden('pay_name', array('value'=>'Neteller')) ?>
                </td>
                <td align="center">
                    <?php echo $this->Form->input('account', array('type'=>'text', 'class'=>'withdraw-email', 'label'=>false, 'div'=>false, 'placeholder'=>'none', 'required'=>true)) ?>
                </td>
                <td align="center">
                    <?php echo $this->Form->input('amount', array('type'=>'number', 'class'=>'withdraw-amount', 'label'=>false, 'div'=>false, 'placeholder'=>'0.00', 'min' => '0.00', 'required'=>true, 'max'=>$user['User']['balance'])) ?>
                </td>
                <td align="center">
                    <?php echo $this->Form->submit('MANUALLY WITHDRAW', array('style'=>'height:40px;')); ?>
                </td>
            </tr>
        <?php echo $this->Form->end(); ?>

        <?php echo $this->Form->create('Okpay', array('url'=>array('controller'=>'Withdraws', 'action'=>'index')));?>
            <tr>
                <td align="center">
                    <?php echo $this->Html->image('okpay.png', array('width'=>'100', 'height'=>'38')) ?>
                    <?php echo $this->Form->hidden('pay_name', array('value'=>'Okpay')) ?>
                </td>
                <td align="center">
                    <?php echo $this->Form->input('account', array('type'=>'text', 'class'=>'withdraw-email', 'label'=>false, 'div'=>false, 'placeholder'=>'none', 'required'=>true)) ?>
                </td>
                <td align="center">
                    <?php echo $this->Form->input('amount', array('type'=>'number', 'class'=>'withdraw-amount', 'label'=>false, 'div'=>false, 'placeholder'=>'0.00', 'min' => '0.00', 'required'=>true, 'max'=>$user['User']['balance'])) ?>
                </td>
                <td align="center">
                    <?php echo $this->Form->submit('MANUALLY WITHDRAW', array('style'=>'height:40px;')); ?>
                </td>
            </tr>
        <?php echo $this->Form->end(); ?>
    </tbody>
</table>
<font size="2" face="verdana">Payments via Egopay and Perfect Money will be sent within 12 hours.</font>

<br><br>

</div></td>
</tr>
</tbody></table>
</shadow>
</center>
</div>
<br><br><br><br><br><br>
</div>

<style type="text/css">
    .withdraw-email{
        height: 33px;
        width: 300px;
        font-size: 22px;
        text-align: center;
        color: grey;
    }
    .withdraw-amount{
        height: 33px;
        width: 100px;
        font-size:22px;
        text-align:center;
        color:grey;
    }
</style>
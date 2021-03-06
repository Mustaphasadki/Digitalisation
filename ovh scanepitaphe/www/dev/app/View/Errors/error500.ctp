<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Errors
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */
?>
<?php $this->layout='error'; //set your layout here ?>
	<h2 style="font-size:2.3em;padding:64px 0;">ERREUR 500</h2>

	<p style="text-transform:uppercase;"><?php echo $name; ?></p>
	<p style="font-size:2em;padding:64px 0;">Nous sommes désolé il y a une erreur!</p>
<p  >
	<strong><?php echo __d('cake', 'Error'); ?>: </strong>
	<?php echo __d('cake', 'An Internal Error Has Occurred.'); ?>
</p>

<?php echo $this->Html->link('Retourner sur le site',array('controller' => 'pages', 'action' => 'display', 'home')) ?>

<?php
if (Configure::read('debug') > 0):
	echo $this->element('exception_stack_trace');
endif;
?>

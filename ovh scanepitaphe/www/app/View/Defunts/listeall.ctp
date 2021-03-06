<?php if(empty($personnes)) : ?>
<div class="row minha">
       <?php echo $this->element('bord'); ?>
    <div class="small-12 medium-8 large-8 columns nopuce">
        <h4><?php echo __('Liste des membres de vos familles');?></h4>
        <p><?php echo __('Vous n\'avez pas ajouté de proches');?></p>
        <?php
            if (!empty($families)) {
                echo '<p><span class="custom-label">'.$this->Html->link(__('Ajouter une personne'),array('controller'=>'defunts','action'=>'addall')).'</span></p>';
            }else{
                echo '<p><span class="custom-label">'.$this->Html->link(__('Vous devez ajouter une famille'),array('controller'=>'families','action'=>'add')).'</span></p>';
            }
            
        ?>
    </div>
</div> 
<?php else : ?>
<div class="row minha">
       <?php echo $this->element('bord'); ?>
    <div class="small-12 medium-8 large-8 columns nopuce">
        <h4><?php echo __('Liste des membres de vos familles');?></h4>
        <table>
            <tr>
                <th></th>
                <th><?php echo __('Nom du proche');?></th>
                <th><?php echo __('Nom de la famille');?></th>
                <th></th>
                <th></th>
                <th></th>
            </tr>
        	 <?php
        		foreach ($personnes as $key => $value) {
        			echo '<tr>';
        			echo '<td>';

        			if(!empty($value['Defunt']['avatar'])){
        				$url = 'medias/defunts/'.'defunt_'.$value['Defunt']['id'].'/'.$value['Defunt']['avatar'];
						echo $this->Html->image($url, 
              array(
                'alt' => __('image de profil de la personne'),
                'width'=>'317px',
                'height'=>'210px'
                )); 
					}else{
						echo $this->Html->Image('http://placehold.it/317x210'); 
						}
        			echo '</td>';
        			echo '<td>'.$value['Defunt']['firstname'].' '.$value['Defunt']['name'].'</td>';
                    echo '<td>'.$value['Family']['name'].'</td>';
        			echo '<td>'.$this->Html->link(__('Modifier'),array('controller'=>'defunts','action'=>'edit',$value['Defunt']['id'])).'</td>';
        			echo '<td>'.$this->Html->link(__('Modifier sa page'),array('controller'=>'clientpages','action'=>'manage',$value['Defunt']['id'])).'</td>';
        			echo '<td>'.$this->Html->link(__('Supprimer'),array('controller'=>'defunts','action'=>'delete',$value['Defunt']['id'],$value['Family']['id']),null,__('Voulez vous vraiment supprimer cette page ? Cette action est DEFINITIVE et entrainera la suppression de tous les contenus relatifs à cette personne.')).'</td>';
        			
        			echo '</tr>';
        		}
        	?>
        </table>
        <?php
            echo '<p><span class="custom-label">'.$this->Html->link(__('Ajouter un proche'),array('controller'=>'defunts','action'=>'addall')).'</span></p>';
        ?>
    </div>
</div>  
<?php endif ?>          
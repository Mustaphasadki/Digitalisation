<div class="small-12 medium-12 large-12 bord columns nopuce">
    <h3>Bienvenue <?php echo $user['User']['username']; ?></h3>
        <ul>
            <li>
                <?php
                    echo $this->Html->link('Premiers pas sur Scanepitaphe (didacticiel)',array('controller'=>'families','action'=>'stepone'));
                ?>
            </li> 
            <li>
                <?php
                    echo $this->Html->link('Tableau de bord',array('controller'=>'users','action'=>'account',$user['User']['id']));
                ?>
            </li>            
            <li>
                <?php
                    echo $this->Html->link('Vos familles',array('controller'=>'families','action'=>'liste'));
                ?>
            </li>
            <li><?php
                    echo $this->Html->link('Les membres de vos familles',array('controller'=>'defunts','action'=>'listeall',$user['User']['id']));
                ?>
            </li>
            <li>&nbsp;</li>
            <li><?php
                    echo $this->Html->link('Le Scanshop',array('controller'=>'products','action'=>'scanshop',));
                ?>
            </li> 
            <li><?php
                    echo $this->Html->link('Mon panier',array('controller'=>'checkouts','action'=>'cart',));
                ?>
            </li>
            <li><?php
                    echo $this->Html->link('Mes commandes',array('controller'=>'orders','action'=>'myorder',));
                ?>
            </li>
            <li>&nbsp;</li>
            <li><?php
                    echo $this->Html->link('Mon compte',array('controller'=>'users','action'=>'info'));
                ?>
            </li>
            <li>&nbsp;</li>
            <li><?php $pers = $this->requestAction('defunts/pers/'); ?><?php if(!empty($pers)){echo 'Accès direct';} ?>
                <ul><?php if(!empty($pers)){echo 'Voir une page';} ?>
                
                    <?php
                        foreach ($pers as $key => $value) {
                            echo '<li>'.$this->Html->link($value['Defunt']['firstname'].' '.$value['Defunt']['name'],array('controller'=>'clientpages','action'=>'view',$value['Defunt']['id'])).'</li>';
                        }
                    ?>  
                </ul>
                <br/>
                <ul><?php if(!empty($pers)){echo 'Modifier une page';} ?>
                    <?php
                        foreach ($pers as $key => $value) {
                            echo '<li>'.$this->Html->link($value['Defunt']['firstname'].' '.$value['Defunt']['name'],array('controller'=>'clientpages','action'=>'manage',$value['Defunt']['id'])).'</li>';
                        }
                    ?>  
                </ul>
            </li>
            <li>&nbsp;</li>
            <li>______________</li>
            <li><?php echo $this->Html->link(
                        'Retour à la page précédente',
                        $this->request->referer(),
                        array('title'=>'bouton pour revenir à la page précédente')
                        ); ?></li>
            
        </ul>
    </div>
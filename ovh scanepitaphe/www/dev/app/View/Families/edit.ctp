<div class="row minha">
    <div class="row">
        <div class="small-12 medium-12 large-12 columns center">
            <h3>Modifier les informations pour la famille <?php echo $this->request->data['Family']['name']; ?></h3>
        </div>
        <div class="small-12 medium-12 large-12 columns center blacka">
            <h6><i class="fa fa-arrow-circle-left"></i> <?php echo $this->Html->link(
                            'Retour à la page précédente',
                            $this->request->referer(),
                            array('title'=>'bouton pour revenir à la page précédente')
                            ); ?></h6>
        </div>
    </div>
    <div class="row">
        <div class="small-12 medium-12 large-12 tdb lignetop">
            <?php
            echo $this->Form->create('Family');
            echo $this->Form->input('id');
                echo $this->Form->input('name',array('label' => 'Nom','placeholder'=>'renseignez le nom de la famille'));
                echo $this->Form->input('description',array('label' => 'Description','placeholder'=>'description de la famille (facultatif)'));
                echo $this->Form->submit('Enregistrer les modifications',array('class'=>'buttonvioletokfull postfix')); 
                echo $this->Form->end();
        ?>
        </div>
    </div>
</div>
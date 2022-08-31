<?php
$myArray=[
    '<strong>Come state implementando la recente decisione della Corte di giustizia dell<a href="">Unione europea (CGUE) relativa al diritto all oblio</a>'=>
    ['paragraph1',
        'paragraph2',
        'paragraph3',
        'paragraph4',
        'paragraph5',],
        '<strong>Come state implementando la recente decisione della Corte di giustizia dell<a href="">Unione europea (CGUE) relativa al diritto all oblio</a>'=>
        [
            'paragraph1',
        'paragraph2',
        'paragraph3',
        'paragraph4',
        'paragraph5',
        ],
            '<strong>Come state implementando la recente decisione della Corte di giustizia dell<a href="">Unione europea (CGUE) relativa al diritto all oblio</a>'=>
            ['paragraph1',
            'paragraph2',
            'paragraph3',
            'paragraph4',
            'paragraph5',],
                '<strong>Come state implementando la recente decisione della Corte di giustizia dell<a href="">Unione europea (CGUE) relativa al diritto all oblio</a>'=>
                ['paragraph1',
                'paragraph2',
                'paragraph3',
                'paragraph4',
                'paragraph5',],
            
];
 ?>
        <?php while($myArray < 5) $i++ ?>
        <?php foreach($myArray as $title => $paragraph) :?>
            <?php foreach($paragraph as $value) :?>
                <div>
                    <h2><?php echo $title ?></h2>
                    <h4><?php echo $value ?>
                    </h4>
                </div>
            <?php endforeach;?>
        <?php endforeach;?>
    
   
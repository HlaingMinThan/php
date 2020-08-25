<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php 
        $home=<<<HDD
            <div>
            <h1>Home</h1>
            <h2>Welcome From My php and git deep learning process</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde animi neque soluta, id perferendis, dolorem eaque nisi quis rerum officiis repellendus, omnis voluptates? Repudiandae laudantium sed dignissimos accusantium. Fuga ad nihil sequi ut magnam deserunt laudantium laboriosam voluptatem voluptas, nisi asperiores eius ea explicabo dolorum? Sit a vel iure tempora asperiores repellendus, unde, corporis laudantium aliquam, neque adipisci officiis! Error corporis aperiam omnis quibusdam placeat nostrum molestiae maxime perferendis sed iusto asperiores doloremque, eum deserunt repellat perspiciatis quas rem. Sed repudiandae, nobis unde harum error dolorum nisi ratione laudantium! Illum recusandae eos officia, sit facere voluptatum ex ad enim cumque numquam, necessitatibus, culpa excepturi non quidem reprehenderit. Nemo eum distinctio vitae dignissimos aspernatur, expedita deleniti recusandae numquam minus fugiat ipsum consequatur omnis hic quos molestias culpa voluptates illo iusto unde deserunt! Magnam, quasi quae quibusdam vel totam sapiente nesciunt atque vero maiores id ad nihil animi tenetur incidunt mollitia alias accusamus cum debitis explicabo harum ex minus? Rem, doloribus corrupti! Perferendis quod hic aliquam, repellat magnam voluptates sit dolorum nemo aut? Dolorum veniam quo, voluptas ipsum harum unde eligendi. Quasi corporis quo dolorem repellat odio quis dicta porro hic culpa vitae, cum labore fuga dolor mollitia suscipit delectus corrupti soluta?</p>
            </div>
        HDD;
        $aungaung=<<<HDD
            <div>
            <h1>Aung Aung</h1>
            <h2>Welcome From My Bio</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde animi neque soluta, id perferendis, dolorem eaque nisi quis rerum officiis repellendus, omnis voluptates? Repudiandae laudantium sed dignissimos accusantium. Fuga ad nihil sequi ut magnam deserunt laudantium laboriosam voluptatem voluptas, nisi asperiores eius ea explicabo dolorum? Sit a vel iure tempora asperiores repellendus, unde, corporis laudantium aliquam, neque adipisci officiis! Error corporis aperiam omnis quibusdam placeat nostrum molestiae maxime perferendis sed iusto asperiores doloremque, eum deserunt repellat perspiciatis quas rem. Sed repudiandae, nobis unde harum error dolorum nisi ratione laudantium! Illum recusandae eos officia, sit facere voluptatum ex ad enim cumque numquam, necessitatibus, culpa excepturi non quidem reprehenderit. Nemo eum distinctio vitae dignissimos aspernatur, expedita deleniti recusandae numquam minus fugiat ipsum consequatur omnis hic quos molestias culpa voluptates illo iusto unde deserunt! Magnam, quasi quae quibusdam vel totam sapiente nesciunt atque vero maiores id ad nihil animi tenetur incidunt mollitia alias accusamus cum debitis explicabo harum ex minus? Rem, doloribus corrupti! Perferendis quod hic aliquam, repellat magnam voluptates sit dolorum nemo aut? Dolorum veniam quo, voluptas ipsum harum unde eligendi. Quasi corporis quo dolorem repellat odio quis dicta porro hic culpa vitae, cum labore fuga dolor mollitia suscipit delectus corrupti soluta?</p>
            </div>
        HDD;
        $kyawkyaw=<<<HDD
            <div>
            <h1>Kyaw Kyaw</h1>
            <h2>Welcome From My Bio</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde animi neque soluta, id perferendis, dolorem eaque nisi quis rerum officiis repellendus, omnis voluptates? Repudiandae laudantium sed dignissimos accusantium. Fuga ad nihil sequi ut magnam deserunt laudantium laboriosam voluptatem voluptas, nisi asperiores eius ea explicabo dolorum? Sit a vel iure tempora asperiores repellendus, unde, corporis laudantium aliquam, neque adipisci officiis! Error corporis aperiam omnis quibusdam placeat nostrum molestiae maxime perferendis sed iusto asperiores doloremque, eum deserunt repellat perspiciatis quas rem. Sed repudiandae, nobis unde harum error dolorum nisi ratione laudantium! Illum recusandae eos officia, sit facere voluptatum ex ad enim cumque numquam, necessitatibus, culpa excepturi non quidem reprehenderit. Nemo eum distinctio vitae dignissimos aspernatur, expedita deleniti recusandae numquam minus fugiat ipsum consequatur omnis hic quos molestias culpa voluptates illo iusto unde deserunt! Magnam, quasi quae quibusdam vel totam sapiente nesciunt atque vero maiores id ad nihil animi tenetur incidunt mollitia alias accusamus cum debitis explicabo harum ex minus? Rem, doloribus corrupti! Perferendis quod hic aliquam, repellat magnam voluptates sit dolorum nemo aut? Dolorum veniam quo, voluptas ipsum harum unde eligendi. Quasi corporis quo dolorem repellat odio quis dicta porro hic culpa vitae, cum labore fuga dolor mollitia suscipit delectus corrupti soluta?</p>
            </div>
        HDD;
        if(isset($_GET['name'])){
            $viewName=$_GET['name'];
            if($viewName=="aungaung"){
                echo $aungaung;
            }elseif($viewName=="kyawkyaw"){
                echo $kyawkyaw;
            }else{
                echo $home;
            }
 
            
        }else{
            echo $home;

        }
      
    ?>
  
</body>
</html> 
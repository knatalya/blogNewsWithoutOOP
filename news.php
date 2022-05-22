<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fonts/raleway/raleway.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="/resources/favicon.ico">
    <title>Новость</title>
</head>
<body>
<div class="container">
    <a href="index.php" class="back">
        <img src="resources/arrow.svg" alt="Вернуться назад">
        <span>назад к списку</span>
    </a>
    <header>
        <h1>Новость 1</h1>
        <div>
            <a href="#openModal" class="edit">Редактировать</a>
            <a type="button" class="delete">Удалить</a>
        </div>
    </header>
    <p class="date">20 мая 2022</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent et finibus diam. Pellentesque eu tincidunt risus, vel tempus nibh. Sed feugiat nisl in consectetur aliquam. Quisque fermentum sed dui bibendum pharetra. Etiam at pellentesque eros. Aenean posuere dolor a diam rhoncus placerat. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Donec ornare magna ut vulputate fringilla. Suspendisse turpis lacus, vehicula at diam tincidunt, tristique sollicitudin risus. In vel condimentum libero. Mauris sagittis id neque vel sodales. Suspendisse vitae mi vel nunc egestas consequat quis sit amet nisi. Curabitur non sem et diam efficitur venenatis a ac ipsum. Duis at neque vitae nunc dapibus euismod.

        Curabitur nec velit turpis. Donec sed vehicula elit. Fusce auctor leo vitae urna ornare laoreet. Maecenas hendrerit ornare ipsum, non semper diam interdum nec. Curabitur sagittis ipsum et nibh venenatis elementum. Donec sit amet vulputate tellus. Mauris malesuada nisi et turpis tincidunt consequat. Proin lacinia, nunc non venenatis varius, orci ante porta odio, nec mollis justo diam maximus leo. Morbi hendrerit lorem id lacinia placerat. Nulla at fringilla enim.

        Etiam malesuada, libero vitae congue molestie, elit augue faucibus ipsum, sit amet viverra purus nunc ut tellus. Morbi vestibulum magna ut mollis pharetra. Sed eget augue dignissim, interdum eros ac, sollicitudin velit. Donec ornare auctor ipsum, et porttitor lacus mollis eget. Sed quis urna et est commodo efficitur. Donec felis nisl, sagittis ut laoreet vitae, fringilla id orci. Donec quis velit tincidunt, venenatis massa ut, aliquam augue. Ut egestas, metus sit amet dapibus lobortis, orci est fringilla odio, eget pulvinar ex ligula eu eros. Nam ac nulla blandit, pharetra nisl sit amet, tincidunt nisi. Donec cursus mauris vel iaculis fermentum.

        Sed non risus efficitur, convallis nisl non, venenatis ex. In hac habitasse platea dictumst. Pellentesque ac efficitur urna. Pellentesque volutpat ex at quam convallis accumsan. Quisque ac egestas nisi, a mattis odio. Phasellus gravida, lacus eget tincidunt egestas, tellus neque tristique diam, in placerat augue erat in lectus. Curabitur gravida lacus in luctus ullamcorper. Nunc vitae ipsum nec neque congue pretium in ut urna. Integer nec tortor eu lacus bibendum dapibus eget luctus ex. Aenean neque elit, semper sed vestibulum quis, faucibus vitae tortor. Nulla vulputate felis vitae dignissim faucibus. Praesent rutrum molestie nisl, id molestie lacus pharetra vel. In hac habitasse platea dictumst. Mauris placerat lorem est, in elementum tortor dictum vitae. Duis et nulla sed dolor tempus fringilla.

        Proin eleifend massa ac consequat mattis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus iaculis tincidunt massa, sed tristique enim elementum eget. Morbi ultricies venenatis eleifend. Mauris finibus lorem non arcu maximus aliquam. Sed sit amet enim sodales lorem commodo rhoncus. Fusce ante libero, aliquet et diam sit amet, sodales volutpat arcu.</p>
</div>
<div id="openModal" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Редактирование новости</h3>
                <a href="#close" title="Close" class="close">×</a>
            </div>
            <div class="modal-body">
                <p>Заполните все поля</p>
                <input type="text" placeholder="Заголовок новости" />
                <textarea name="new" id="new" cols="30" rows="10" placeholder="Новость"></textarea>
                <div>
                    <a href="" class="save">Сохранить</a>
                    <a href="#close" class="btn-close">Отменить</a>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
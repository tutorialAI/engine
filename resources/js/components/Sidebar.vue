<template>
	<div>
        <a href="/admin/">
        <div class="sidebar-header logotype">
            <i class="fa fa-cube"></i>
            Админпанель             
        </div>
        </a>
        <ul class="list-unstyled components">
            <router-link to="/admin/users"><li>Пользователи</li></router-link>
            <router-link to="/admin/sites"><li>Сайты</li></router-link>
            <router-link to="/admin/video"><li>Видео</li></router-link>
            <li class=""><a href="adminiztrator.php?page=towns">Сайты</a></li>
            <li class=""><a href="adminiztrator.php?page=actor">Актеры</a></li>
            <li class=""><a href="adminiztrator.php?page=duplicate_testing">Проверка текстов</a></li>
            <li class=""><a href="adminiztrator.php?page=vk">Соцсети</a></li>
            <li class=""><a href="adminiztrator.php?page=categories">Описание категории</a></li>
        </ul>
        <ul class="list-unstyled CTAs">
            <li>
                <a class="download" href="/">Перейти на сайт</a>
            </li>
            <li>
                plutomar&nbsp;<a href="adminiztrator.php?action=logout" class="download">Выход</a>
            </li>
        </ul>
	</div>
</template>
<script>
	
</script>

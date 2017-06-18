<?php $request_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH); ?>
<?php $menu['Главная'] = '/administrator/'; ?>
<?php $menu['Свод (СТАЦИОНАР)'] = '/administrator/stacionar/'; ?>
<?php $menu['Свод (АМБУЛАТОРИЯ)'] = '/administrator/ambulatoria/'; ?>
<?php $menu['Ввод данных с МЗ'] = '/administrator/enterdata/'; ?>
<?php $menu['Свод МЗ (СТАЦИОНАР)'] = '/administrator/stacionarmz/'; ?>
<?php $menu['Свод МЗ (АМБУЛАТОРИЯ)'] = '/administrator/ambulatoriamz/'; ?>
<?php $menu['Промежуточная форма (СТАЦИОНАР)'] = '/administrator/table_stacionar/'; ?>
<?php $menu['Промежуточная форма (АМБУЛАТОРИЯ)'] = '/administrator/table_ambulatoria/'; ?>


<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <?php foreach ($menu as $k => $v) : ?>
                <li<?php if ($v==$request_uri){ echo ' class="active"'; }; ?>><a href="<?php echo $v; ?>"><?php echo $k; ?></a></li>
                <?php endforeach; ?>
                <li><a href="http://anketa.dzo-kostroma.ru/archive/2016/">Архив (2016)</a></li>
            </ul>
        </div>
    </div>
</nav>

<template>
	<div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button type="button" id="sidebarCollapse" class="btn btn btn-primary">
                    <i class="fa fa-bars"></i>
                </button>
                <button class="btn btn-dark d-inline-block d-lg-none ml-auto collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-justify"></i>
                </button>
                <div class="navbar-collapse collapse" id="navbarSupportedContent" style="">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Page</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Page</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Page</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Page</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        Добро пожаловать
		<pre>dashboard: changes information (video, caategories, statisrics e.t.c)</pre>
    </div>
</template>
<script>
export default {
    mounted() {
        console.log('mounted.dashboard')
    }
}

</script>

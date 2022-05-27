<style>
    .hidden{
        display: none;
    }
</style>
<h2 class="text-center">Garagem</h2>
<div class="container">
    <div class="row">
        <div class="col text-center">
            <button id="entry" class="btn btn-light">Entrada</button>
            <button id="search" class="btn btn-light">Busca</button>
        </div>
    </div>
    <div id="entry_form" class="container w-50 hidden">
        <form class="form-group" id="nova_entrada" action="" method="post">
            <div class="row my-2">
                <div class="col-4 ">
                    <input class="form-control" type="text" name="plate" placeholder="Placa">
                </div>
                <div class="col-4 ">
                    <input class="form-control" type="text" name="maker" placeholder="Marca">
                </div>
                <div class="col-4 ">
                    <input class="form-control" type="text" name="model" placeholder="Modelo">
                </div>
            </div>
            <div class="row my-1">
                    <textarea class="form-control" name="service"  rows="5" placeholder="Descrição do Serviço"></textarea>
                </div>
            <div>
                <input class="btn btn-light my-1" type="submit" value="Salvar">
            </div>
        </form>
    </div>
    <div id="search_form" class="container w-50 text-center my-2 hidden">
        <form class="form-fields" id="busca_entrada" action="" method="post">
            <input class="form-control my-2" type="text" name="busca" placeholder="Digite a placa do veículo">
            <div>
                <input type="submit" value="Buscar" class="btn btn-light">
            </div>
        </form>
    </div>
</div>
<?php
require_once 'cabecalho.php';
require_once 'session-start.php';
?>


<form method="post" action="pesquisa_resultado.php">
                        <div class="row">
                            <div class="small-6 large-centered columns">
                                <label> 									
                                    <textarea placeholder="Pesquisa.." name="conteudo" required=""></textarea> </label>
                            </div>
                        </div>
                        <div class="small-6 large-centered columns">
                            <input class="button success" type="submit" value="Pesquisar" />

                        </div>
                    </form>
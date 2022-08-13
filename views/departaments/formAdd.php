<?php
include_once('C:\xampp\htdocs\fg\inventario_site\v3-pendiente\views\partials\header.php');
$html_row ='
        <div class="row mt-4">
            <div class="col-lg-6 mx-auto">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Add a departament</h3>
                    </div>
                    <div class="card-body">
                        <form action="%sdepartaments/add" method="post">
                            <div class="mb-3">
                                <label for="in_charge">In charge</label>
                                <input type="text" name="in_charge" id="in_charge" class="form-control" autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="extension">Extension</label>
                                <input type="text" name="extension" id="extension" class="form-control">
                            </div>
                            <button class="btn btn-primary" type="submit">Send</button>
                        </form>
                    </div>
                    <div class="card-footer">
                        %s
                    </div>
                </div>
            </div>
        </div>
';
printf($html_row,constant('URL_HOME'),$this->message);
?>
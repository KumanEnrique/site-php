<?php
include_once('C:\xampp\htdocs\fg\inventario_site\v3-pendiente\views\partials\header.php');
$html_row = '
        <div class="row mt-4">
            <div class="col-lg-6 mx-auto">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Add a request</h3>
                    </div>
                    <div class="card-body">
                        <form action="%srequest/add" method="post">
                            <div class="mb-3">
                                <label for="folio">Folio</label>
                                <input type="text" name="folio" id="folio" class="form-control" autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="state">State</label>
                                <input type="text" name="state" id="state" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="description">Description</label>
                                <input type="text" name="description" id="description" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="departament">Departament</label>
                                <input type="text" name="departament" id="departament" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="employee">Employee</label>
                                <input type="text" name="employee" id="employee" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="begin_date">Begin date</label>
                                <input type="date" name="begin_date" id="begin_date" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="end_date">End date</label>
                                <input type="date" name="end_date" id="end_date" class="form-control">
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
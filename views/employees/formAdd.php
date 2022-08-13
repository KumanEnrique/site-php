<?php
include_once('C:\xampp\htdocs\fg\inventario_site\v3-pendiente\views\partials\header.php');
$html_row = '
        <div class="row mt-4">
            <div class="col-lg-6 mx-auto">
                <div class="card">
                    <div class="card-header text-center">
                        <h3>Add a employee</h3>
                    </div>
                    <div class="card-body">
                        <form action="%semployees/add" method="post">
                            <div class="mb-3">
                                <label for="name">Name</label>
                                <input type="text" name="name" id="name" class="form-control" autofocus>
                            </div>
                            <div class="mb-3">
                                <label for="control_number">Control Number</label>
                                <input type="text" name="control_number" id="control_number" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="begin_date">Begin date</label>
                                <input type="date" name="begin_date" id="begin_date" class="form-control">
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
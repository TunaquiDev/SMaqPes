@isset($material)
    <button onclick="formReset('#frmProveedor')" data-toggle="modal" data-target="#modal-proveedor" class="list-group-item active"><i class="glyphicon glyphicon-plus"></i> Agregar</button>
    <a class="list-group-item" data-toggle="collapse" href="#proveedores"><i class="glyphicon glyphicon-list"></i> Codigos de Proveedores</a>
    <div id="proveedores" aria-expanded="false" class="collapse">
        <table class="table table-striped table-bordered table-hover" id="dt-proveedores">
            <thead>
            <tr>
                <th style="width: 25%">Código</th>
                <th style="width: 45%">Nombre</th>
                <th style="width: 20%">Precio</th>
                <th style="width: 10%">Acciones</th>
            </tr>
            </thead>
            <tbody>
                @foreach($proveedores as $proveedor)
                    <tr>
                        <td>{{ $proveedor->codigo }}</td>
                        <td>{{ $proveedor->nombre }}</td>
                        <td>S/. {{ $proveedor->precio }}</td>
                        <td class="text-center">
                            <a title="Editar" href="javascript: material.get('{{ $proveedor->id_material_proveedor }}', '{{ $proveedor->codigo }}','{{ $proveedor->nombre }}','{{ $proveedor->descripcion }}','{{ $proveedor->precio }}')" class="btn btn-link"><i class="glyphicon glyphicon-edit"></i></a>
                            <!--<a title="Eliminar" href="" class="btn btn-link"><i class="glyphicon glyphicon-remove"></i></a>-->
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="modal fade" id="modal-proveedor">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close" data-dismiss="modal">&times;</button>
                    <h5 class="modal-title"><i class="glyphicon glyphicon-plus"></i> Nuevo</h5>
                </div>
                <div class="modal-body">
                    <form action="{{ route('materiales.proveedor') }}" method="post" id="frmProveedor" class="form-horizontal">
                        {{ csrf_field() }}
                        <input type="hidden" value="0" id="id_proveedor" name="id_proveedor" />
                        <input data-exclude="true" type="hidden" value="{{ $material->id_material }}" id="id_material" name="id_material" />
                        <div class="form-group">
                            <label for="codigo_proveedor" class="control-label col-xs-2">Código</label>
                            <div class="col-xs-10">
                                <input required type="text" class="form-control" maxlength="20" id="codigo_proveedor" name="codigo_proveedor">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nombre_proveedor" class="control-label col-xs-2">Nombre</label>
                            <div class="col-xs-10">
                                <input type="text" class="form-control" maxlength="100" id="nombre_proveedor" name="nombre_proveedor">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-xs-2">Descripción</label>
                            <div class="col-xs-10">
                                <input maxlength="250" type="text" class="form-control" name="descripcion_proveedor" id="descripcion_proveedor">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="precio_proveedor" class="control-label col-xs-2">Precio</label>
                            <div class="col-xs-4">
                                <input required type="number" class="form-control" name="precio_proveedor" id="precio_proveedor">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button data-dismiss="modal" type="button" class="btn btn-default pull-left">Cerrar</button>
                    <button onclick="material.save()" type="button" class="btn btn-success"><i class="glyphicon glyphicon-save"></i> Guardar</button>
                </div>
            </div>
        </div>
    </div>
@endisset
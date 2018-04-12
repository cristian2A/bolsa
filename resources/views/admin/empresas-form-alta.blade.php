@extends('admin/layout/layout')

@section('title','BdT: Alta de Empresa')
@section('section_title')
<h1>FORMULARIO DE ALTA PARA EMPRESAS</h1>
@endsection

@section('contenido')


<div class="row">
    <div class="col-md-8" style="margin:0 auto;">

                <form>
    
                <fieldset>
                    <legend class="col-md-9">SAU : ALTA EMPRESA</legend>
                    <div class="row">
                        <div class="form-group col-md-8 mt-1">
                            <label class="form-control-label" for="razonsocial">Razón Social</label>
                            <input type="text" class="form-control form-control-sm" id="tipo" placeholder="nombre de la empresa">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="form-control-label" for="tipoempresa">Tipo</label>
                            <select class="form-control form-control-sm" id="tipoempresa">
                                <option>S.A</option>
                                <option>S.R.L</option>
                                <option>SH</option>
                                <option>Organismo Público</option>
                                <option>Otros</option>
                            </select>
                        </div>
                    </div>
                
                    <div class="row">

                        <div class="form-group col-md-4">
                            <label class="form-control-label" for="cuit">CUIT</label>    
                            <input type="text" class="form-control form-control-sm" id="cuit" placeholder="xx-xxxxxxxx-x">
                        </div>
                        <div class="form-group col-md-8">
                            <label class="form-control-label" for="rubro">Rubro</label>    
                            <input type="text" class="form-control form-control-sm" id="rubro" placeholder="Rubro de la empresa">
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-md-12">
                            <label class="form-control-label" for="domicilio">Domicilio</label>    
                            <input type="text" class="form-control form-control-sm" id="domicilio" placeholder="domicilio legal">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label class="form-control-label" for="ciudad">Ciudad</label>    
                            <input type="text" class="form-control form-control-sm" id="ciudad" placeholder="ciudad">                          
                        </div>
                        <div class="form-group col-md-4">
                            <label class="form-control-label" for="provincia">Provincia</label>
                            <select class="form-control form-control-sm" id="provincia">
                                <option>Santa Fe</option>
                                <option>Argentina</option>
                                <option>Holandesas</option>
                                <option>Suecas</option>
                                <option>Santiago del Estero</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <label class="form-control-label" for="cp">CP</label>    
                            <input type="text" class="form-control form-control-sm" id="cp" placeholder="CPostal">
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-5">
                            <label class="form-control-label" for="telefono">Telefono</label>
                            <input type="text" class="form-control form-control-sm" id="telefono" placeholder="numero de telefono">
                        </div>
                        <div class="form-group col-md-7 ">
                            <label class="form-control-label" for="email">Email</label>    
                            <input type="text" class="form-control form-control-sm" id="email" placeholder="email">
                        </div>
                    </div>
                </fieldset>
                <fieldset class="content text-center">
                    <button type="submit" class="btn btn-primary">AGREGAR EMPRESA</button>
                </fieldset>    
            </form>
    
    </div>
</div>
@endsection
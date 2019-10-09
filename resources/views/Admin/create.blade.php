@extends('../layout')
@section('title')
    Ajout de films
@endsection

@section('content')
    <div class="container">
        <div class="row">
{{--            {!! form($form) !!}--}}


    {!! form_start($form) !!}
    {!! form_label($form->titre) !!}
    {!! form_widget($form->titre,['attr'=>['class'=>'form-control','placeholder'=>'Titre']]) !!}
    {!! form_label($form->auteur) !!}
    {!! form_widget($form->auteur,['attr'=>['class'=>'form-control','placeholder'=>'Auteur']]) !!}
    {!! form_label($form->genre) !!}
    {!! form_widget($form->genre,['attr'=>['class'=>'form-control','placeholder'=>'Genre']]) !!}
    {!! form_label($form->annee) !!}
    {!! form_widget($form->annee,['attr'=>['class'=>'form-control','placeholder'=>'Année']]) !!}
    {!! form_label($form->duree) !!}
    {!! form_widget($form->duree,['attr'=>['class'=>'form-control','placeholder'=>'Durée']]) !!}
    {!! form_label($form->img) !!}
    {!! form_widget($form->img) !!}
    {!! form_label($form->synopsys) !!}
    {!! form_widget($form->synopsys) !!}
    {!! form_widget($form->submit,['attr'=>['class'=>'btn btn-primary']]) !!}
    {!! form_end($form) !!}

        </div>
    </div>

@endsection

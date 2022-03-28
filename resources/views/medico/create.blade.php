New Medico
<form action="{{ url('/medico') }}" method="post">
    @csrf
    @include('medico.form')
</form>

@php
  $frameworks = array('first' => 'Laravel', 'second' => 'CodeIgniter', 'third' => 'Yii'); 
@endphp
@foreach ($frameworks as $frm)
  {{ $frm }}
@endforeach

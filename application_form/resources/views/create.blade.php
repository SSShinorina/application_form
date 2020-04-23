@extends('welcome')
 @if(Session::has('message'))
     <h2>{{Session::get('message')}}</h2>
 @endif
{!! Form::open(['url' => 'store']) !!}
<?php
echo Form::label('fname', 'First Name:');
echo Form::text('fname',null,['placeholder'=>'xyz']);?>

<br>
<?php
echo Form::label('lname', 'Last Name:');
echo Form::text('lname',null,['placeholder'=>'abc']);?>
<br>
<?php
echo Form::label('email', 'E-Mail Address:');
echo Form::email('email',null,['placeholder'=>'email@email.com']);?>
<br>
<?php
echo Form::label('phone', 'Phone:');
echo Form::text('phone',null,['placeholder'=>'xxxxxxxxxxx']);?>
<br>
<?php
echo Form::label('website', 'Web Site:');
echo Form::text('website',null,['placeholder'=>'https://']);?>
<br>
<?php
echo Form::label('dob', 'Date of Birth:');
echo Form::date('dob',null,['placeholder'=>'MM-DD-YYYY']);
?>
<br>
<?php
echo Form::label('street', 'Street Address:');
echo Form::text('street',null,['placeholder'=>'']);?>
<br><?php
echo Form::label('address', 'Address Line 2:');
echo Form::text('address',null,['placeholder'=>'']);?>
<br><?php
echo Form::label('city', 'City:');
echo Form::text('city',null,['placeholder'=>'']);?>
<br><?php
echo Form::label('state', 'State/Province/Region:');
echo Form::text('state',null,['placeholder'=>'']);?>
<br><?php
echo Form::label('postal', 'Postal/Zip Code:');
echo Form::text('postal',null,['placeholder'=>'']);?>
<br><?php
echo Form::label('country', 'Country:');
echo Form::select('country', ['B' => 'Bangladesh', 'I' => 'India',
    'P'=>'Pakistan', 'A'=>'America']);?>
<br><?php
echo Form::label('male', 'Male');
echo Form::radio('male', 'male' );
echo Form::label('female', 'Female');
echo Form::radio('female', 'female' );?>
<br><?php
echo Form::label('bio', 'Bio:');
echo Form::textarea('bio',null,['placeholder'=>'']);?>
<br><?php
echo Form::label('division', 'Division of Interest:');
echo Form::label('hr', 'HR Division :');
echo Form::checkbox('hr', 'hr');
echo Form::label('it', 'IT Division :');
echo Form::checkbox('it', 'it');
echo Form::label('marketing', 'Marketing Division :');
echo Form::checkbox('marketing', 'marketing');
echo Form::label('other', 'Other:');
echo Form::checkbox('other', 'other');?>
<br><?php
echo Form::label('salary', 'Expected Salary:');
echo Form::text('salary',null,['placeholder'=>'']);?>
<br><?php
echo Form::label('degree', 'Latest Degree:');
echo Form::select('degree', ['B' => 'Bachelor', 'M' => 'Maters',
    'H'=>'H.S.C', 'S'=>'S.S.C']);?>
<br><?php
echo Form::label('experience', 'Your(s) Experience:');
echo Form::number('experience',null,['placeholder'=>'in year']);?>
<br><?php
echo Form::label('designation', 'Name of Current Designation:');
echo Form::text('designation',null,['placeholder'=>'']);?>
<?php
echo Form::label('cv', 'Upload CV:');?><br>
<?php
echo Form::file('Choose File');?>
<br>
<?php
echo Form::submit('Save');?>

{!! Form::close() !!}


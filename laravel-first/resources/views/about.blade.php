<?php
/**
 * Created by PhpStorm.
 * User: Web App Develop-PHP
 * Date: 1/16/2018
 * Time: 11:07 AM
 */
?>

<a href="<?php echo url('/'); ?>">URL</a>
<a href="<?php echo URL::to('/'); ?>">URL Scope</a>


<a href="<?php echo route('/'); ?>">Home</a>
<a href="<?php echo route('/about'); ?>">About</a>


<a href="{{ route('/')}}">Home{}</a>
<a href="{{ route('/about')}}">About{}</a>

<a href="{!!   route('/') !!}">Home{!}</a>
<a href="{!! route('/about')!!}">About{!}</a>

<h1>Hello About </h1>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;500&family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <title>CSS Tips for developers</title>

    <!-- basic styles  -->
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            min-height: 100vh;
            margin: 0;
            background: #fcfcfc;
            padding-bottom: 25rem;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-family: 'Oswald', sans-serif;
            font-weight: 500;
            margin-top: 0;
            color: #000;
        }


        h1 {
            font-size: 3.5rem;
            padding-top: 3.5rem;
            padding-top: 22.5rem;
        }
        * {
            box-sizing: border-box;
        }

        .title-wrap {

            text-align: center;
        }

        .img-wrap {
            min-height: 300px;
            border: 1px solid grey;
            padding: 20px;
        }

        .img-wrap img{
            max-width: 200px;
        }

        .title-wrap h1 span {
            display: block;
            font-size: 1.8rem;
            font-weight: 600;
        }

        .canvas {
            max-width: 1200px;
            margin: 0 auto;
            width: 100%;
            box-shadow: 0 0 20px #d8d5d5;
            padding: 30px;
            background: #fff;
            margin-bottom: 10rem;
        }

        .d-none {
            display: none !important;
        }

        .w-auto {
            width: auto !important;
        }

        .justify-center {
            justify-content: center;
        }

        p {
            margin-bottom: 2rem;
        }

        code {
            font-weight: 600;
        }

        .frame {
            min-height: 500px;
            width: 100%;
        }

        .div-xl {
            background: #17146d;
            color: #fff;
            padding: 20px;
            max-width: 350px;
            margin-bottom: 20px;
        }
        .div-sm {
            background: #17146d;
            color: #fff;
            padding: 20px;
            max-width: 200px;
            margin-bottom: 20px;
        }
        .div-lg {
            background: #17146d;
            color: #fff;
            padding: 20px;
            max-width: 250px;
            margin-bottom: 20px;
        }

        button:active{
            border: 1px solid red;
        }

    </style>



    <!-- form style  -->
    <style>
        fieldset {
            padding: 0;
            margin: 0;
            border: 0;
            min-width: 0;
        }

        legend {
            display: block;
            width: 100%;
            padding: 0;
            margin-bottom: 20px;
            font-size: 21px;
            line-height: inherit;
            color: #333333;
            border: 0;
            border-bottom: 1px solid #e5e5e5;
        }

        .mt-2 {
            margin-top: 6px;
        }

        .row {
            display: flex;
        }

        .radio-group {
            margin-left: 30px;
            display: flex;
            align-self: center;
        }

        .radio-group label {
            margin: 0 10px 0 5px;
        }

        label {
            display: inline-block;
            max-width: 100%;
        }

        button {
            height: 35px;
            width: 75px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="search"] {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        input[type="radio"],
        input[type="checkbox"] {
            margin-top: 1px \9;
            line-height: normal;
        }

        input[type="file"] {
            display: block;
        }

        input[type="range"] {
            display: block;
            width: 100%;
        }

        select[multiple],
        select[size] {
            height: auto;
        }

        input[type="file"]:focus,
        input[type="radio"]:focus,
        input[type="checkbox"]:focus {
            outline: 5px auto -webkit-focus-ring-color;
            outline-offset: -2px;
        }

        output {
            display: block;
            padding-top: 7px;
            font-size: 14px;
            line-height: 1.42857;
            color: #555555;
        }

        .form-control {
            display: block;
            width: 100%;
            height: 34px;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857;
            color: #555555;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            border-radius: 4px;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
            -webkit-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
            -o-transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
            transition: border-color ease-in-out 0.15s, box-shadow ease-in-out 0.15s;
        }

        .form-control:focus {
            border-color: #66afe9;
            outline: 0;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(102, 175, 233, 0.6);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(102, 175, 233, 0.6);
        }

        .form-control::-ms-expand {
            border: 0;
            background-color: transparent;
        }

        .form-control[disabled],
        .form-control[readonly],
        fieldset[disabled] .form-control {
            background-color: #eeeeee;
            opacity: 1;
        }

        .form-control[disabled],
        fieldset[disabled] .form-control {
            cursor: not-allowed;
        }

        textarea.form-control {
            height: auto;
        }

        input[type="search"] {
            -webkit-appearance: none;
        }

        @media screen and (-webkit-min-device-pixel-ratio: 0) {

            input[type="date"].form-control,
            input[type="time"].form-control,
            input[type="datetime-local"].form-control,
            input[type="month"].form-control {
                line-height: 34px;
            }

            input[type="date"].input-sm,
            .input-group-sm input[type="date"],
            input[type="time"].input-sm,
            .input-group-sm input[type="time"],
            input[type="datetime-local"].input-sm,
            .input-group-sm input[type="datetime-local"],
            input[type="month"].input-sm,
            .input-group-sm input[type="month"] {
                line-height: 30px;
            }

            input[type="date"].input-lg,
            .input-group-lg input[type="date"],
            input[type="time"].input-lg,
            .input-group-lg input[type="time"],
            input[type="datetime-local"].input-lg,
            .input-group-lg input[type="datetime-local"],
            input[type="month"].input-lg,
            .input-group-lg input[type="month"] {
                line-height: 46px;
            }
        }

        .form-group {
            /* margin-bottom: 15px; */
        }

        .radio,
        .checkbox {
            position: relative;
            display: block;
        }

        .radio label,
        .checkbox label {
            min-height: 20px;
            padding-left: 20px;
            margin-bottom: 0;
            font-weight: normal;
            cursor: pointer;
        }

        .radio input[type="radio"],
        .radio-inline input[type="radio"],
        .checkbox input[type="checkbox"],
        .checkbox-inline input[type="checkbox"] {
            position: absolute;
            margin-left: -20px;
            margin-top: 4px \9;
        }

        .radio+.radio,
        .checkbox+.checkbox {
            margin-top: -5px;
        }

        .radio-inline,
        .checkbox-inline {
            position: relative;
            display: inline-block;
            padding-left: 20px;
            margin-bottom: 0;
            vertical-align: middle;
            font-weight: normal;
            cursor: pointer;
        }

        .radio-inline+.radio-inline,
        .checkbox-inline+.checkbox-inline {
            margin-top: 0;
            margin-left: 10px;
        }

        input[type="radio"][disabled],
        input[type="radio"].disabled,
        fieldset[disabled] input[type="radio"],
        input[type="checkbox"][disabled],
        input[type="checkbox"].disabled,
        fieldset[disabled] input[type="checkbox"] {
            cursor: not-allowed;
        }

        .radio-inline.disabled,
        fieldset[disabled] .radio-inline,
        .checkbox-inline.disabled,
        fieldset[disabled] .checkbox-inline {
            cursor: not-allowed;
        }

        .radio.disabled label,
        fieldset[disabled] .radio label,
        .checkbox.disabled label,
        fieldset[disabled] .checkbox label {
            cursor: not-allowed;
        }

        .form-control-static {
            padding-top: 7px;
            padding-bottom: 7px;
            margin-bottom: 0;
            min-height: 34px;
        }

        .form-control-static.input-lg,
        .form-control-static.input-sm {
            padding-left: 0;
            padding-right: 0;
        }

        .input-sm {
            height: 30px;
            padding: 5px 10px;
            font-size: 12px;
            line-height: 1.5;
            border-radius: 3px;
        }

        select.input-sm {
            height: 30px;
            line-height: 30px;
        }

        textarea.input-sm,
        select[multiple].input-sm {
            height: auto;
        }

        .form-group-sm .form-control {
            height: 30px;
            padding: 5px 10px;
            font-size: 12px;
            line-height: 1.5;
            border-radius: 3px;
        }

        .form-group-sm select.form-control {
            height: 30px;
            line-height: 30px;
        }

        .form-group-sm textarea.form-control,
        .form-group-sm select[multiple].form-control {
            height: auto;
        }

        .form-group-sm .form-control-static {
            height: 30px;
            min-height: 32px;
            padding: 6px 10px;
            font-size: 12px;
            line-height: 1.5;
        }

        .input-lg {
            height: 46px;
            padding: 10px 16px;
            font-size: 18px;
            line-height: 1.33333;
            border-radius: 6px;
        }

        select.input-lg {
            height: 46px;
            line-height: 46px;
        }

        textarea.input-lg,
        select[multiple].input-lg {
            height: auto;
        }

        .form-group-lg .form-control {
            height: 46px;
            padding: 10px 16px;
            font-size: 18px;
            line-height: 1.33333;
            border-radius: 6px;
        }

        .form-group-lg select.form-control {
            height: 46px;
            line-height: 46px;
        }

        .form-group-lg textarea.form-control,
        .form-group-lg select[multiple].form-control {
            height: auto;
        }

        .form-group-lg .form-control-static {
            height: 46px;
            min-height: 38px;
            padding: 11px 16px;
            font-size: 18px;
            line-height: 1.33333;
        }

        .has-feedback {
            position: relative;
        }

        .has-feedback .form-control {
            padding-right: 42.5px;
        }

        .form-control-feedback {
            position: absolute;
            top: 0;
            right: 0;
            z-index: 2;
            display: block;
            width: 34px;
            height: 34px;
            line-height: 34px;
            text-align: center;
            pointer-events: none;
        }

        .input-lg+.form-control-feedback,
        .input-group-lg+.form-control-feedback,
        .form-group-lg .form-control+.form-control-feedback {
            width: 46px;
            height: 46px;
            line-height: 46px;
        }

        .input-sm+.form-control-feedback,
        .input-group-sm+.form-control-feedback,
        .form-group-sm .form-control+.form-control-feedback {
            width: 30px;
            height: 30px;
            line-height: 30px;
        }

        .has-success .help-block,
        .has-success .control-label,
        .has-success .radio,
        .has-success .checkbox,
        .has-success .radio-inline,
        .has-success .checkbox-inline,
        .has-success.radio label,
        .has-success.checkbox label,
        .has-success.radio-inline label,
        .has-success.checkbox-inline label {
            color: #3c763d;
        }

        .has-success .form-control {
            border-color: #3c763d;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        }

        .has-success .form-control:focus {
            border-color: #2b542c;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #67b168;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #67b168;
        }

        .has-success .input-group-addon {
            color: #3c763d;
            border-color: #3c763d;
            background-color: #dff0d8;
        }

        .has-success .form-control-feedback {
            color: #3c763d;
        }

        .has-warning .help-block,
        .has-warning .control-label,
        .has-warning .radio,
        .has-warning .checkbox,
        .has-warning .radio-inline,
        .has-warning .checkbox-inline,
        .has-warning.radio label,
        .has-warning.checkbox label,
        .has-warning.radio-inline label,
        .has-warning.checkbox-inline label {
            color: #8a6d3b;
        }

        .has-warning .form-control {
            border-color: #8a6d3b;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        }

        .has-warning .form-control:focus {
            border-color: #66512c;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #c0a16b;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #c0a16b;
        }

        .has-warning .input-group-addon {
            color: #8a6d3b;
            border-color: #8a6d3b;
            background-color: #fcf8e3;
        }

        .has-warning .form-control-feedback {
            color: #8a6d3b;
        }

        .has-error .help-block,
        .has-error .control-label,
        .has-error .radio,
        .has-error .checkbox,
        .has-error .radio-inline,
        .has-error .checkbox-inline,
        .has-error.radio label,
        .has-error.checkbox label,
        .has-error.radio-inline label,
        .has-error.checkbox-inline label {
            color: #a94442;
        }

        .has-error .form-control {
            border-color: #a94442;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
        }

        .has-error .form-control:focus {
            border-color: #843534;
            -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ce8483;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ce8483;
        }

        .has-error .input-group-addon {
            color: #a94442;
            border-color: #a94442;
            background-color: #f2dede;
        }

        .has-error .form-control-feedback {
            color: #a94442;
        }

        .has-feedback label~.form-control-feedback {
            top: 25px;
        }

        .has-feedback label.sr-only~.form-control-feedback {
            top: 0;
        }

        .help-block {
            display: block;
            margin-top: 5px;
            margin-bottom: 10px;
            color: #737373;
        }

        @media (min-width: 768px) {
            .form-inline .form-group {
                display: inline-block;
                margin-bottom: 0;
                vertical-align: middle;
            }

            .form-inline .form-control {
                display: inline-block;
                width: auto;
                vertical-align: middle;
            }

            .form-inline .form-control-static {
                display: inline-block;
            }

            .form-inline .input-group {
                display: inline-table;
                vertical-align: middle;
            }

            .form-inline .input-group .input-group-addon,
            .form-inline .input-group .input-group-btn,
            .form-inline .input-group .form-control {
                width: auto;
            }

            .form-inline .input-group>.form-control {
                width: 100%;
            }

            .form-inline .control-label {
                margin-bottom: 0;
                vertical-align: middle;
            }

            .form-inline .radio,
            .form-inline .checkbox {
                display: inline-block;
                margin-top: 0;
                margin-bottom: 0;
                vertical-align: middle;
            }

            .form-inline .radio label,
            .form-inline .checkbox label {
                padding-left: 0;
            }

            .form-inline .radio input[type="radio"],
            .form-inline .checkbox input[type="checkbox"] {
                position: relative;
                margin-left: 0;
            }

            .form-inline .has-feedback .form-control-feedback {
                top: 0;
            }
        }

        .form-horizontal .radio,
        .form-horizontal .checkbox,
        .form-horizontal .radio-inline,
        .form-horizontal .checkbox-inline {
            margin-top: 0;
            margin-bottom: 0;
            padding-top: 7px;
        }

        .form-horizontal .radio,
        .form-horizontal .checkbox {
            min-height: 27px;
        }

        .form-horizontal .form-group {
            margin-left: -15px;
            margin-right: -15px;
        }

        .form-horizontal .form-group:before,
        .form-horizontal .form-group:after {
            content: " ";
            display: table;
        }

        .form-horizontal .form-group:after {
            clear: both;
        }

        @media (min-width: 768px) {
            .form-horizontal .control-label {
                text-align: right;
                margin-bottom: 0;
                padding-top: 7px;
            }
        }

        .form-horizontal .has-feedback .form-control-feedback {
            right: 15px;
        }

        @media (min-width: 768px) {
            .form-horizontal .form-group-lg .control-label {
                padding-top: 11px;
                font-size: 18px;
            }
        }

        @media (min-width: 768px) {
            .form-horizontal .form-group-sm .control-label {
                padding-top: 6px;
                font-size: 12px;
            }
        }
    </style>


    <!-- table style  -->
    <style>
        .table {
            width: 100%;
            max-width: 100%;
            margin-bottom: 1rem;
        }

        .table th,
        .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #eceeef;
        }

        .table thead th {
            vertical-align: bottom;
        }

        .table tbody+tbody {
            border-top: 2px solid #eceeef;
        }

        .table .table {
            background-color: #fff;
        }

        .table-sm th,
        .table-sm td {
            padding: 0.3rem;
        }

        .table-bordered {
            border: 1px solid #eceeef;
        }

        .table-bordered th,
        .table-bordered td {
            border: 1px solid #eceeef;
        }

        .table-bordered thead th,
        .table-bordered thead td {
            border-bottom-width: 2px;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, 0.05);
        }

        .table-hover tbody tr:hover {
            background-color: rgba(0, 0, 0, 0.075);
        }

        .table-active,
        .table-active>th,
        .table-active>td {
            background-color: rgba(0, 0, 0, 0.075);
        }

        .table-hover .table-active:hover {
            background-color: rgba(0, 0, 0, 0.075);
        }

        .table-hover .table-active:hover>td,
        .table-hover .table-active:hover>th {
            background-color: rgba(0, 0, 0, 0.075);
        }

        .table-success,
        .table-success>th,
        .table-success>td {
            background-color: #dff0d8;
        }

        .table-hover .table-success:hover {
            background-color: #d0e9c6;
        }

        .table-hover .table-success:hover>td,
        .table-hover .table-success:hover>th {
            background-color: #d0e9c6;
        }

        .table-info,
        .table-info>th,
        .table-info>td {
            background-color: #d9edf7;
        }

        .table-hover .table-info:hover {
            background-color: #c4e3f3;
        }

        .table-hover .table-info:hover>td,
        .table-hover .table-info:hover>th {
            background-color: #c4e3f3;
        }

        .table-warning,
        .table-warning>th,
        .table-warning>td {
            background-color: #fcf8e3;
        }

        .table-hover .table-warning:hover {
            background-color: #faf2cc;
        }

        .table-hover .table-warning:hover>td,
        .table-hover .table-warning:hover>th {
            background-color: #faf2cc;
        }

        .table-danger,
        .table-danger>th,
        .table-danger>td {
            background-color: #f2dede;
        }

        .table-hover .table-danger:hover {
            background-color: #ebcccc;
        }

        .table-hover .table-danger:hover>td,
        .table-hover .table-danger:hover>th {
            background-color: #ebcccc;
        }

        .thead-inverse th {
            color: #fff;
            background-color: #292b2c;
        }

        .thead-default th {
            color: #464a4c;
            background-color: #eceeef;
        }

        .table-inverse {
            color: #fff;
            background-color: #292b2c;
        }

        .table-inverse th,
        .table-inverse td,
        .table-inverse thead th {
            border-color: #fff;
        }

        .table-inverse.table-bordered {
            border: 0;
        }

        .table-responsive {
            display: block;
            width: 100%;
            overflow-x: auto;
            -ms-overflow-style: -ms-autohiding-scrollbar;
        }

        .table-responsive.table-bordered {
            border: 0;
        }

        .table th,
        .table td {
            padding: 0.75rem;
            vertical-align: top;
            border-top: 1px solid #dee2e6;
        }

        .table thead th {
            vertical-align: bottom;
        }

        .table tbody+tbody {
            border-top: 2px solid #dee2e6;
        }

        .table-sm th,
        .table-sm td {
            padding: 0.3rem;
        }

        .table-bordered {
            border: 1px solid #dee2e6;
        }

        .table-bordered th,
        .table-bordered td {
            border: 1px solid #dee2e6;
        }

        .table-bordered thead th,
        .table-bordered thead td {
            border-bottom-width: 2px;
        }

        .table-borderless th,
        .table-borderless td,
        .table-borderless thead th,
        .table-borderless tbody+tbody {
            border: 0;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(0, 0, 0, 0.05);
        }

        .table-hover tbody tr:hover {
            color: #212529;
            background-color: rgba(0, 0, 0, 0.075);
        }

        .table-primary,
        .table-primary>th,
        .table-primary>td {
            background-color: #b8daff;
        }

        .table-primary th,
        .table-primary td,
        .table-primary thead th,
        .table-primary tbody+tbody {
            border-color: #7abaff;
        }

        .table-hover .table-primary:hover {
            background-color: #9fcdff;
        }

        .table-hover .table-primary:hover>td,
        .table-hover .table-primary:hover>th {
            background-color: #9fcdff;
        }

        .table-secondary,
        .table-secondary>th,
        .table-secondary>td {
            background-color: #d6d8db;
        }

        .table-secondary th,
        .table-secondary td,
        .table-secondary thead th,
        .table-secondary tbody+tbody {
            border-color: #b3b7bb;
        }

        .table-hover .table-secondary:hover {
            background-color: #c8cbcf;
        }

        .table-hover .table-secondary:hover>td,
        .table-hover .table-secondary:hover>th {
            background-color: #c8cbcf;
        }

        .table-success,
        .table-success>th,
        .table-success>td {
            background-color: #c3e6cb;
        }

        .table-success th,
        .table-success td,
        .table-success thead th,
        .table-success tbody+tbody {
            border-color: #8fd19e;
        }

        .table-hover .table-success:hover {
            background-color: #b1dfbb;
        }

        .table-hover .table-success:hover>td,
        .table-hover .table-success:hover>th {
            background-color: #b1dfbb;
        }

        .table-info,
        .table-info>th,
        .table-info>td {
            background-color: #bee5eb;
        }

        .table-info th,
        .table-info td,
        .table-info thead th,
        .table-info tbody+tbody {
            border-color: #86cfda;
        }

        .table-hover .table-info:hover {
            background-color: #abdde5;
        }

        .table-hover .table-info:hover>td,
        .table-hover .table-info:hover>th {
            background-color: #abdde5;
        }

        .table-warning,
        .table-warning>th,
        .table-warning>td {
            background-color: #ffeeba;
        }

        .table-warning th,
        .table-warning td,
        .table-warning thead th,
        .table-warning tbody+tbody {
            border-color: #ffdf7e;
        }

        .table-hover .table-warning:hover {
            background-color: #ffe8a1;
        }

        .table-hover .table-warning:hover>td,
        .table-hover .table-warning:hover>th {
            background-color: #ffe8a1;
        }

        .table-danger,
        .table-danger>th,
        .table-danger>td {
            background-color: #f5c6cb;
        }

        .table-danger th,
        .table-danger td,
        .table-danger thead th,
        .table-danger tbody+tbody {
            border-color: #ed969e;
        }

        .table-hover .table-danger:hover {
            background-color: #f1b0b7;
        }

        .table-hover .table-danger:hover>td,
        .table-hover .table-danger:hover>th {
            background-color: #f1b0b7;
        }

        .table-light,
        .table-light>th,
        .table-light>td {
            background-color: #fdfdfe;
        }

        .table-light th,
        .table-light td,
        .table-light thead th,
        .table-light tbody+tbody {
            border-color: #fbfcfc;
        }

        .table-hover .table-light:hover {
            background-color: #ececf6;
        }

        .table-hover .table-light:hover>td,
        .table-hover .table-light:hover>th {
            background-color: #ececf6;
        }

        .table-dark,
        .table-dark>th,
        .table-dark>td {
            background-color: #c6c8ca;
        }

        .table-dark th,
        .table-dark td,
        .table-dark thead th,
        .table-dark tbody+tbody {
            border-color: #95999c;
        }

        .table-hover .table-dark:hover {
            background-color: #b9bbbe;
        }

        .table-hover .table-dark:hover>td,
        .table-hover .table-dark:hover>th {
            background-color: #b9bbbe;
        }

        .table-active,
        .table-active>th,
        .table-active>td {
            background-color: rgba(0, 0, 0, 0.075);
        }

        .table-hover .table-active:hover {
            background-color: rgba(0, 0, 0, 0.075);
        }

        .table-hover .table-active:hover>td,
        .table-hover .table-active:hover>th {
            background-color: rgba(0, 0, 0, 0.075);
        }

        .table .thead-dark th {
            color: #fff;
            background-color: #343a40;
            border-color: #454d55;
        }

        .table .thead-light th {
            color: #495057;
            background-color: #e9ecef;
            border-color: #dee2e6;
        }

        .table-dark {
            color: #fff;
            background-color: #343a40;
        }

        .table-dark th,
        .table-dark td,
        .table-dark thead th {
            border-color: #454d55;
        }

        .table-dark.table-bordered {
            border: 0;
        }

        .table-dark.table-striped tbody tr:nth-of-type(odd) {
            background-color: rgba(255, 255, 255, 0.05);
        }

        .table-dark.table-hover tbody tr:hover {
            color: #fff;
            background-color: rgba(255, 255, 255, 0.075);
        }

        @media (max-width: 575.98px) {
            .table-responsive-sm {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            .table-responsive-sm>.table-bordered {
                border: 0;
            }
        }

        @media (max-width: 767.98px) {
            .table-responsive-md {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            .table-responsive-md>.table-bordered {
                border: 0;
            }
        }

        @media (max-width: 991.98px) {
            .table-responsive-lg {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            .table-responsive-lg>.table-bordered {
                border: 0;
            }
        }

        @media (max-width: 1199.98px) {
            .table-responsive-xl {
                display: block;
                width: 100%;
                overflow-x: auto;
                -webkit-overflow-scrolling: touch;
            }

            .table-responsive-xl>.table-bordered {
                border: 0;
            }
        }

        .table-responsive {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .table-responsive>.table-bordered {
            border: 0;
        }

        .table-responsive {
            display: block;
            width: 100%;
            overflow-x: auto;
            -webkit-overflow-scrolling: touch;
        }

        .table-responsive>.table-bordered {
            border: 0;
        }
    </style>

</head>

<body>
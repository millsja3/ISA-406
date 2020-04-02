@extends('MiamiTheme::layouts.noNav')
@section('title', 'ISA Scholarship Submissions')
@section('header', 'ISA Scholarship Submitted Applications')
@section('logOut')
    <div class="col-3 text-right logout-button">
        <a href="{{ url('/logout') }}" style="margin-bottom:10px" class="btn btn-primary">{{ trans('global.logout') }}</a>
    </div>
@endsection
@section('content')
    <h1> Information Systems and Analytics Scholarships </h1>
    <p>Please select how you would like to view the submitted applications</p>
    <form>
        <select required name="viewType" id="viewType">
            <option value="" disabled selected hidden>Choose a view method: </option>
            <option value="scholarship" >View By Scholarship</option>
            <option value="pastRecipients" >View Past Scholarship Recipients</option>
            <option value="specificApplication" >View a Specific Application</option>
        </select>
// tried to add in code to handle the query outlines, currently throws an error.
//        <?php
//            $e = document.getElementById("viewType");
//            $selectedSort = $e.options[e.selectedIndex].value;
//            if ($selectedSort.equals("scholarship")) {
//                // add in code to handle which scholarship to sort by with the
//                // same item source as the student view
//                ?>
//                <p>Select which Scholarship Applications you would like to view</p>
//                <select required name="scholarship" id="scholarship">
//                    <option value="" disabled selected hidden>Choose A Scholarship: </option>
//                    <option value="EY" >EY</option>
//                    <option value="KPMG" >KPMG</option>
//                    <option value="Worldplay" >Worldplay</option>
//                </select>
//            <?php
//            }
//            elseif ($selectedSort.equals("pastRecipients")) {
//                // display students who have won scholarships in the past to
//                // ensure they do not recieve the same scholarship in the future
//            }
//            elseif ($selectedSort.equals("specificApplication")) {
//                // add a entry for the team to enter a name that will then
//                // pull that specific scholarship information up.
//                ?>
//                <p> Please enter the applicants name whose application you want to view: </p>
//                <input type="entry" id="name" name="name">
//                <?php
//            }
//        ?>

    </form>
@endsection

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TFA調整さん | 見積作成</title>
    <!-- Material Design for Bootstrap 読み込み 開始 -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}" />
    <script type="text/javascript" src="{{ asset('js/mdb.min.js') }}" defer></script>
    <!-- Material Design for Bootstrap 読み込み 終了 -->
    <style>
        .edit-icon {
            cursor: pointer;
        }
        .btn {
            font-size: 0.8rem;
            padding: 0.5rem 1rem;
        }
    </style>
</head>

<body>
<!-- ヘッダー開始 -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="#">TFA調整さん</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('back_to_projects') }}">プロジェクトに戻る</a>
            </li>
            <li class="nav-item">
                <button onclick="toggleEditMode()" id="edit-button" class="btn btn-primary">編集</button>
            </li>
            <li class="nav-item">
                <button onclick="document.getElementById('update-form').submit();" class="btn btn-primary">保存</button>
            </li>
        </ul>
    </div>
</nav>
<!--ヘッダー終了-->


    <div class="container mt-4">
        <div class="row">
            <form id="update-form" action="{{ route('estimate.update', ['project' => $estimate->id]) }}" method="POST" class="w-100">
                @csrf
                @method('PUT')
                <table class="table table-bordered">
                    <tr>
                        <td>Daily Rate</td>
                        <td>
                            <span id="daily_rate">{{ $estimate->daily_rate }}</span>
                            <input type="text" id="daily_rate" name="daily_rate" value="{{ $estimate->daily_rate }}" class="form-control" style="display: none;">
                        </td>
                    </tr>

                    <tr>
                        <td>Overtime_rate</td>
                        <td>
                            <span id="overtime_rate">{{ $estimate->overtime_rate }}</span>
                            <input type="text" id="overtime_rate" name="overtime_rate" value="{{ $estimate->overtime_rate }}" class="form-control" style="display: none;">
                        </td>
                    </tr>

                    <tr>
                        <td>Extra Charge</td>
                        <td>
                            <span id="extra_charge">{{ $estimate->extra_charge }}</span>
                            <input type="text" id="extra_charge" name="extra_charge" value="{{ $estimate->extra_charge }}" class="form-control" style="display: none;">
                        </td>
                    </tr>

                    <tr>
                        <td>Accomodation fee</td>
                        <td>
                            <span id="accomodation_fee">{{ $estimate->accomodation_fee }}</span>
                            <input type="text" id="accomodation_fee" name="accomodation_fee" value="{{ $estimate->accomodation_fee }}" class="form-control" style="display: none;">
                        </td>
                    </tr>

                    <tr>
                        <td>Traveling fee</td>
                        <td>
                            <span id="travelling_fee">{{ $estimate->travelling_fee }}</span>
                            <input type="text" id="travelling_fee" name="travelling_fee" value="{{ $estimate->travelling_fee }}" class="form-control" style="display: none;">
                        </td>
                    </tr>

                    <tr>
                        <td>Other fee</td>
                        <td>
                            <span id="other_fee">{{ $estimate->other_fee }}</span>
                            <input type="text" id="other_fee" name="other_fee" value="{{ $estimate->other_fee }}" class="form-control" style="display: none;">
                        </td>
                    </tr>  
                    
                    <tr>
                        <td>Other fee Remarks</td>
                        <td>
                            <span id="other_fee_remarks">{{ $estimate->other_fee }}</span>
                            <input type="text" id="other_fee_remarks" name="other_fee_remarks" value="{{ $estimate->other_fee_remarks }}" class="form-control" style="display: none;">
                        </td>
                    </tr>                     

                    <tr>
                        <td>Total fee</td>
                        <td>
                            <span id="total_fee">{{ $estimate->total_fee }}</span>
                            <input type="text" id="total_fee" name="total_fee" value="{{ $estimate->total_fee }}" class="form-control" style="display: none;">
                        </td>
                    </tr>  

                    <tr>
                        <td>Remarks</td>
                        <td>
                            <span id="remarks">{{ $estimate->remarks }}</span>
                            <input type="text" id="remarks" name="remarks" value="{{ $estimate->remarks }}" class="form-control" style="display: none;">
                        </td>
                    </tr>  

                    <tr>
                        <td>Project ID</td>
                        <td>
                            <span id="project_id">{{ $estimate->project_id }}</span>
                            <input type="text" id="project_id" name="project_id" value="{{ $estimate->project_id }}" class="form-control" style="display: none;">
                        </td>
                    </tr>  

                </table>
            </form>
            <a href="{{ route('back_to_projects') }}" class="btn btn-primary mt-2">戻る</a>
        </div>
    </div>

    <script>
        let editMode = false;

        function toggleEditMode() {
            editMode = !editMode;
            const editButton = document.getElementById('edit-button');
            editButton.innerText = editMode ? 'キャンセル' : '編集';

            const fields = [
                'daily_rate', 'overtime_rate', 'extra_charge',
                'accomodation_fee', 'traveling_fee', 'other_fee',
                'other_fee_remarks', 'total_fee', 'remarks',
                'project_id'
            ];

            fields.forEach(fieldId => {
                const textElement = document.getElementById(fieldId);
                const inputElement = document.getElementById(fieldId);
                if (editMode) {
                    textElement.style.display = 'none';
                    inputElement.style.display = 'block';
                } else {
                    textElement.style.display = 'block';
                    inputElement.style.display = 'none';
                }
            });
        }
    </script>
</body>

</html>

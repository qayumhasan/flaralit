<div class="table-responsive">
    <table id="order-listing" class="table" style="width: 100%">
        <thead>
        <tr>
            <th>#</th>
            <th>Type</th>
            <th>Heading</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @php $counter = 1 @endphp
        @foreach($instructions as $instruction)
            <tr>
                <td>{{ $counter++ }}</td>
                <td>{{ \App\Models\ImageGuidelineInstruction::INSTRUCTION_TYPES[$instruction->instruction_type] }}</td>
                <td>{{ $instruction->heading }}</td>
                <td>
                    <div class="d-flex">
                        <a href="{{ route('admin.guideline.image.edit_instruction', $instruction->instruction_id) }}"
                           class="btn btn-outline-warning" title="Deactivate user">
                            <i class="ti-pencil"></i>
                        </a>
                        <form class="ml-2" action="{{ route('admin.guideline.image.delete_instruction', $instruction->instruction_id) }}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-outline-danger show_confirm" title="Delete">
                                <i class="ti-trash"></i>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

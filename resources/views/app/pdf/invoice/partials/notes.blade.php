@if ($invoice->notes != '' && $invoice->notes != null)
    <div class="notes">
        <div class="notes-label">
            Notas
        </div>
        {!! nl2br(htmlspecialchars($invoice->notes)) !!}
    </div>
@endif
<div>
    <strong>Error ({$code}) :</strong>
    {if $code=='XIII'}
        Error no encontrado.
    {elseif $code == 'XV'}
        Ruta no encontrada, verifique la ruta a la que hace referencia.
    {else}
        No Existe un error asociado a éste #
    {/if}
</div>

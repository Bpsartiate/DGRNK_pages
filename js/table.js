new DataTable('#example, #example1', {
    responsive: {
        details: {
            renderer: function (api, rowIdx, columns) {
                let data = columns.map((col, i) => {
                    return col.hidden
                        ? '<tr data-dt-row="' +
                                col.rowIndex +
                                '" data-dt-column="' +
                                col.columnIndex +
                                '">' +
                                '<td>' +
                                col.title +
                                ':' +
                                '</td> ' +
                                '<td>' +
                                col.data +
                                '</td>' +
                                '</tr>'
                        : '';
                }).join('');
 
                let table = document.createElement('table');
                table.innerHTML = data;
 
                return data ? table : false;
            }
        }
    }
});


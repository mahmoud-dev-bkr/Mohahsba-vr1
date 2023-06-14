<!DOCTYPE html>
<html>
<head>
    <title>Invoice</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
    <script>
        function downloadPDF() {
            const doc = new jsPDF();
            doc.html(document.body, {
                callback: function () {
                    doc.save("my-web-page.pdf");
                }
            });
        }
    </script>
    <script>
        window.onload = function() {
            window.print();
        }
    </script>
    <style>
        /* Reset default browser styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Global styles */
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
            line-height: 1.5;
            color: #333;
        }

        /* Page header styles */
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 40px;
            background-color: #f2f2f2;
            border-bottom: 1px solid #ccc;
        }

        .page-header h1 {
            font-size: 24px;
            font-weight: bold;
            color: #333;
        }

        .page-header p {
            font-size: 16px;
            color: #666;
        }

        /* Invoice details styles */
        .invoice-details {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 40px;
            background-color: #fff;
            border-bottom: 1px solid #ccc;
        }

        .invoice-details p {
            font-size: 16px;
            color:#333;
            margin-bottom: 10px;
        }

        .invoice-details .invoice-number {
            font-weight: bold;
        }

        .invoice-details .invoice-date {
            font-style: italic;
        }

        /* Table styles */
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            border: 1px solid #ccc;
        }

        th {
            text-align: left;
            font-weight: bold;
        }

        /* Total styles */
        .total {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            padding: 20px 40px;
            background-color: #f2f2f2;
            border-top: 1px solid #ccc;
            font-size: 18px;
            font-weight: bold;
        }

        .total span {
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <div class="page-header">
        <div>
            <button onclick="downloadPDF()">Download as PDF</button>
            <h1>Invoice</h1>
            <p>123 Main St, Anytown USA</p>
        </div>
        <div>
            <p>Date: May 24, 2023</p>
            <p>Invoice #001</p>
        </div>
    </div>

    <div class="invoice-details">
        <div>
            <p>Bill To:</p>
            <p>John Doe</p>
            <p>1234 Example St</p>
            <p>Anytown USA</p>
        </div>
        <div>
            <p class="invoice-number">Invoice #001</p>
            <p class="invoice-date">May 24, 2023</p>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th>Description</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Widget A</td>
                <td>2</td>
                <td>$10.00</td>
                <td>$20.00</td>
            </tr>
            <tr>
                <td>Widget B</td>
                <td>3</td>
                <td>$15.00</td>
                <td>$45.00</td>
            </tr>
            <tr>
                <td>Widget C</td>
                <td>1</td>
                <td>$20.00</td>
                <td>$20.00</td>
            </tr>
        </tbody>
    </table>

    <div class="total">
        <span>Total:</span>
        <span>$85.00</span>
    </div>
</body>
</html>

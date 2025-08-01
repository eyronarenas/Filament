## ✅ Overview

-   **DTOs** for structured invoice data
-   **Service Layer** to handle logic like generate/store/download
-   **Template Classes** per invoice type
-   **PDF generation** using `barryvdh/laravel-dompdf`
-   **Job dispatching** for async PDF creation
-   **Immediate download** via HTTP stream

---

## 🛠 Key Components

| Component             | Purpose                                      |
| --------------------- | -------------------------------------------- |
| `InvoiceData`         | DTO holding invoice fields                   |
| `InvoiceDataFactory`  | Creates sample DTOs based on type            |
| `InvoiceService`      | Handles logic for generate, store, download  |
| `GenerateInvoicePdf`  | Job to generate and store PDF asynchronously |
| `Type1Template`, etc. | Blade template wrappers for PDF views        |

---

## 📄 Features

-   `GET /invoice/job/{type}` → Dispatches job to store PDF in storage
-   `GET /invoice/download/{type}` → Streams PDF for direct download (no saving)

---

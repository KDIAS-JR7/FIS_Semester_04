import { QuartzComponent, QuartzComponentConstructor, QuartzComponentProps } from "./types"
import { classNames } from "../util/lang"

const beforeDOMLoaded = `
var s = document.createElement("script")
s.src = "https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"
s.integrity = "sha512-GsLlZN/3F2ErC5ifS5QtgpiJtWd43JWSuIgh7mbzZ8zBps+dvLusV+eNQATqgA/HdeKFVgA5v3S/cIrLF7QnIg=="
s.crossOrigin = "anonymous"
s.referrerPolicy = "no-referrer"
document.head.appendChild(s)
`

const afterDOMLoaded = `
document.addEventListener("nav", () => {
  document.querySelector(".print-button-btn")?.addEventListener("click", async () => {
    const btn = document.querySelector(".print-button-btn")
    const original = btn.innerHTML
    btn.innerHTML = "Generating PDF..."
    btn.disabled = true
    try {
      const el = document.querySelector(".center > article")
      await html2pdf().set({
        margin: [0.5, 0.5],
        filename: document.title.replace(/[^a-z0-9]/gi, "_").toLowerCase() + ".pdf",
        html2canvas: { scale: 2, useCORS: true },
        jsPDF: { unit: "in", format: "a4", orientation: "portrait" },
        pagebreak: { mode: ["avoid-all", "css", "legacy"] },
      }).from(el).save()
    } finally {
      btn.innerHTML = original
      btn.disabled = false
    }
  })
})
`

const PrintButton: QuartzComponent = ({ displayClass }: QuartzComponentProps) => {
  return (
    <div class={classNames(displayClass, "print-button")}>
      <button
        type="button"
        class="print-button-btn"
        aria-label="Download as PDF"
        title="Download as PDF"
      >
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="18"
          height="18"
          viewBox="0 0 24 24"
          fill="none"
          stroke="currentColor"
          stroke-width="2"
          stroke-linecap="round"
          stroke-linejoin="round"
          style={{ marginRight: "6px" }}
        >
          <polyline points="6 9 6 2 18 2 18 9"></polyline>
          <path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path>
          <rect x="6" y="14" width="12" height="8"></rect>
        </svg>
        Download PDF
      </button>
    </div>
  )
}

PrintButton.css = `
.print-button {
  padding: 0.5rem 1rem;
}

.print-button-btn {
  display: flex;
  align-items: center;
  width: 100%;
  padding: 0.5rem 0.75rem;
  border: 1px solid var(--lightgray);
  border-radius: 5px;
  background: var(--light);
  color: var(--darkgray);
  cursor: pointer;
  font-size: 0.9rem;
  font-family: inherit;
  transition: background 0.2s, color 0.2s;
}

.print-button-btn:hover {
  background: var(--highlight);
  color: var(--secondary);
}
`

PrintButton.beforeDOMLoaded = beforeDOMLoaded
PrintButton.afterDOMLoaded = afterDOMLoaded

export default (() => PrintButton) satisfies QuartzComponentConstructor

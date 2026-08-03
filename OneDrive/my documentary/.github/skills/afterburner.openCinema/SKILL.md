---
name: afterburner.openCinema
description: "Open the Afterburner Cinema webview in the Afterburner VS Code extension and help inspect or extend the command implementation."
argument-hint: "Describe whether you want to run, debug, or modify the Afterburner Cinema feature."
---

This skill helps users work with the `afterburner.openCinema` command in the Afterburner extension.
Use this skill when the user asks to:
- open or test the Afterburner Cinema webview
- inspect the command registration in `package.json`
- trace the `openCinemaWebview()` implementation in `src/cinema.ts`
- update or extend the Cinema webview content, styling, or behavior

## Workflow
1. Confirm the user goal: run the command, inspect the feature, or change the Cinema webview.
2. Verify `afterburner.openCinema` appears in `package.json` under `activationEvents` and `contributes.commands`.
3. Open `src/extension.ts` and locate the command registration for `afterburner.openCinema`.
4. Open `src/cinema.ts` and review the `openCinemaWebview()` implementation and HTML/CSS content.
5. Apply requested changes and preserve the webview lifecycle and security model.

## Quality checks
- `afterburner.openCinema` is correctly registered and activated.
- `openCinemaWebview()` returns valid HTML and uses a webview panel.
- CSS, layout, and content remain consistent with a cinematic experience.
- Any requested modifications preserve command registration and extension structure.

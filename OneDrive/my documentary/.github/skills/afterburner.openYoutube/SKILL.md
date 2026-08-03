---
name: afterburner.openYoutube
description: "Open the Afterburner YouTube webview in the Afterburner VS Code extension and help inspect or extend the command implementation."
argument-hint: "Describe whether you want to run, debug, or modify the Afterburner YouTube feature."
---

This skill helps users work with the `afterburner.openYoutube` command in the Afterburner extension.
Use this skill when the user asks to:
- open or test the Afterburner YouTube webview
- inspect the command registration in `package.json`
- trace the `openYoutubeWebview()` implementation in `src/youtube.ts`
- update or extend the YouTube webview content, styling, or behavior

## Workflow
1. Confirm the user goal: run the command, inspect the feature, or change the YouTube webview.
2. Verify `afterburner.openYoutube` appears in `package.json` under `activationEvents` and `contributes.commands`.
3. Open `src/extension.ts` and locate the command registration for `afterburner.openYoutube`.
4. Open `src/youtube.ts` and review the `openYoutubeWebview()` implementation and HTML/CSS content.
5. Apply requested changes and preserve the webview lifecycle and security model.

## Quality checks
- `afterburner.openYoutube` is correctly registered and activated.
- `openYoutubeWebview()` returns valid HTML and uses a webview panel.
- UI content remains consistent with a YouTube-style experience.
- Any requested modifications preserve command registration and extension structure.

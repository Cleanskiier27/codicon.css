---
name: afterburner.openMusic
description: "Open the Afterburner Music webview in the Afterburner VS Code extension and help inspect or extend the command implementation."
argument-hint: "Describe whether you want to run, debug, or modify the Afterburner Music feature."
---

This skill helps users work with the `afterburner.openMusic` command in the Afterburner extension.
Use this skill when the user asks to:
- open or test the Afterburner Music webview
- inspect the command registration in `package.json`
- trace the `openMusicWebview()` implementation in `src/music.ts`
- update or extend the Music webview content, styling, or behavior

## Workflow
1. Confirm the user goal: run the command, inspect the feature, or change the Music webview.
2. Verify `afterburner.openMusic` appears in `package.json` under `activationEvents` and `contributes.commands`.
3. Open `src/extension.ts` and locate the command registration for `afterburner.openMusic`.
4. Open `src/music.ts` and review the `openMusicWebview()` implementation and HTML/CSS content.
5. Apply requested changes and preserve the webview lifecycle and security model.

## Quality checks
- `afterburner.openMusic` is correctly registered and activated.
- `openMusicWebview()` returns valid HTML and uses a webview panel.
- UI content remains consistent with a music player or media feature experience.
- Any requested modifications preserve command registration and extension structure.

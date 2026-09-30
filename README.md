# Active Calls Monitor for Dzvin PBX

[![GitHub release](https://img.shields.io/github/v/release/dzvinpbx/dzvinpbx-module-monitoractivecalls)](https://github.com/dzvinpbx/dzvinpbx-module-monitoractivecalls/releases)
[![License: GPL v3](https://img.shields.io/badge/License-GPLv3-blue.svg)](https://www.gnu.org/licenses/gpl-3.0)

**[Українською](README.uk.md)** | **[Русская версия](README.ru.md)** | **English**

Module for Dzvin PBX to monitor ongoing calls and let supervisors perform actions on active calls. Free, GPL-3.0-or-later.

> This is a Dzvin PBX fork of the MikoPBX **ModuleMonitorActiveCalls** module — see [Attribution](#attribution) below.

## Key features

- Display all active calls
- Call actions: Listen, Whisper, Join, Hang up
- Display the selected queue state (waiting calls and agents)
- Multi-user mode, compatible with the "Access control" module

## Interface and usage

### Current employee setup
- With limited permissions, "Employee" and "Extension" are filled automatically.
- With administrator rights, click "Username" to choose an employee.
- Supervisor actions ("Connect to the call") are performed on behalf of the chosen employee.

### Displayed queue
- Left column: waiting calls — caller number and waiting time. Click the header to pick another queue.
- Right column: agents state with "Extension", "Name", "Peer". Statuses are color-coded.

### All active calls
- Each row represents a single call; status is color-coded.
- Columns: "Start" (hh:mm:ss), "From", "To", "Ringing" (hh:mm:ss), "Talk" (hh:mm:ss).

### Call actions
- "Hang up" — ends the selected call.
- "Listen" — originates a call from the employee's extension and connects silently (one-way monitor).
- "Whisper" — connects to the call; the employee can speak to the agent only (customer cannot hear).
- "Join" — barges into the call and fully participates.

## Requirements

- Dzvin PBX 2024.1.114 or newer

## Installation

1. In the Dzvin PBX web UI open Modules -> Marketplace and install "Active Calls".
2. Or download the `.zip` from [Releases](https://github.com/dzvinpbx/dzvinpbx-module-monitoractivecalls/releases) and upload it via Modules -> Install module.
3. Open the "Active Calls" module and, if needed, select the employee and the queue.

## Support

Questions and bugs: [GitHub Issues](https://github.com/dzvinpbx/dzvinpbx-module-monitoractivecalls/issues).

## License

GPL-3.0-or-later — see [LICENSE](LICENSE).

## Attribution

This is a Dzvin PBX fork of [`mikopbx/ModuleMonitorActiveCalls`](https://github.com/mikopbx/ModuleMonitorActiveCalls)
(from tag `v1.11`, commit `dbf4c18`), (C) MIKO LLC, Alexey Portnov and Nikolay Beketov, licensed
GPL-3.0-or-later. The fork renames the PBX core namespace the module loads against
(`MikoPBX\` -> `DzvinPBX\`), removes the licensing metadata, completes the Ukrainian UI strings and
adjusts links and the release process for this repository. The original copyright and license
headers are kept unchanged in every source file; see [MikoPBX Core](https://github.com/mikopbx/Core)
for the upstream PBX this module was built for.

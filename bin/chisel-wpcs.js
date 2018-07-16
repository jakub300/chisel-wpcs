#!/usr/bin/env node

const path = require('path');
const childProcess = require('child_process');

try {
  childProcess.execFileSync(
    'php',
    [path.join(__dirname, '../external/phpcs.phar'), ...process.argv.slice(2)],
    {
      stdio: 'inherit'
    }
  );
} catch (e) {
  process.exit(e.status);
}

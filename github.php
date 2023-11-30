Starting with Basic Git Commands on Ubuntu
The following is a list of useful Git commands to help you get started:

Find changed files in the working directory: git status
Change to tracked files: git diff
Add all changes to your next commit: git add
Add selected changes into your next commit: git add -p
Change the last commit: git commit -amend
Commit all local changes in tracked files: git commit -a
Commit previously staged changes: git commit
Rename a Local branch git branch -m new-name
List all currently configured remotes: git remote -v
View information about a remote: git remote show
Add a new remote repository: git remote add
Delete a remote repository git remote remove [remote name]
Download all changes from a remote repository: git fetch
Download all changes from and merge into HEAD: git pull branch
Create a new branch with the command: git branch first-branch
To see more Git commands use: git --help

…or create a new repository on the command line
echo "# git-demo" >> README.md
  git init
  git add README.md
  git commit -m "first commit"
  git branch -M main
  git remote add origin https://github.com/developersksingh/git-demo.git
  git push -u origin main
…or push an existing repository from the command line
git remote add origin https://github.com/developersksingh/git-demo.git
  git branch -M main
  git push -u origin main
…or import code from another repository
You can initialize this repository with code from a Subversion, Mercurial, or TFS project.

Step 1: Generate Your SSH Key

$ ssh-keygen -t rsa -b 4096 -C "example@example.com"
Step 2: Use the Key

$ eval $(ssh-agent -s)
Then add the key we just generated. If you selected a different path than the default, be sure to replace that path in the command.

ssh-add ~/.ssh/id_rsa
Step 3: Add the SSH Key on GitHub

clip < ~/.ssh/id_rsa.pub
if clip not found then add the next command

cat ~/.ssh/id_rsa.pub
Finally Result something like on your cmd

ssh-rsa AAAA

git commit -help
usage: git commit [] [--] ...

    -q, --quiet           suppress summary after successful commit
    -v, --verbose         show diff in commit message template

Commit message options
    -F, --file      read message from file
    --author      override author for commit
    --date          override date for commit
    -m, --message 
                          commit message
    -c, --reedit-message 
                          reuse and edit message from specified commit
    -C, --reuse-message 
                          reuse message from specified commit
    --fixup       use autosquash formatted message to fixup specified commit
    --squash      use autosquash formatted message to squash specified commit
    --reset-author        the commit is authored by me now (used with -C/-c/--amend)
    -s, --signoff         add a Signed-off-by trailer
    -t, --template 
                          use specified template file
    -e, --edit            force edit of commit
    --cleanup       how to strip spaces and #comments from message
    --status              include status in commit message template
    -S, --gpg-sign[=]
                          GPG sign commit

Commit contents options
    -a, --all             commit all changed files
    -i, --include         add specified files to index for commit
    --interactive         interactively add files
    -p, --patch           interactively add changes
    -o, --only            commit only specified files
    -n, --no-verify       bypass pre-commit and commit-msg hooks
    --dry-run             show what would be committed
    --short               show status concisely
    --branch              show branch information
    --ahead-behind        compute full ahead/behind values
    --porcelain           machine-readable output
    --long                show status in long format (default)
    -z, --null            terminate entries with NUL
    --amend               amend previous commit
    --no-post-rewrite     bypass post-rewrite hook
    -u, --untracked-files[=]
                          show untracked files, optional modes: all, normal, no. (Default: all)
    --pathspec-from-file 
                          read pathspec from file
    --pathspec-file-nul   with --pathspec-from-file, pathspec elements are separated with NUL character
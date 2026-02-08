import { PageHeader } from '@/components/layout/page-header'
import { Button } from '@/components/ui/button'
import {
  Card,
  CardContent,
  CardDescription,
  CardHeader,
  CardTitle,
} from '@/components/ui/card'
import { Plus, ClipboardList } from 'lucide-react'

export default function TasksPage() {
  return (
    <div>
      <PageHeader
        title="Tasks"
        description="Create and manage recurring maintenance tasks"
      >
        <Button>
          <Plus className="mr-2 h-4 w-4" />
          Add Task
        </Button>
      </PageHeader>
      <div className="p-6">
        <Card>
          <CardHeader>
            <CardTitle>No tasks yet</CardTitle>
            <CardDescription>
              Create your first maintenance task to get started
            </CardDescription>
          </CardHeader>
          <CardContent>
            <div className="flex flex-col items-center justify-center py-8 text-center">
              <div className="flex h-12 w-12 items-center justify-center rounded-full bg-muted">
                <ClipboardList className="h-6 w-6 text-muted-foreground" />
              </div>
              <p className="mt-4 text-sm text-muted-foreground">
                Tasks are recurring maintenance activities assigned to locations.
                Set a schedule and track when each task is due.
              </p>
              <Button className="mt-4">
                <Plus className="mr-2 h-4 w-4" />
                Add Your First Task
              </Button>
            </div>
          </CardContent>
        </Card>
      </div>
    </div>
  )
}
